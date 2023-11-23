<?php
if ('cli' != php_sapi_name()) die('This script must run via the command line interface.');
$dw = @rtrim($argv[1], '/');
if (!$dw) die("Usage: php dokuwiki.php <dokuwiki directory>\n");
require_once("$dw/inc/init.php");

$output = array(
	'conf' => $conf,
	'config_cascade' => $config_cascade,
	'lang' => $lang,
);

echo json_encode($output);
