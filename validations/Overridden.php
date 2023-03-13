<?php

// Program to understand use of
// final keyword for methods
final class Base {
	
	// Final method
	final function printdata() {
		echo " Base class final printdata function";
	}
	
	// Non final method
	function nonfinal() {
		echo "\n This is nonfinal function of base class";
	}
}

// Class that extend base class
// class Derived extends Base {
	
// 	// Inheriting method nonfinal
// 	function nonfinal() {
// 		echo "test2";
// 	}

//     function printdata() {
// 		echo "test1";
// 	}
	
// 	// Here printdata function can
// 	// not be overridden
// }

$obj = new Base();
$obj->printdata();
echo "<br>";
$obj->nonfinal();
?>
