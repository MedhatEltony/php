<?php
$root = dirname(realpath(__FILE__));

$path = get_include_path();
echo '<br>';
echo __FILE__;
echo '<br>';
echo $root . '<br>' . $path;
