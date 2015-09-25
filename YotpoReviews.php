<?php

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'YotpoReviews',
	'namemsg'        => 'yotporeviews-extensionname',
	'description'    => 'Adds the <code>&lt;yotporeviews&gt;</code> tag that inserts the Yotpo reviews system',
	'descriptionmsg' => 'yotporeviews-desc',
	'version'        => '0.3',
	'author'         => '[https://www.mediawiki.org/wiki/User:Luis_Felipe_Schenone Luis Felipe Schenone]',
	'url'            => 'http://www.mediawiki.org/wiki/Extension:YotpoReviews',
	'license-name'   => 'GPL-2.0+',
);

$wgExtensionMessagesFiles['YotpoReviews'] = __DIR__ . '/YotpoReviews.i18n.php';
$wgAutoloadClasses['YotpoReviews'] = __DIR__ . '/YotpoReviews.body.php';

$wgHooks['ParserFirstCallInit'][] = 'YotpoReviews::onParserFirstCallInit';
$wgHooks['SkinAfterContent'][] = 'YotpoReviews::onSkinAfterContent';