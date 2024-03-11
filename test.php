<?php 

$date = new DateTime ();

echo "<pre>";
var_dump($date);
echo "</pre>";

$date -> modify ('+1 day');

echo "<pre>";
var_dump($date);
echo "</pre>";


echo "<pre>";
var_dump($date -> getTimezone());
echo "</pre>";

echo '<br>';

$formatedDate = $date->modify('+1 day')->format('d/m/Y');





