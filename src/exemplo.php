<?php

require_once("vendor/autoload.php");

use Valdeilton\search\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode("47520000");
print_r($resultado);