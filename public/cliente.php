<?php

//utilizamos el autoload de composer
require '../vendor/autoload.php';

$cliente = new SoapClient("https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl",
        array('trace' => true));

$parametro = [
    'plengua' => 'es',
    'pcurso' => '2019'
];

// $titulos = $cliente->__soapCall('wstitulosuni',[$parametro]);
try {
    $titulos = $cliente->wstitulosuni($parametro);
} catch (SoapFault $e) {
    echo $e->getMessage();
    die;
}

echo '<pre>';
foreach ($titulos as $k => $v) {
    foreach ($v as $k1 => $v1) {
        echo var_dump($v1);
    }
}
echo '</pre>';

$funciones = $cliente->__getFunctions();
echo '<h1>Funciones</h1>';
echo '<ul>';
foreach ($funciones as $k => $v) {
    echo "<li><code>$v</code></li>";
}
echo '</ul>';

echo '<h1>Tipos</h1>';
$tipos = $cliente->__getTypes();
echo '<ul>';
foreach ($tipos as $k => $v) {
    echo "<li><code>$v</code></li>";
}
echo '</ul>';

echo '<h1>Última Petición</h1>';
$xml = $cliente->__getLastRequest();
echo '<pre>', htmlentities($xml), '</pre>';

