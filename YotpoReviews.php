<?php

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'YotpoReviews',
	'namemsg'        => 'yotporeviews-extensionname',
	'descriptionmsg' => 'yotporeviews-desc',
	'version'        => '0.3',
	'author'         => '[https://www.mediawiki.org/wiki/User:Luis_Felipe_Schenone Luis Felipe Schenone]',
	'url'            => 'http://www.mediawiki.org/wiki/Extension:YotpoReviews',
	'license-name'   => 'GPL-2.0+',
);

$wgMessagesDirs['YotpoReviews'] = __DIR__ . '/i18n';
$wgAutoloadClasses['YotpoReviews'] = __DIR__ . '/YotpoReviews.body.php';

$wgHooks['ParserFirstCallInit'][] = 'YotpoReviews::onParserFirstCallInit';
$wgHooks['SkinAfterContent'][] = 'YotpoReviews::onSkinAfterContent';