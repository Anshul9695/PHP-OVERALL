<?php
#anonymous function as callback or clouser

function test($a,$callback){
	echo $a;
	echo $callback();
}

test(10,function(){
	return 10*10;
});
