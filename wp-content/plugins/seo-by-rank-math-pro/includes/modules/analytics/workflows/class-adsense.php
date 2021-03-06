<?php
/**
 * Google Adsense.
 *
 * @since      1.0.49
 * @package    RankMathPro
 * @subpackage RankMathPro\Adsense
 * @author     Rank Math <support@rankmath.com>
 */

namespace RankMathPro\Analytics\Workflow;

use Exception;
use MyThemeShop\Helpers\DB;
use RankMath\Analytics\Workflow\Base;
use function as_unschedule_all_actions;

defined( 'ABSPATH' ) || exit;

/**
 * Adsense class.
 */
class Adsense extends Base {

	/**
	 * Constructor.
	 */
	public function __construct() {
		// Early Bail!!
		if ( ! \RankMathPro\Google\Adsense::is_adsense_connected() ) {
			return;
		}

		$this->action( 'rank_math/analytics/workflow/adsense', 'kill_jobs', 5, 0 );
		$this->action( 'rank_math/analytics/workflow/create_tables', 'create_tables' );
		$this->action( 'rank_math/analytics/workflow/adsense', 'create_tables', 6, 0 );
		$this->action( 'rank_math/analytics/workflow/adsense', 'create_data_jobs', 10, 3 );
	}

	/**
	 * Kill jobs.
	 *
	 * Stop processing queue items, clear cronjob and delete all batches.
	 */
	public function kill_jobs() {
		as_unschedule_all_actions( 'rank_math/analytics/get_adsense_data' );
	}

	/**
	 * Create tables.
	 */
	public function create_tables() {
		global $wpdb;

		$collate = $wpdb->get_charset_collate();
		$table   = 'rank_math_analytics_adsense';

		// Early Bail!!
		if ( DB::check_table_exists( $table ) ) {
			return;
		}

		$schema = "CREATE TABLE {$wpdb->prefix}{$table} (
				id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
				created TIMESTAMP NOT NULL,
				earnings DOUBLE NOT NULL DEFAULT 0,
				PRIMARY KEY (id)
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
			$this->create_jobs( $days, 'adsense' );
			return;
		}

		// If saved and new profile are same.
		if ( $prev['adsense_id'] === $new['adsense_id'] ) {
			return;
		}

		$this->create_jobs( $days, 'adsense' );
	}
}
