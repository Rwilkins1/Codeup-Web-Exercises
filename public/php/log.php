<?php
class Log 
{
	public $filename;
	public function logmessage($loglevel, $message) {
		date_default_timezone_set('America/Chicago');
		$handle = fopen($this->filename, 'a');
		$content = trim(fwrite($handle, date('Y-m-d h:i:s A T') . " " . $loglevel . " " . $message . PHP_EOL));
		
		fclose($handle);
		return $content . PHP_EOL;
	}
	public function loginfo() {
		$this->logmessage("[INFO]", "This is an info message!");
	}
	public function logerror() {
		$this->logmessage("[ERROR]", "This is an error message!");
	}
}
?>