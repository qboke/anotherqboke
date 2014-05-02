<?php
/**
 * author: Soli <soli@cbug.org>
 * date  : 2014-04-26
 * */
namespace QBoke\Common\Sync;

// Ignore user aborts and allow the script
// to run forever
ignore_user_abort(true);
set_time_limit(0);

/** Define ABSPATH as this file's directory */
define( 'ABSPATH', dirname(__FILE__) );

require 'vendor/autoload.php';

sync();
