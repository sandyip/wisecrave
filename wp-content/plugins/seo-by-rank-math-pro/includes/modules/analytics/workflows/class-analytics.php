<?php
/**
 * Google Analytics.
 *
 * @since      1.0.49
 * @package    RankMathPro
 * @subpackage RankMathPro\Analytics
 * @author     Rank Math <support@rankmath.com>
 */

namespace RankMathPro\Analytics\Workflow;

use Exception;
use MyThemeShop\Helpers\DB;
use RankMath\Analytics\Workflow\Base;
use function as_unschedule_all_actions;

defined( 'ABSPATH' ) || exit;

/**
 * Analytics class.
 */
class Analytics extends Base {

	/**
	 * Constructor.
	 */
	public function __construct() {
		// Early Bail!!
		if ( ! \RankMath\Google\Analytics::is_analytics_connected() ) {
			return;
		}

		$this->action( 'rank_math/analytics/workflow/analytics', 'kill_jobs', 5, 0 );
		$this->action( 'rank_math/analytics/workflow/create_tables', 'create_tables' );
		$this->action( 'rank_math/analytics/workflow/analytics', 'create_tables', 6, 0 );
		$this->action( 'rank_math/analytics/workflow/analytics', 'create_data_jobs', 10, 3 );
	}

	/**
	 * Kill jobs.
	 *
	 * Stop processing queue items, clear cronjob and delete all batches.
	 */
	public function kill_jobs() {
		as_unschedule_all_actions( 'rank_math/analytics/get_analytics_data' );
	}

	/**
	 * Create tables.
	 */
	public function create_tables() {
		global $wpdb;

		$collate = $wpdb->get_charset_collate();
		$table   = 'rank_math_analytics_ga';

		// Early Bail!!
		if ( DB::check_table_exists( $table ) ) {
			return;
		}

		$schema = "CREATE TABLE {$wpdb->prefix}{$table} (
				id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
				page VARCHAR(500) NOT NULL,
				created TIMESTAMP NOT NULL,
				pageviews MEDIUMINT(6) NOT NULL,
				visitors MEDIUMINT(6) NOT NULL,
				PRIMARY KEY (id),
				INDEX analytics_object_analytics (page(190))
			) $collate;";

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		try {
			dbDelta( $schema );
		} catch ( Exception $e ) { // phpcs:ignore
			// Will log.
		}
	}

	/**
	 * Create jobs to fetch data.
	 *
	 * @param integer $days Number of days to fetch from past.
	 * @param string  $prev Previous saved value.
	 * @param string  $new  New posted value.
	 */
	public function create_data_jobs( $days, $prev, $new ) {
		// Fetch now!
		if ( is_null( $prev ) && is_null( $new ) ) {
			$this->create_jobs( $days, 'analytics' );
			return;
		}

		// If saved and new profile are same.
		if ( $prev['view_id'] === $new['view_id'] ) {
			return;
		}

		$this->create_jobs( $days, 'analytics' );
	}
}
