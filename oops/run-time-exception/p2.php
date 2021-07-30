<?php
#Re-Signature Fatal Error

function test(){
	echo 'Test 1';
}

function test(){
	echo 'Test2';
}
#output:-
# Fatal error: Cannot redeclare test() (previously declared in C:\xampp\htdocs\oops\run-time-exception\p2.php:4) in


#since Re-Signature error is a fatal error 
#php is not compiled language hence it wont compile time Declaration
#hence php dose not support overloading

#Type of overloading
#1.method overloading
#2.operator overloading
#3.Argument overloading

/*
Overloading means single signature but variable (or) multiple Argument.
*/
?>