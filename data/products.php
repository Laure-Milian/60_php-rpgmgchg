<?php

require_once  $_SERVER['DOCUMENT_ROOT'] . '/models/Vegetable.php';
require_once  $_SERVER['DOCUMENT_ROOT'] .'/models/Cloth.php';

$vege1 = new Vegetable("vege1", "carotte", 5, "Judy Hopps", "1484732020");
$vege2 = new Vegetable("vege2", "laitue", 2, "Caroline", "2484732020");


$cloth1 = new Cloth("cloth1", "tshirt", 15, "niceClothing");
$cloth2 = new Cloth("cloth2", "pantalon", 30, "reallyNiceClothing");
$cloth3 = new Cloth("cloth3", "chaussette", 5, "acceptableClothing");

$products_array = [$vege1, $vege2, $cloth1, $cloth2, $cloth3];
return $products_array;
