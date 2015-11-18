<?php
require_once 'log.php';
$firstlog = new Log("log");
$firstlog->filename = $firstlog->prefix . "-" . date('Y-m-d') . ".log";
$firstlog->logmessage('hello', 'world');
$firstlog->loginfo();
$firstlog->logerror();
?>