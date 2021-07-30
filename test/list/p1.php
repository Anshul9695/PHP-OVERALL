<?php
$student=[
'name'=>'ravi',
'class'=>'10th',
'marks'=>'100',
];

list($a,$b,$c)=$student;
echo "a={$a},b={$b},c={$b}</br>";
echo "<hr/>";
#Associated Array  with numerical key
$student=[
0=>'ravi',
1=>'10th',
2=>'100',
];

list($a,$b,$c)=$student;
echo "a={$a},b={$b},c={$b}</br>";
echo "<hr/>";

#Associated Array with mixed key

$student=[
0=>'ravi',
'class'=>'10th',
'marks'=>'100',
];

list($a,$b,$c)=$student;
echo "a={$a},b={$b},c={$b}</br>";
?>