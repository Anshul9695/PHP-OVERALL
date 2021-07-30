<?php

require_once  __DIR__.'/Database.php';

Class Query_builder extends Database{

private $db;
private $sql;

public function __construct(){
	//Add the parent constructer

	parent::__construct();
	$this->db = $this->con;
}



public function insert($tablename,$form_data){

	$columns_keys = implode(',',array_keys($form_data));
	$values = implode("','", array_values($form_data));
	#print_r($values);

$sql = "INSERT INTO {$tablename}({$columns_keys}) values('{$values}')";
$this->sql=$sql;

}

public function last_query(){
	return $this->sql;
}

public function run(){
	if(!is_null($this->sql))
	{

		if(mysqli_query($this->db,$this->sql))
		{
		 $affected=mysqli_affected_rows($this->db);
       #echo $affected;
       if($affected>0)
       {
       	return true;
       }
       else{
       	return false;
       }
		}
		else{

			die("Insert Error");
					}
	}
	else{
		die("query is null");

	}
}

public function getColumns($tablename)
{
	$sql="DESC {$tablename}";
	$this->sql=$sql;
	$result_set=mysqli_query($this->db,$this->sql) or die('query fire error'.mysqli_error($this->db));
	$count=mysqli_num_rows($result_set);
	if($count>0)
	{
        while($row=mysqli_fetch_assoc($result_set)){
        	$field[]=$row[ucfirst('field')];
            //ucfirst is used to convert first letter capital 
        }
        return $field;
	}
	else{
		return [];
	}
}
//last inserted id
public function last_id($tablename){

  $id_column=$this->getColumns($tablename)[0];
 $sql="select {$id_column} from {$tablename} ";

 $sql.= "ORDER BY {$id_column} DESC LIMIT 1";

 $this->sql=$sql;
 return  current(array_values($this->fetch_records()->first_row()));
 
}

//function for firing select query

public function fetch_records($sql=NULL){
	if(!is_null($sql))
	{
		$this->sql=$sql;
	}

	$result_set=mysqli_query($this->db,$this->sql) or die('query error'.mysqli_error($this->db));

	$count=mysqli_num_rows($result_set);
	if($count>0)
	{
while($row=mysqli_fetch_assoc($result_set)){
	$data[]=$row;
}
$this->data= $data;
return $this;


	}
	else{
        $this->data=[];
        return $this;
	}
}

public function first_row(){

	return current($this->data);

}

public function last_row(){

	return end($this->data);

}


public function next_row(){

	return next($this->data);

}


//To get all the rows
public function all(){
return $this->data;
}

}



