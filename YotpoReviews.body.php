<?php

class YotpoReviews {

	public static function setParserHook( $parser ) {
		$parser->setHook( 'yotpo-reviews', 'YotpoReviews::renderReviews' );
		return true;
	}

	public static function addYotpoScript( &$data ) {
		global $wgYotpoAppKey;
		$data .= '<script src="//www.yotpo.com/js/yQuery.js"></script>';
		$data .= '<script>var yotpo_app_key = "' . $wgYotpoAppKey . '";</script>';
		return true;
	}

	public static function renderReviews( $input, array $args, Parser $parser, PPFrame $frame ) {
		global $wgLogo, $wgServer, $wgYotpoAppKey;

		$width = '100%'; //Default
		if ( array_key_exists( 'width', $args ) ) {
			$width = $args['width'] . 'px';
		}

		$height = '100%'; //Default
		if ( array_key_exists( 'height', $args ) ) {
			$height = $args['height'] . 'px';
		}

		$align = 'center'; //Default
		if ( array_key_exists( 'align', $args ) ) {
			$align = $args['align'];
		}
		if ( $align == 'left' ) {
			$margin = '0 auto 0 0';
		}
		if ( $align == 'right' ) {
			$margin = '0 0 0 auto';
		}
		if ( $align == 'center' ) {
			$margin = '0 auto 0 auto';
		}

		$title = $parser->getTitle();

		$data_app_key = $wgYotpoAppKey;
		$data_domain = $wgServer;
		$data_product_id = $title->getDBKey();
		$data_product_models = '';
		$data_name = $title->getText();
		$data_url = $title->getFullURL();
		$data_image_url = '';
		$data_description = '';
		$data_bread_crumbs = '';

		return '<div class="yotpo reviews" style="margin:' . $margin . '; width:' . $width . '; height:' . $height . ';" data-appkey="' .$data_app_key . '" data-domain="' . $data_domain . '" data-product-id="' . $data_product_id . '" data-product-models="' . $data_product_models . '" data-name="' . $data_name . '" data-url="' . $data_url . '" data-image-url="' . $data_image_url . '" data-description="' . $data_description . '" data-bread-crumbs="' . $data_bread_crumbs . '"></div>';
	}
}