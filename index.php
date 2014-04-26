<?php
/**
 * author: Soli <soli@cbug.org>
 * date  : 2013-04-26
 * */
use QBoke;

/** Define ABSPATH as this file's directory */
define( 'ABSPATH', dirname(__FILE__) );

require 'vendor/autoload.php';

$site = new QBoke\QBSite();
$site->init();
$site->index();
