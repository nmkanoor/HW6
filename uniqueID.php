<?php
echo md5(time() . mt_rand(1,1000000));
echo uniqid();
echo uniqid('foo_');
echo uniqid('',true);
echo uniqid('bar_',true);
?>
