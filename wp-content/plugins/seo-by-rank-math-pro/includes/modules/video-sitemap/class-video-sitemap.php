<?php
/**
 * The Video Sitemap Module
 *
 * @since      1.0.0
 * @package    RankMath
 * @subpackage RankMathPro
 * @author     MyThemeShop <admin@mythemeshop.com>
 */

namespace RankMathPro\Sitemap;

use RankMath\Helper;
use RankMath\Traits\Hooker;
use RankMath\Sitemap\Router;

defined( 'ABSPATH' ) || exit;

/**
 * Video_Sitemap class.
 */
class Video_Sitemap {

	use Hooker;

	/**
	 * The Constructor.
	 */
	public function __construct() {

		if ( is_admin() ) {
			$this->filter( 'rank_math/settings/sitemap', 'add_settings', 11 );
			new Video_Metabox();
		}

		if ( ! $this->can_add_sitemap() ) {
			return;
		}

		$this->filter( 'rank_math/sitemap/providers', 'add_provider' );
		$this->filter( 'rank_math/sitemap/video_urlset', 'xml_urlset' );
		$this->filter( 'rank_math/sitemap/xsl_video', 'sitemap_xsl' );
		$this->filter( 'rank_math/sitemap/video_stylesheet_url', 'stylesheet_url' );
		$this->filter( 'rank_math/sitemap/video_sitemap_url', 'sitemap_url', 10, 2 );
	}

	/**
	 * Add module settings into general optional panel.
	 *
	 * @param array $tabs Array of option panel tabs.
	 *
	 * @return array
	 */
	public function add_settings( $tabs ) {
		$sitemap_url           = Router::get_base_url( 'video-sitemap.xml' );
		$tabs['video-sitemap'] = [
			'icon'      => 'dashicons dashicons-format-video',
			'title'     => esc_html__( 'Video Sitemap', 'rank-math-pro' ),
			'desc'      => wp_kses_post( __( 'Video Sitemaps give search engines information about video content on your site. More information: <a href="https://rankmath.com/kb/video-sitemap/?utm_source=Plugin&utm_campaign=WP" target="_blank">Video Sitemaps</a>', 'rank-math-pro' ) ),
			'file'      => dirname( __FILE__ ) . '/settings-video.php',
			/* translators: Video Sitemap Url */
			'after_row' => '<div class="notice notice-alt notice-info info inline rank-math-notice"><p>' . sprintf( esc_html__( 'Your Video Sitemap index can be found here: %s', 'rank-math-pro' ), '<a href="' . $sitemap_url . '" target="_blank">' . $sitemap_url . '</a>' ) . '</p></div>',
		];

		return $tabs;
	}

	/**
	 * Add video sitemap provider.
	 *
	 * @param array $providers Sitemap provider registry.
	 */
	public function add_provider( $providers ) {
		$providers[] = new \RankMathPro\Sitemap\Video_Provider();

		return $providers;
	}

	/**
	 * Produce XML output for video urlset.
	 *
	 * @return string
	 */
	public function xml_urlset() {
		return '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" '
			. 'xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd '
			. 'http://www.google.com/schemas/sitemap-video/1.1 http://www.google.com/schemas/sitemap-video/1.1/sitemap-video.xsd" '
			. 'xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" '
			. 'xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">' . "\n";
	}

	/**
	 * Stylesheet Url for video.
	 *
	 * @return string
	 */
	public function stylesheet_url() {
		$stylesheet_url = preg_replace( '/(^http[s]?:)/', '', Router::get_base_url( 'video-sitemap.xsl' ) );
		return '<?xml-stylesheet type="text/xsl" href="' . $stylesheet_url . '"?>';
	}

	/**
	 * Stylesheet for Video Sitemap.
	 *
	 * @param string $title Title for stylesheet.
	 */
	public function sitemap_xsl( $title ) {
		require_once 'sitemap-xsl.php';
	}

	/**
	 * Build the `<url>` tag for a given URL.
	 *
	 * @param  array    $url      Array of parts that make up this entry.
	 * @param  Renderer $renderer Sitemap renderer class object.
	 * @return string
	 */
	public function sitemap_url( $url, $renderer ) {
		$date = null;
		if ( ! empty( $url['publication_date'] ) ) {
			// Create a DateTime object date in the correct timezone.
			$date = $renderer->timezone->format_date( $url['publication_date'] );
		}

		$output  = $renderer->newline( '<url>', 1 );
		$output .= $renderer->newline( '<loc>' . $renderer->encode_url_rfc3986( htmlspecialchars( $url['loc'] ) ) . '</loc>', 2 );

		$output .= $renderer->newline( '<video:video>', 2 );

		$output .= $renderer->add_cdata( $url['title'], 'video:title', 3 );
		$output .= empty( $date ) ? '' : $renderer->newline( '<video:publication_date>' . htmlspecialchars( $date ) . '</video:publication_date>', 3 );
		$output .= $renderer->add_cdata( $url['description'], 'video:description', 3 );

		if ( ! empty( $url['player_loc'] ) ) {
			$output .= $renderer->newline( '<video:player_loc allow_embed="yes">' . esc_url( $url['player_loc'] ) . '</video:player_loc>', 3 );
		}

		foreach ( [ 'thumbnail_loc', 'content_loc' ] as $prop ) {
			if ( empty( $url[ $prop ] ) ) {
				continue;
			}

			$output .= $renderer->newline( "<video:{$prop}>" . esc_url( $url[ $prop ] ) . "</video:{$prop}>", 3 );
		}

		if ( ! empty( $url['category'] ) ) {
			$output .= $renderer->add_cdata( $url['category'], 'video:category', 3 );
		}

		if ( ! empty( $url['tags'] ) ) {
			$tags = explode( ', ', $url['tags'] );
			foreach ( $tags as $tag ) {
				$output .= $renderer->add_cdata( $tag, 'video:tag', 3 );
			}
		}

		if ( ! empty( $url['rating'] ) ) {
			$output .= $renderer->newline( '<video:rating>' . absint( $url['rating'] ) . '</video:rating>', 3 );
		}

		if ( ! empty( $url['duration'] ) ) {
			$output .= $renderer->newline( '<video:duration>' . esc_html( $url['duration'] ) . '</video:duration>', 3 );
		}

		$output .= $renderer->newline( '<video:family_friendly>' . $url['family_friendly'] . '</video:family_friendly>', 3 );
		$output .= $renderer->newline( '<video:uploader info="' . get_author_posts_url( $url['author'] ) . '">' . ent2ncr( esc_html( get_the_author_meta( 'display_name', $url['author'] ) ) ) . '</video:uploader>', 3 );
		$output .= $renderer->newline( '</video:video>', 2 );
		$output .= $renderer->newline( '</url>', 1 );

		/**
		 * Filters the output for the sitemap url tag.
		 *
		 * @param string $output The output for the sitemap url tag.
		 * @param array  $url    The sitemap url array on which the output is based.
		 */
		return $this->do_filter( 'sitemap_url', $output, $url );
	}

	/**
	 * Whether to add Video Sitemap.
	 *
	 * @return booleans
	 */
	private function can_add_sitemap() {
		if ( ! Helper::get_settings( 'sitemap.hide_video_sitemap' ) || current_user_can( 'manage_options' ) ) {
			return true;
		}

		return isset( $_SERVER['HTTP_USER_AGENT'] ) && preg_match( '/bot|crawl|slurp|spider|mediapartners/i', $_SERVER['HTTP_USER_AGENT'] );
	}
}
