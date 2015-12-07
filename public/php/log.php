<?php
class Log 
{
	private $filename;
	private $prefix;

	private function setfilename()
	{
		if (is_string($this->filename)) {
			$this->filename = trim($filename)
		}
	}
	private function _construct($prefix = "log") 
	{
		$handle = fopen($this->filename, 'a');
		$content = trim(fwrite($handle, date('Y-m-d h:i:s A T') . " " . $loglevel . " " . $message . PHP_EOL));
		return $content . PHP_EOL;
	}
	public static function logmessage($loglevel, $message) 
	{
		date_default_timezone_set('America/Chicago');
		return $loglevel . ": " . $message;
		
	}
	public function loginfo() 
	{
		$this->logmessage("[INFO]", "This is an info message!");
	}
	public function logerror() 
	{
		$this->logmessage("[ERROR]", "This is an error message!");
	}
	public function _destruct() 
	{
		fclose($this->handle);
	}
}
?>