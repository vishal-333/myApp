<?php
// error_reporting(E_ALL);
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
// ini_set('display_errors', 1); 
// /**
 * 
 */
require_once "config.php";
class Database{
	
	public $host = DB_HOST;
	public $user = DB_USER;
	public $pass = DB_PASS;
	public $dbname = DB_NAME;
	public $link;
	public $error;

	public function __construct()
	{
		$this->getConnect();
	}

	private function getConnect()
	{
		try {
				$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
				if (mysqli_connect_errno()) {
					$this->error = "Connection failed. ".$this->link->connect_error;
					throw new Exception("Error in database connection. ".$this->error, 1);
					
				}
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
	}

	//SELECT
	public function select($query)
	{
		try {
				if(!$result = $this->link->query($query)){
					throw new Exception("Error Processing SELECT Request.".$this->link->error.__LINE__, 1);
				}	
				
			} catch (Exception $e) {
				
				echo $e->getMessage();
			}	
		// $result = $this->link->query($query)or die($this->link->error.__LINE__);
			if ($result->num_rows > 0) {
				return $result;
			}
			else{
				return false;
			}
		
	}

	//INSERT
	public function insert($query)
	{
		$insert_row = $this->link->query($query)or die($this->link->error.__LINE__);
		if ($insert_row) {
			// header("location:index.php?msg=".urlencode('Record Added'));  
			return $insert_row;
			
		
		}
		else{
			die('Error:('.$this->link->errorno.')'.$this->link->error);
		}
	}

	// //UPDATE
	// public function update($query)
	// {
	// 	$update_row = $this->link->query($query)or die($this->link->error.__LINE__);
	// 	if ($update_row) {
	// 		header("location:index.php?msg="urlencode('Record Updated'));
	// 		exit();
	// 	}
	// 	else{
	// 		die('Error:('.$this->link->errorno.')'.$this->link->error)
	// 	}
	// }

	// //DELETE
	// public function delete($query)
	// {
	// 	$delete_row = $this->link->query($query)or die($this->link->error.__LINE__);
	// 	if ($delete_row) {
	// 		header("location:index.php?msg="urlencode('Record Deleteded'));
	// 	}
	// 	else{
	// 		die('Error:('.$this->link->errorno.')'.$this->link->error)
	// 	}
	// }
}