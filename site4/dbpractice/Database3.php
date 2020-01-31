<?php
/**
 * 
 */
class Database3{
	
	public $dbhost="localhost";
	public $dbuser="root";
	public $dbpass="ilv";
	public $db_name="site4db";
	public $link;
	public $error;

	public function __construct()
	{
		$this->connect();
	}
	private function connect()
	{
		$this->link = new mysqli($dbhost,$dbuser,$dbpass,$db_name) or die ('Error connecting to mysql: ' . mysqli_error($link).'\r\n');
	}
	public function select1($query)
	{
		$result = $this->link->query($query).or die("error on line no:".$this->link->error.__LINE__);
		if($result->num_rows>0){
			echo "vishal";
			return $result;
		}else{
			return false;
		}

	}

}
?>