<?php
/**
 * The Schema Module
 *
 * @since      2.0.0
 * @package    RankMath
 * @subpackage RankMath\Schema
 * @author     Rank Math <support@rankmath.com>
 */

namespace RankMathPro\Schema;

use RankMath\Helper;
use RankMath\Admin\Admin_Helper;
use RankMath\Schema\DB;
use RankMath\Traits\Hooker;
use RankMath\Rest\Sanitize;
use MyThemeShop\Helpers\Str;
use MyThemeShop\Helpers\Param;

defined( 'ABSPATH' ) || exit;

/**
 * Admin class.
 */
class Admin {

	use Hooker;

	/**
	 * The Constructor.
	 */
	public function __construct() {
		$this->action( 'admin_enqueue_scripts', 'overwrite_wplink', 100 );
		$this->action( 'rank_math/admin/enqueue_scripts', 'admin_scripts' );
		$this->action( 'rank_math/admin/enqueue_scripts', 'deregister_scripts', 99 );
		$this->action( 'save_post', 'save', 10, 2 );
		$this->action( 'edit_form_after_title', 'render_div' );
		$this->filter( 'rank_math/filter_metadata', 'filter_metadata', 10, 2 );
		$this->filter( 'rank_math/settings/snippet/types', 'add_pro_schema_types' );

		if ( 'elementor' === Param::get( 'action' ) ) {
			$this->action( 'elementor/editor/before_enqueue_scripts', 'elementor_scripts', 9 );
			$this->action( 'elementor/editor/before_enqueue_scripts', 'overwrite_wplink', 99 );
		}
	}

	/**
	 * Add Pro schema types in Schema settings choices array.
	 *
	 * @param array $types Schema types.
	 */
	public function add_pro_schema_types( $types ) {
		$types = array_merge(
			$types,
			[
				'dataset'   => esc_html__( 'DataSet', 'rank-math-pro' ),
				'FactCheck' => esc_html__( 'Fact Check', 'rank-math-pro' ),
				'movie'     => esc_html__( 'Movie', 'rank-math-pro' ),
			]
		);

		unset( $types['off'] );
		ksort( $types, SORT_NATURAL | SORT_FLAG_CASE );
		return [ 'off' => esc_html__( 'None (Click here to set one)', 'rank-math-pro' ) ] + $types;
	}

	/**
	 * Overwrite wplink script file.
	 * Rank Math adds new options in the link popup when editing a post.
	 */
	public function overwrite_wplink() {
		wp_deregister_script( 'rank-math-formats' );
		wp_register_script(
			'rank-math-formats',
			RANK_MATH_PRO_URL . 'assets/admin/js/gutenberg-formats.js',
			[],
			rank_math_pro()->version,
			true
		);

		wp_deregister_script( 'wplink' );
		wp_register_script( 'wplink', RANK_MATH_PRO_URL . 'assets/admin/js/wplink.js', [ 'jquery', 'wpdialogs' ], rank_math_pro()->version, true );

		wp_localize_script(
			'wplink',
			'wpLinkL10n',
			[
				'title'             => esc_html__( 'Insert/edit link', 'rank-math-pro' ),
				'update'            => esc_html__( 'Update', 'rank-math-pro' ),
				'save'              => esc_html__( 'Add Link', 'rank-math-pro' ),
				'noTitle'           => esc_html__( '(no title)', 'rank-math-pro' ),
				'noMatchesFound'    => esc_html__( 'No matches found.', 'rank-math-pro' ),
				'linkSelected'      => esc_html__( 'Link selected.', 'rank-math-pro' ),
				'linkInserted'      => esc_html__( 'Link inserted.', 'rank-math-pro' ),
				'relCheckbox'       => '<code>rel="nofollow"</code>',
				'sponsoredCheckbox' => '<code>rel="sponsored"</code>',
				'aboutCheckbox'     => '<code>about</code>',
				'mentionsCheckbox'  => '<code>mentions</code>',
				'schemaMarkupLabel' => esc_html__( 'Use in Schema Markup', 'rank-math-pro' ),
				'linkTitle'         => esc_html__( 'Link Title', 'rank-math-pro' ),
			]
		);
	}

