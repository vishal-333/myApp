<?php

require_once 'config.php'; 
// error_reporting(E_ALL);
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// ini_set('display_errors', 1);
/**
 * 
 */
class Database
{
	
	public $host = DB_HOST;
	public $user = DB_USER;
	public $pass = DB_PASS;
	public $dbname = DB_NAME;
	public $link;
	public $error;
	
	public function __construct()
	{
		
		$this->getConnection();
		
	}
	
	protected function getConnection()
	{
		try {
				$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
				if (mysqli_connect_errno()) {
				    $this->error = "Connection failed. " . $this->link->connect_error;
				    throw new Exception('Database connection error. '.$this->error);
				}
		}

		catch (Exception $e) {
		 	echo $e->getMessage();
		}
	}
	
	public function select($query)
	{
		try {
			if(!$result = $this->link->query($query)){
				throw new Exception("Error Processing SELECT Request".$this->link->error.__LINE__, 1);
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		// $count = $result->num_rows;
		// echo $count;
		if($result->num_rows > 0) {
			return $result;
		}else{
			return false;
		}
	}

}

 ?>
