
var base_url = 'http://localhost:8000/php-class/SPA-APP/crud-app/';

$(document).ready(function(){
	// Form sey Value uthana Hai

	var input_name=$("#name");
	var input_email=$("#email");
	var input_submit=$("#submit");

	input_submit.on("click",function(){
		var name = input_name.val();
		var email = input_email.val();

		// console.log(name);
		// console.log(email);
		insert(name,email);
	});

});

function insert(name,email){
	// console.log(name);
	// console.log(email);
	if(name=="" ){
		window.alert('name is required');
		return false;
	}else if(email==""){
		window.alert('email is required');
		return false;
	}else{
		console.log('ready to submit');
	}
}