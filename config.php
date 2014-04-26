<?php
/**
 * change this for your site.
 * */

$config_json = <<<EOF
{
	"key": "your_secret_key_for_sync",
	"debug": "on",
	"repo": {
		"type"  : "git",
		"remote": "https://bitbucket.org/soli/cbug.org.git",
		"branch": "",
		"pkey"  : "./id_rsa.pub"
	}
}
EOF;

return json_decode($config_json, true);
