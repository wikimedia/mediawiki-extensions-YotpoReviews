<?php

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'YotpoReviews',
	'descriptionmsg' => 'yotporeviews-desc',
	'version'        => 0.1,
	'author'         => 'Luis Felipe Schenone',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:YotpoReviews'
);

$wgExtensionMessagesFiles['YotpoReviews'] = __DIR__ . '/YotpoReviews.i18n.php';
$wgAutoloadClasses['YotpoReviews'] = __DIR__ . '/YotpoReviews.body.php';

$wgHooks['ParserFirstCallInit'][] = 'YotpoReviews::setParserHook';
$wgHooks['SkinAfterContent'][] = 'YotpoReviews::addYotpoScript';