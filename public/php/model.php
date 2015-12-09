<?php
class Model
{
	public $attributes = array();
	public static $dbc;
	protected static $table;

	public function __construct()
	{
		self::dbConnect();
	}

	public static function dbConnect()
	{
		if (!self::$dbc)
		{
			require_once '../../user_table_login.php';
			require_once '../../db_connect.php';
			self::$dbc = $dbc;
		} 

	}

	public function __get($key)
	{
		if (array_key_exists($key, $this->attributes)) {
			return $this->attributes[$key];
		}

		return null;
	}

	public function __set($key, $value)
	{
		$this->attributes[$key] = $value;
	}

	public function save()
	{
		if (!empty($this->attributes)) 
		{
			self::dbConnect();

			if(isset($this->attributes['id'])) {
				$this->update($this->attributes['id']);
			} else {
				$this->insert();
			}
			
			
		}
	}

	protected function insert() 
	{
		$execution = self::$dbc->prepare('INSERT INTO contacts (email, name, phone, address, city, state, zip) VALUES (:email, :name, :phone, :address, :city, :state, :zip)');
			
		$execution->bindValue(':email', $this->email, PDO::PARAM_STR);
		$execution->bindValue(':name', $this->name, PDO::PARAM_STR);
		$execution->bindValue(':phone', $this->phone, PDO::PARAM_STR);
		$execution->bindValue(':address', $this->address, PDO::PARAM_STR);
		$execution->bindValue(':city', $this->city, PDO::PARAM_STR);
		$execution->bindValue(':state', $this->state, PDO::PARAM_STR);
		$execution->bindValue(':zip', $this->zip, PDO::PARAM_STR);
		$execution->execute();
	}

	protected function update($id)
	{	
		$updatedinfoarray = [];
        foreach ($this->attributes as $key => $value) {
            $update = $key . ' = :' . $key;
            array_push($updatedinfoarray, $update);
        }
        $updatedinfo = implode(', ', $updatedinfoarray);
        self::dbConnect();
        $stmt = self::$dbc->prepare('UPDATE contacts SET '. $updatedinfo .' WHERE id = '. $id);
        
        foreach ($this->attributes as $key => $value) {
            $stmt->bindValue(':'.$key, $this->attributes[$key], PDO::PARAM_STR);
        }
        $stmt->execute();
	}

	public static function delete($id)
	{
		self::dbConnect();
		$stmt = self::$dbc->prepare('DELETE FROM contacts WHERE id = ' . $id);
		$stmt->execute();
	}
	public static function find($id)
	{
		self::dbConnect();
		$stmt = self::$dbc->prepare('SELECT * FROM contacts WHERE id = ' . $id);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		$instance = null;
		if ($result)
		{
			$instance = new static;
			$instance->attributes = $result;
		}
		return $instance;
	}
	
	public static function all()
	{
		self::dbConnect();
		$stmt = self::$dbc->prepare('SELECT * FROM contacts');
		$stmt->execute();
		$allresults = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $allresults;
	}
}


?>