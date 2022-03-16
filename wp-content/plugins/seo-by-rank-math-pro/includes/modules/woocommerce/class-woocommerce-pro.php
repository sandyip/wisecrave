<?php
/**
 * WooCommerce module.
 *
 * @since      1.0
 * @package    RankMathPro
 * @author     Rank Math <support@rankmath.com>
 */

namespace RankMathPro;

use RankMath\Helper;
use RankMath\Traits\Hooker;
use MyThemeShop\Helpers\Conditional;

defined( 'ABSPATH' ) || exit;

/**
 * WooCommerce class.
 *
 * @codeCoverageIgnore
 */
class WooCommerce {

	use Hooker;

	/**
	 * Constructor.
	 */
	public function __construct() {
		if ( is_admin() ) {
			new Admin();
			return;
		}
		$this->action( 'wp', 'init' );
	}

	/**
	 * Filter/Hooks to add GTIN value on Product page.
	 */
	public function init() {
		if ( ! is_product() ) {
			return;
		}

		$this->filter( 'rank_math/frontend/robots', 'robots' );
		$this->filter( 'rank_math/snippet/rich_snippet_product_entity', 'add_gtin_in_schema' );
		$this->filter( 'rank_math/woocommerce/product_brand', 'add_custom_product_brand' );

		if ( Helper::get_settings( 'general.show_gtin' ) ) {
			$this->action( 'woocommerce_product_meta_start', 'add_gtin_meta' );
			$this->filter( 'woocommerce_available_variation', 'add_gtin_to_variation_param', 10, 3 );
			$this->action( 'wp_footer', 'add_variation_script' );
		}
	}

	/**
	 * Change robots for WooCommerce pages according to settings
	 *
	 * @param array $robots Array of robots to sanitize.
	 *
	 * @return array Modified robots.
	 */
	public function robots( $robots ) {
		$is_hidden = \wc_get_product()->get_catalog_visibility() === 'hidden';

		if ( Helper::get_settings( 'general.noindex_hidden_products' ) && $is_hidden ) {
			return [
				'noindex'  => 'noindex',
				'nofollow' => 'nofollow',
			];
		}

		return $robots;
	}

	/**
	 * Filter to change Product brand value based on the Settings.
	 *
	 * @param string $brand Brand.
	 *
	 * @return string Modified brand.
	 */
	public function add_custom_product_brand( $brand ) {
		return 'custom' === Helper::get_settings( 'general.product_brand' ) ? Helper::get_settings( 'general.custom_product_brand' ) : $brand;
	}

	/**
	 * Filter to add GTIN in Product schema.
	 *
	 * @param array $entity Snippet Data.
	 * @return array
	 */
	public function add_gtin_in_schema( $entity ) {
		global $product;
		$gtin = $product->get_meta( '_rank_math_gtin_code' );
		if ( $gtin ) {
			$entity[ Helper::get_settings( 'general.gtin', 'gtin8' ) ] = $gtin;
		}

		return $entity;
	}

	/**
	 * Add GTIN data in Product metadata.
	 */
	public function add_gtin_meta() {
		global $product;
		$gtin_code = $product->get_meta( '_rank_math_gtin_code' );
		if ( ! $gtin_code ) {
			return;
		}

		echo '<span class="rank-math-gtin-wrapper">';
		echo $this->get_formatted_value( $gtin_code );
		echo '</span>';
	}

	/**
	 * Add GTIN value to available variations.
	 *
	 * @param array  $args      Array of variation arguments.
	 * @param Object $product   Current Product Object.
	 * @param Object $variation Product variation.
	 *
	 * @return array Modified robots.
	 */
	public function add_gtin_to_variation_param( $args, $product, $variation ) {
		$args['rank_math_gtin'] = $this->get_formatted_value( $variation->get_meta( '_rank_math_gtin_code' ) );

		return $args;
	}

	/**
	 * Variation script to change GTIN when variation is changed from the dropdown.
	 */
	public function add_variation_script() {
		global $product;
		if ( ! $product->is_type( 'variable' ) ) {
			return;
		}
		?>
		<script>
			const $form = jQuery( '.variations_form' );
			const wrapper = jQuery( '.rank-math-gtin-wrapper' );
			const gtin_code = wrapper.text();
			if ( $form.length ) {
				$form.on( 'found_variation', function( event, variation ) {
					if ( variation.rank_math_gtin ) {
						wrapper.text( variation.rank_math_gtin );
					}
				} );

				$form.on( 'reset_data', function() {
					wrapper.text( gtin_code );
				} );
			}
		</script>
		<?php
	}

	/**
	 * Get formatted GTIN value with label.
	 *
	 * @param string $gtin GTIN code.
	 *
	 * @return string Formatted GTIN value with label.
	 */
	private function get_formatted_value( $gtin ) {
		$label = Helper::get_settings( 'general.gtin_label' );
		$label = $label ? $label . ' ' : '';

		return esc_html( $this->do_filter( 'woocommerce/gtin_label', $label ) . $gtin );
	}
}
