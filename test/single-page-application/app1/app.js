  //Application js
  
  var base_url='http://localhost:8000/test/single-page-application/app1/';
  
  $(document).ready(function(){
 	
  });
  
  //function of getting hash value
  function $hash()
  {
	  return window.location.hash;
  }
    
	function load_view(pagename)
	{
	  switch(pagename)
	  { 
	     
		 case 'home':
		 var response= home();
		 //console.log(response);
		 sethash(pagename);
		 return view(response);
         break;
          
         case 'register':
		 
		 var response= register();
		 //console.log(response);
		 sethash(pagename);
		  return view(response);
          break;	
         
            case 'about':
			var response= about();
		 //console.log(response);
		 sethash(pagename);
		  return view(response);
          break;	

          case 'login':
		  var response= login();
		// console.log(response);
		sethash(pagename);
		 return view(response);
          break;
default:
 var response=home();
 sethash(pagename);
  return view(response);
break;		  
	  }
	}
function home(){
	return "<h1>This is Home View</h1>";
}

function login(){
	return "<h1>This is login View</h1>";
}
function register(){
	return "<h1>This is Register View</h1>";
}

function about(){
	return "<h1>This is about View</h1>";
}


function view(response)
{
	$("#outer").html(response);
}


function sethash(pagename){
	window.location.href=base_url + "#" +pagename;
}