 <?php
  #class Router 
  class Route{
	  			
	  public static function get($route,$callback){
		
		 $pre_slash=$route[0];
		 // $url=$route;
		 echo "</br>";
		 if($pre_slash=='/')
		 {
			 $url=$route;
		 }
		 else{
			 $url="/".$route;
		 }
		      if($url=="/".$_GET['route'])
			  {
          echo $callback();		 
			  }
		 
	  }
  }
  
  
 ?>