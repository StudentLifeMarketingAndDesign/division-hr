<?php

global $project;
$project = 'mysite';

global $database;
//!!!!!!!Define your database name:
$database = 'division-hr';
 
// Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");

MySQLDatabase::set_connection_charset('utf8');

// Set the site locale
i18n::set_locale('en_US');
FulltextSearchable::enable();
// Enable nested URLs for this site (e.g. page/sub-page/)
if (class_exists('SiteTree')) SiteTree::enable_nested_urls();

if(Director::isLive()) {
	Director::forceSSL();
}
