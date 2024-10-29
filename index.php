<?php

require_once __DIR__ . "/DB/Conection.php";
require_once __DIR__ . "/Model/Model.php";
require_once __DIR__ . "/Model/Car.php";


$data_mobil = ['name' => 'Ayla',  'brand' => 'Daihatsu', 'color' => 'Merah'];
$data_owner = ['name' => 'Honda', 'country' => 'jepang', 'since' => '2020'];


header('Location: /oopphp/crud-oop/views/index.php');
