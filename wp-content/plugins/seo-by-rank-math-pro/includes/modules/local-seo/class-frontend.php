<?php
/**
 * The Local_Seo Module
 *
 * @since      1.0.0
 * @package    RankMath
 * @subpackage RankMathPro
 * @author     Rank Math <support@rankmath.com>
 */

namespace RankMathPro\Local_Seo;

use RankMath\Helper;
use RankMath\Post;
use RankMath\Traits\Hooker;
use RankMath\Schema\DB;

defined( 'ABSPATH' ) || exit;

/**
 * Frontend class.
 */
class Frontend {

	use Hooker;

	/**
	 * The Constructor.
	 */
	public function __construct() {
		$this->action( 'rank_math/json_ld', 'add_location_schema', 100, 2 );
		$this->action( 'rank_math/head', 'add_location_tags', 90 );

		new Search();
	}

	/**
	 * Add Locations Metatags to head.
	 */
	public function add_location_tags() {
		if ( ! is_singular( 'rank_math_locations' ) ) {
			return;
		}

		$schema = DB::get_schemas( Post::get_simple_page_id() );
		if ( empty( $schema ) ) {
			return;
		}
		$schema    = current( $schema );
		$meta_tags = [
			'placename' => ! empty( $schema['address']['addressLocality'] ) ? $schema['address']['addressLocality'] : '',
			'position'  => ! empty( $schema['geo']['latitude'] ) ? $schema['geo']['latitude'] . ';' . $schema['geo']['longitude'] : '',
			'region'    => ! empty( $schema['address']['addressCountry'] ) ? $schema['address']['addressCountry'] : '',
		];

		foreach ( $meta_tags as $name => $value ) {
			if ( ! $value ) {
				continue;
			}

			printf( '<meta name="geo.%1$s" content="%2$s" />' . "\n", esc_attr( $name ), esc_attr( $value ) );
		}
	}

	/**
	 * Add Locations Schema.
	 *
	 * @param array  $data    Array of json-ld data.
	 * @param JsonLD $jsonld Instance of jsonld.
	 *
	 * @return array
	 */
	public function add_location_schema( $data, $jsonld ) {
		if ( ! is_singular( 'rank_math_locations' ) ) {
			return $data;
		}

		global $post;
		$schema_key = key( DB::get_schemas( $post->ID ) );
		if ( ! isset( $data[ $schema_key ] ) ) {
			return $data;
		}

		$entity = $data[ $schema_key ];
		$this->add_place_entity( $data, $entity, $jsonld );
		$this->validate_publisher_data( $data, $jsonld );

		$data[ $schema_key ] = $this->validate_locations_data( $entity, $data );

		return $data;
	}

	/**
	 * Add Schema Place entity on Rank Math locations posts.
	 *
	 * @param array  $data   Array of json-ld data.
	 * @param array  $entity Location data.
	 * @param JsonLD $jsonld Instance of jsonld.
	 */
	private function add_place_entity( &$data, &$entity, $jsonld ) {
		$properties = [];
		foreach ( [ 'openingHoursSpecification', 'geo' ] as $property ) {
			if ( isset( $entity[ $property ] ) ) {
				$properties[ $property ] = $entity[ $property ];
			}
		}

		if ( isset( $entity['address'] ) ) {
			$properties['address'] = $entity['address'];
		}

		if ( empty( $properties ) ) {
			return;
		}

		$data['place'] = array_merge(
			[
				'@type' => 'Place',
				'@id'   => $jsonld->parts['canonical'] . '#place',
			],
			$properties
		);
	}

	/**
	 * Change Publisher Data when multiple locations option is enabled.
	 *
	 * @param array  $data    Array of json-ld data.
	 * @param JsonLD $jsonld Instance of jsonld.
	 *
	 * @return array
	 */
	private function validate_publisher_data( &$data, $jsonld ) {
		if ( empty( $data['publisher'] ) ) {
			return;
		}

		$data['publisher'] = [
			'@type' => 'Organization',
			'@id'   => $data['publisher']['@id'],
			'name'  => $jsonld->get_website_name(),
			'logo'  => [
				'@type' => 'ImageObject',
				'url'   => Helper::get_settings( 'titles.knowledgegraph_logo' ),
			],
		];
	}

	/**
	 * Validate Locations data before adding it in ld+json.
	 *
	 * @param array $entity Location data.
	 * @param array $data   Array of json-ld data.
	 *
	 * @return array
	 */
	private function validate_locations_data( $entity, $data ) {
		// Remove invalid properties.
		foreach ( [ 'isPartOf', 'publisher', 'inLanguage' ] as $property ) {
			if ( isset( $entity[ $property ] ) ) {
				unset( $entity[ $property ] );
			}
		}

		// Add Parent Organization.
		if (
			! empty( $data['publisher'] ) &&
			Helper::get_settings( 'titles.same_organization_locations', false )
		) {
			$entity['parentOrganization'] = [ '@id' => $data['publisher']['@id'] ];
		}

		// Add reference to the place entity.
		if ( isset( $data['place'] ) ) {
			$entity['location'] = [ '@id' => $data['place']['@id'] ];
		}

		return $entity;
	}
}
