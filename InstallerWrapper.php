<?php
/**
 * author: Soli <soli@cbug.org>
 * date  : 2014-04-26
 * */
namespace QBoke;

use Composer\Script\Event;

/** Define ABSPATH as this file's directory */
define( 'ABSPATH', dirname(__FILE__) );

require 'vendor/autoload.php';

class InstallerWrapper
{
	public static function run(Event $event)
	{
		$intaller = new Common\Installer();
		$intaller->run($event);
	}
}
