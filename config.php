<?php
/**
 * change this for your site.
 * */

$config_json = <<<EOF
{
	"key": "your_secret_key_for_sync",
	"debug": "off",
	"repo": {
		"type"  : "Git",
		"remote": "https://bitbucket.org/soli/qboke.org.git",
		"branch": "",
		"pkey"  : ""
	}
}
EOF;

return json_decode($config_json, true);
