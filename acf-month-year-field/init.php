<?php
/** 
 * Plugin Name: ACF month year field
 * Description: Extends ACF field types with a new month/year picker
 * Plugin URI: https://seenland-solutions.de
 * Version: 0.0.1
 * Author: Christoph Lahner 
 * Author URI: https://seenland-solutions.de
 * Text Domain: acf-month-year-field
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'month_year_include_acf_field_month_year_field' );
/**
 * Registers the ACF field type.
 */
function month_year_include_acf_field_month_year_field() {
	if ( ! function_exists( 'acf_register_field_type' ) ) {
		return;
	}

	require_once __DIR__ . '/class-month-year-acf-field-month-year-field.php';

	acf_register_field_type( 'month_year_acf_field_month_year_field' );
}
