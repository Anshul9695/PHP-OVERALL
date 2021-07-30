<?php

require_once __DIR__.'/bootstrap.php';

use Illuminate\Support\Fascade\Schema;
use College\Myclass\Student as NormalStudent;
use College\Myclass\Commerce\Student as CommerceStudent;

$example=new Topic\Example();
$student= new Model\Student();
$student= new NormalStudent();
$schema = new Schema();
$schema->defaultStringLength(191);
$student= new CommerceStudent();