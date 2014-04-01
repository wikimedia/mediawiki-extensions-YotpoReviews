<?php

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'YotpoReviews',
	'descriptionmsg' => 'yotporeviews-desc',
	'version'        => '0.2.0',
	'author'         => 'Luis Felipe Schenone',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:YotpoReviews'
);

$wgMessagesDirs['YotpoReviews'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['YotpoReviews'] = __DIR__ . '/YotpoReviews.i18n.php';
$wgAutoloadClasses['YotpoReviews'] = __DIR__ . '/YotpoReviews.body.php';

$wgHooks['ParserFirstCallInit'][] = 'YotpoReviews::setParserHook';
$wgHooks['SkinAfterContent'][] = 'YotpoReviews::addYotpoScript';
