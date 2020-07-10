<?php
defined( 'ABSPATH' ) || exit;

/**
 * Plugin installation and activation for WordPress themes
 */
if ( ! class_exists( 'Maxcoach_Register_Plugins' ) ) {
	class Maxcoach_Register_Plugins {

		protected static $instance = null;

		public static function instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		function initialize() {
			add_filter( 'insight_core_tgm_plugins', array( $this, 'register_required_plugins' ) );
		}

		public function register_required_plugins( $plugins ) {
			/*
			 * Array of plugin arrays. Required keys are name and slug.
			 * If the source is NOT from the .org repo, then source is also required.
			 */
			$new_plugins = array(
				array(
					'name'     => esc_html__( 'Insight Core', 'maxcoach' ),
					'slug'     => 'insight-core',
					'source'   => 'https://www.dropbox.com/s/tw626ypffwphtwa/insight-core-1.6.9.zip?dl=1',
					'version'  => '1.6.9',
					'required' => true,
				),
				array(
					'name'     => esc_html__( 'Elementor', 'maxcoach' ),
					'slug'     => 'elementor',
					'required' => true,
				),
				array(
					'name'     => esc_html__( 'Elementor Pro', 'maxcoach' ),
					'slug'     => 'elementor-pro',
					'source'   => 'https://www.dropbox.com/s/cpoyhnjs863ywj6/elementor-pro-2.8.5.zip?dl=1',
					'version'  => '2.8.5',
					'required' => true,
				),
				array(
					'name'    => esc_html__( 'Revolution Slider', 'maxcoach' ),
					'slug'    => 'revslider',
					'source'  => get_template_directory_uri() . '/plugins/revslider-6.2.12.zip',
					'version' => '6.2.12',
				),
				array(
					'name' => esc_html__( 'LearnPress – WordPress LMS Plugin', 'maxcoach' ),
					'slug' => 'learnpress',
				),
				array(
					'name' => esc_html__( 'LearnPress – Course Review', 'maxcoach' ),
					'slug' => 'learnpress-course-review',
				),
				array(
					'name'    => esc_html__( 'ThemeMove Payment Add-ons for LearnPress', 'maxcoach' ),
					'slug'    => 'thememove-payment',
					'source'  => 'https://www.dropbox.com/s/3lomuvla3h97xe3/thememove-payment-1.0.1.zip?dl=1',
					'version' => '1.0.1',
				),
				array(
					'name' => esc_html__( 'Paid Memberships Pro', 'maxcoach' ),
					'slug' => 'paid-memberships-pro',
				),
				array(
					'name'    => esc_html__( 'LearnPress - Paid Membership Pro Integration', 'maxcoach' ),
					'slug'    => 'learnpress-paid-membership-pro',
					'source'  => 'https://www.dropbox.com/s/ph6ddz1e0stsg54/learnpress-paid-membership-pro-3.1.9.zip?dl=1',
					'version' => '3.1.9',
				),
				array(
					'name' => esc_html__( 'WP Events Manager', 'maxcoach' ),
					'slug' => 'wp-events-manager',
				),
				array(
					'name' => esc_html__( 'Video Conferencing with Zoom', 'maxcoach' ),
					'slug' => 'video-conferencing-with-zoom-api',
				),
				array(
					'name'     => esc_html__( 'Taxonomy Thumbnail', 'maxcoach' ),
					'slug'     => 'sf-taxonomy-thumbnail',
					'required' => true,
				),
				array(
					'name' => esc_html__( 'Contact Form 7', 'maxcoach' ),
					'slug' => 'contact-form-7',
				),
				array(
					'name' => esc_html__( 'MailChimp for WordPress', 'maxcoach' ),
					'slug' => 'mailchimp-for-wp',
				),
				array(
					'name' => esc_html__( 'WooCommerce', 'maxcoach' ),
					'slug' => 'woocommerce',
				),
				array(
					'name' => esc_html__( 'WPC Smart Compare for WooCommerce', 'maxcoach' ),
					'slug' => 'woo-smart-compare',
				),
				array(
					'name' => esc_html__( 'WPC Smart Wishlist for WooCommerce', 'maxcoach' ),
					'slug' => 'woo-smart-wishlist',
				),
				array(
					'name' => esc_html__( 'WP-PostViews', 'maxcoach' ),
					'slug' => 'wp-postviews',
				),
			);

			$plugins = array_merge( $plugins, $new_plugins );

			return $plugins;
		}

	}

	Maxcoach_Register_Plugins::instance()->initialize();
}