	/**
	 * Elementor Scipts.
	 */
	public function elementor_scripts() {
		Helper::add_json( 'schemaTemplates', $this->get_schema_templates() );
		wp_enqueue_style( 'rank-math-schema-pro', RANK_MATH_PRO_URL . 'includes/modules/schema/assets/css/schema.css', null, rank_math_pro()->version );
		wp_enqueue_script(
			'rank-math-pro-schema-filters',
			RANK_MATH_PRO_URL . 'includes/modules/schema/assets/js/schemaFilters.js',
			[
				'wp-plugins',
				'wp-components',
				'wp-hooks',
				'wp-api-fetch',
				'lodash',
			],
			rank_math_pro()->version,
			true
		);
		wp_enqueue_script( 'rank-math-schema-pro', RANK_MATH_PRO_URL . 'includes/modules/schema/assets/js/schema.js', [], rank_math_pro()->version, true );
	}

	/**
	 * Add admin JS.
	 *
	 * @return void
	 */
	public function admin_scripts() {
		if ( ! Helper::has_cap( 'onpage_snippet' ) || ! Admin_Helper::is_post_edit() || Admin_Helper::is_posts_page() ) {
			return;
		}

		$post = get_post();
		Helper::add_json( 'postStatus', get_post_field( 'post_status', $post ) );
		Helper::add_json( 'postLink', get_permalink( $post ) );
		Helper::add_json( 'schemaTemplates', $this->get_schema_templates() );
		Helper::add_json( 'activeTemplates', $this->get_active_templates() );
		Helper::add_json( 'accessiblePostTypes', Helper::get_accessible_post_types() );
		Helper::add_json( 'accessibleTaxonomies', Helper::get_accessible_taxonomies() );
		wp_enqueue_style( 'rank-math-schema-pro', RANK_MATH_PRO_URL . 'includes/modules/schema/assets/css/schema.css', null, rank_math_pro()->version );

		wp_enqueue_script(
			'rank-math-pro-schema-filters',
			RANK_MATH_PRO_URL . 'includes/modules/schema/assets/js/schemaFilters.js',
			[
				'wp-plugins',
				'wp-components',
				'wp-hooks',
				'wp-api-fetch',
				'lodash',
			],
			rank_math_pro()->version,
			true
		);

		$screen = get_current_screen();
		if ( 'rank_math_schema' === $screen->post_type ) {
			Helper::add_json( 'isTemplateScreen', true );
			wp_enqueue_script(
				'rank-math-pro-schema',
				rank_math()->plugin_url() . 'includes/modules/schema/assets/js/schema-template.js',
				[
					'clipboard',
					'wp-autop',
					'wp-components',
					'wp-editor',
					'wp-edit-post',
					'wp-element',
					'wp-i18n',
					'wp-plugins',
					'rank-math-analyzer',
				],
				rank_math_pro()->version,
				true
			);

			return;
		}

		$dep = Helper::is_block_editor() && \rank_math_is_gutenberg() ? [ 'rank-math-schema' ] : [ 'rank-math-metabox' ];
		wp_enqueue_script( 'rank-math-schema-pro', RANK_MATH_PRO_URL . 'includes/modules/schema/assets/js/schema.js', $dep, rank_math_pro()->version, true );
	}

	/**
	 * Deregister some scripts.
	 */
	public function deregister_scripts() {
		$screen = get_current_screen();
		if ( 'post' !== $screen->base || Helper::is_elementor_editor() || 'rank_math_schema' !== $screen->post_type ) {
			return;
		}

		wp_deregister_script( 'rank-math-metabox' );
		wp_deregister_script( 'rank-math-schema' );

		if ( wp_script_is( 'rank-math-pro-metabox', 'registered' ) ) {
			wp_deregister_script( 'rank-math-pro-metabox' );
		}
	}



	/**
	 * Render app div
	 */
	public function render_div() {
		$screen = get_current_screen();
		if ( 'rank_math_schema' !== $screen->post_type ) {
			return;
		}

		Helper::add_json( 'postType', 'rank_math_schema' );

		wp_nonce_field( 'rank_math_schema_template', 'security' );
		?>
		<div id="rank-math-schema-template"></div>
		<textarea name="rank_math_schema" rows="8" cols="80" class="rank-math-schema"></textarea>
		<input type="text" name="rank_math_schema_meta_id" class="rank-math-schema-meta-id" value="">
		<?php
	}

	/**
	 * Save post data.
	 *
	 * @param  int    $post_id Post id.
	 * @param  object $post    Post object.
	 */
	public function save( $post_id, $post ) {
		if (
			! isset( $_POST['security'] ) ||
			! wp_verify_nonce( $_POST['security'], 'rank_math_schema_template' ) ||
			! isset( $_POST['rank_math_schema'] )
		) {
			return $post_id;
		}

		$post_type = get_post_type_object( $post->post_type );
		if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {
			return $post_id;
		}

		$sanitizer = Sanitize::get();
		$schema    = stripslashes_deep( $_POST['rank_math_schema'] );
		$schema    = json_decode( $schema, true );
		$schema    = $sanitizer->sanitize( 'rank_math_schema', $schema );

		$meta_key = 'rank_math_schema_' . $schema['@type'];
		update_post_meta( $post_id, $meta_key, $schema );

		// Publish Schema Template post.
		if ( 'rank_math_schema' === $post->post_type && 'publish' !== $post->post_status ) {
			wp_update_post(
				[
					'ID'          => $post_id,
					'post_status' => 'publish',
				]
			);
		}
	}

