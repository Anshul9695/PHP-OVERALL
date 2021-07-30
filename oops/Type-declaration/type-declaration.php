<?php
declare(strict_types=1);
  function test(int $a) #integer
  {
	  echo getType($a);
  }
echo getType('10');
test('10'); #string
 
?>