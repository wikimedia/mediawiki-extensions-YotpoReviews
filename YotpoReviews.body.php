<?php

class YotpoReviews {

	public static function setParserHook( $parser ) {
		$parser->setHook( 'yotpo-reviews', 'YotpoReviews::renderReviews' );
		return true;
	}

	public static function addYotpoScript( &$data ) {
		global $wgYotpoAppKey;
		$data .= '<script type="text/javascript">(function e(){var e=document.createElement("script");e.type="text/javascript",e.async=true,e.src="//staticw2.yotpo.com/' . $wgYotpoAppKey . '/widget.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();</script>';
		return true;
	}

	public static function renderReviews( $input, array $args, Parser $parser, PPFrame $frame ) {
		global $wgTitle, $wgLogo, $wgServer, $wgYotpoAppKey;

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

		$float = 'none'; //Default
		if ( array_key_exists( 'float', $args ) ) {
			$float = $args['float'];
		}

		$data_product_id = $wgTitle->getDBKey();
		$data_name = $wgTitle->getText();
		$data_url = $wgTitle->getFullURL();
		$data_image_url = '';
		$data_description = '';

		return '<div style="float:' . $float . '; margin:' . $margin . '; width:' . $width . '; height:' . $height . ';" class="yotpo yotpo-main-widget" data-product-id="' . $data_product_id . '" data-name="' . $data_name . '" data-url="' . $data_url . '" data-image-url="' . $data_image_url . '" data-description="' . $data_description . '"></div>';
	}
}