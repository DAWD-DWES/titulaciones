<?php

require '../vendor/autoload.php';

use Clases\Pub_gestdocente;
use Clases\wstitulosuni;

$service = new Pub_gestdocente();
$request = new wstitulosuni('es', '2021');
try {
    $titulos = $service->wstitulosuni($request);
} catch (SoapFault $e) {
    echo $e->getMessage();
    die;
}

echo '<pre>';
var_dump($titulos);
echo '</pre>';