	/**
	 * Add excluded template conditions in the Schema template and remove it from the metadata.
	 *
	 * @param array           $meta    Meta data to update.
	 * @param WP_REST_Request $request Full details about the request.
	 *
	 * @return array Processed metadata.
	 */
	public function filter_metadata( $meta, $request ) {
		foreach ( $meta as $meta_key => $meta_value ) {
			if ( ! Str::starts_with( 'rank_math_exclude_template_', $meta_key ) ) {
				continue;
			}

			$template_id = absint( \str_replace( 'rank_math_exclude_template_', '', $meta_key ) );
			$schema_data = DB::get_schemas( $template_id );
			$meta_id     = key( $schema_data );
			$meta_key    = 'rank_math_schema_' . $schema_data[ $meta_id ]['@type'];

			$schema_data[ $meta_id ]['metadata']['displayConditions'][] = [
				'condition' => 'exclude',
				'category'  => 'singular',
				'type'      => $request->get_param( 'objectType' ),
				'value'     => $request->get_param( 'objectID' ),
			];

			$db_id = absint( str_replace( 'schema-', '', $meta_id ) );
			update_metadata_by_mid( 'post', $db_id, $schema_data[ $meta_id ], $meta_key );

			unset( $meta[ "rank_math_exclude_template_{$template_id}" ] );
		}

		return $meta;
	}

	/**
	 * Add active templates to the schemas json
	 *
	 * @return array
	 */
	public function get_active_templates() {
		$screen = get_current_screen();

		if ( 'rank_math_schema' === $screen->post_type ) {
			return [];
		}

		$templates = $this->get_schema_templates();
		if ( empty( $templates ) ) {
			return [];
		}

		$schemas = [];
		foreach ( $templates as $template ) {
			if ( empty( $template['schema']['metadata']['displayConditions'] ) ) {
				continue;
			}

			$conditions = $template['schema']['metadata']['displayConditions'];
			$can_add    = false;
			$data       = [];

			foreach ( $conditions as $condition ) {
				$category = $condition['category'];
				if ( ! in_array( $category, [ 'singular', 'general' ], true ) ) {
					continue;
				}

				$operator = $condition['condition'];
				if ( ! empty( $data[ $category ] ) && 'exclude' !== $operator ) {
					continue;
				}

				$type  = $condition['type'];
				$value = $condition['value'];

				if ( 'general' === $category ) {
					$data[ $category ] = 'include' === $operator;
					continue;
				}

				if ( $value && absint( Param::get( 'post' ) ) === $value ) {
					$data[ $category ] = 'include' === $operator;
					break;
				}

				if ( 'all' === $type ) {
					$data[ $category ] = 'include' === $operator;
				} elseif ( $type !== $screen->post_type ) {
					$data[ $category ] = false;
				} elseif ( ! $value ) {
					$data[ $category ] = 'include' === $operator;
				} elseif ( Param::get( 'post' ) !== $value ) {
					$data[ $category ] = isset( $data[ $category ] ) ? $data[ $category ] : false;
				} else {
					$data[ $category ] = 'include' === $operator;
				}
			}

			if ( isset( $data['singular'] ) ) {
				$can_add = $data['singular'];
			} else {
				$can_add = ! empty( $data['general'] );
			}

			if ( $can_add ) {
				$template['schema']['isTemplate'] = true;
				$schemas[ $template['id'] ]       = $template['schema'];
			}
		}

		return $schemas;
	}

	/**
	 * [get_schema_templates description]
	 *
	 * @return array
	 */
	private function get_schema_templates() {
		$posts = get_posts(
			[
				'post_type'      => 'rank_math_schema',
				'posts_per_page' => -1,
				'orderby'        => 'title',
				'order'          => 'ASC',
			]
		);

		if ( empty( $posts ) ) {
			return [];
		}

		$templates = [];
		foreach ( $posts as $post ) {
			$data          = DB::get_template_type( $post->ID );
			$data['title'] = $post->post_title;
			$data['id']    = $post->ID;

			$templates[] = $data;
		}

		return $templates;
	}
}
