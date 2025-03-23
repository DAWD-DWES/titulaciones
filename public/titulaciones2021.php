<?php
require '../vendor/autoload.php';

use Clases\Pub_gestdocenteClientFactory;
use Clases\Type\Wstitulosuni;
use Clases\Type\WstitulosuniResponse;

$cliente = Pub_gestdocenteClientFactory::factory($wsdl = 'https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl');
$request = new Wstitulosuni('es', '2024');
try {
    $titulos = ($cliente->Wstitulosuni($request))->getWstitulosuniResult()->getClaseTitulosUni();
} catch (SoapFault $e) {
    echo $e->getMessage();
    die;
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Titulaciones</title>
    </head>
    <body>
        <pre>
            <?php foreach ($titulos as $clave => $titulo): ?>
                <?php var_dump($titulo); ?>
            <?php endforeach ?>
        </pre>
    </body>
</html>
