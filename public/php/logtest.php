<?php
require_once 'log.php';
$firstlog = new Log();
$firstlog->filename = "log-" . date('Y-m-d') . ".log";
$firstlog->logmessage('hello', 'world');
$firstlog->loginfo();
$firstlog->logerror();
?>