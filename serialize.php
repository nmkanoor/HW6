<?php
$myvar = array('hello', '42', array(1, two), 'apple');
$string = serialize($myvar);
echo $string;
$newvar = unserialize($string);
print_r($newvar);
