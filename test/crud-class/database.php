<?php
class Database
{
	private $host;
	private $dbusername;
	private $dbpassword;
	private $dbname;

	protected function connect()
	{
		$this->host='localhost';
		$this->dbusername='root';
		$this->dbpassword='';
		$this->dbname='crud_db';

		$con=new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
		return $con;
	}
}

class query extends Database
{
	public function getData($table='',$feild='*',$condition_arr='',$order_by_feild='',$order_by_type='asc',$limit='')
	{
		$sql="select $feild from $table ";

       if($condition_arr !='')
       {
         $sql .=' where ';
         $c = count($condition_arr);
         $i=1;
         foreach ($condition_arr as $key=>$val) {
         	# code...
         	if($i==$c)
         	{
         		$sql .= " $key= '$val' ";
         	}

         	else
         	{
         			$sql .= " $key = '$val' and ";
         	}
         	$i++;
         }
       }



		if($order_by_feild!='')
		{
			$sql.=" order by $order_by_feild $order_by_type";
		}
		if($limit!='')
		{
			$sql.="  limit $limit";
		}
//die($sql);

		$result=$this->connect()->query($sql);
		if($result->num_rows>0)
		{    $arr=array();
			while($row=$result->fetch_assoc())
			{
              
				//print_r($row);
                 $arr[]=$row;
			}  return $arr;
		}else{
			return 0;
		}
	}

public function insertData($table,$condition_arr)
{
	if($condition_arr!='')
	{
		foreach ($condition_arr as $key => $val) {
			# code...
			$feildArr[]=$key;
			$valueArr[]=$val;
                             
                 }
            $feild=implode(",", $feildArr);
            $value=implode("','", $valueArr);
            $value="'".$value."'";
			$sql="insert into $table($feild) values($value) ";

		$result=$this->connect()->query($sql);
	}

}

public function deleteData($table,$condition_arr)
	{
	

       if($condition_arr !='')
       {
       		$sql="delete  from $table where ";
         
         $c = count($condition_arr);
         $i=1;
         foreach ($condition_arr as $key=>$val) {
         	# code...
         	if($i==$c)
         	{
         		$sql .= " $key= '$val' ";
         	}

         	else
         	{
         			$sql .= " $key = '$val' and ";
         	}
         	$i++;
         }
         

         $result=$this->connect()->query($sql);

       }
   }



public function updateData($table,$condition_arr,$where_feild,$where_value)
	{
	

       if($condition_arr !='')
       {
       		$sql="update  $table set ";
         
         $c = count($condition_arr);
         $i=1;
         foreach ($condition_arr as $key=>$val) {
         	# code...
         	if($i==$c)
         	{
         		$sql .= " $key= '$val' ";
         	}

         	else
         	{
         			$sql .= " $key = '$val' ,";
         	}
         	$i++;
         }
         	$sql.="where  $where_feild= '$where_value' ";
         	echo $sql;
            die();
        // $result=$this->connect()->query($sql);
       }
   }

public function get_safe_str($str)
{  
	if($str!='')
	{
	return mysqli_real_escape_string($this->connect(),$str);
}
}
}
?>