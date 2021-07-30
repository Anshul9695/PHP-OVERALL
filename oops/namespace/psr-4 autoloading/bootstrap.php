<?php

spl_autoload_register(function($namespace){
   $vender_path = __DIR__.'/vender';
   require_once "{$vender_path}/{$namespace}.php";
});

