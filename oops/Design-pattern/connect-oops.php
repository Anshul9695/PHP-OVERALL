<?php
#multiple database connection class
class Database{
	private $host;
	private $user;
	private $pass;
	private $dbname;
	public $con;
	
	public function __construct($host,$user,$pass,$dbname)
	{
		$this->host=$host;
		$this->user=$user;
		$this->pass=$pass;
		$this->dbname=$dbname;
		$this->connect();
		
	}
	
	private function connect()
	{
	 $con =mysqli_connect($this->host,$this->user,$this->pass,$this->dbname) or 
    print("connection Error".mysqli_connect_error($con)."</br>");
   $this->con=$con;	
	}
	
	public function getConnectionObject()
	{
		return $this->con;
	}
}

class Son{
	public static function database()
	{
		return strtolower( __CLASS__);
	}
}
class Father
{
	public static function database()
	{
		return strtolower(__CLASS__);
	}
}

$db1=new Database('localhost','father','1234',father::database());
$result_set=mysqli_query($db1->getConnectionObject(),"select *from tbl_user");
$count=mysqli_num_rows($result_set);

if($row=mysqli_fetch_assoc($result_set))
{
	echo $row['email'];
}

echo '<hr/>';

$db2=new Database('localhost','son','12345',son::database());
$result_set=mysqli_query($db2->getConnectionObject(),"select *from tbl_user");
$count=mysqli_num_rows($result_set);

if($row=mysqli_fetch_assoc($result_set))
{
	echo $row['email'];
}

//https://phpgurukul.com/how-to-insert-data-in-databse-using-php-oopc-concept/
?>