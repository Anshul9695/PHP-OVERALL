<?php

class Database{

	private $host='localhost';
	private $user = 'root';
	private $pass = '';

	private $dbname ='spa_crud';

	#Child Class will Access
	protected $con;

	public function __construct(){

		$con = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);

		if(!$con){
			die("Connection Error ".mysqli_connect_error($con));
		}else{
			#echo 'Connected Created';
			$this->con = $con;
		}
	}
}
