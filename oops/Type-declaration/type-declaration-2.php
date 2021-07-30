<?php
#php also support return type declaration
declare(strict_types=1);
function test():bool{
	return 'string';
}
echo test();
?>