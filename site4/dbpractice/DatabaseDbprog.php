<?php 
/**
 * 
//  */
class DatabaseDbprog
{
	protected $dbhost="localhost";
	protected $dbuser="root";
	protected $dbpass="ilv";
	protected $db_name="site4db";
	public $link;
	
	public function __construct()
	{
		$this->link = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->db_name);

		if( mysqli_connect_errno() ) {
					printf("Connection failed: %s\ ", mysqli_connect_error());
					exit();
		}
		return true;
	}
	
}
 ?>

 
 <?php
 //$db = new DatabaseDbprog;
 //echo $db->db_name;
 //echo get_class($db);	
 ?>