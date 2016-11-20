<?php
function foo(){
	$args = func_get_args();
	foreach ($args as $k => $v) {
		echo "arg".($k+1).": $v\n";
	}
}
foo();
foo('hello');
foo('hello', 'world', 'again');
?>
