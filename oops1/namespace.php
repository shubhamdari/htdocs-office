<?php

require "test.php";

require "test2.php";

$obj = new first\base();

$obj->hello();

$obj1 = new second\base2();

$obj1->hello();

?>