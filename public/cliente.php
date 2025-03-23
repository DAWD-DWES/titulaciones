<?php
$cliente = new SoapClient("https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl",
        array('trace' => true));

$parametro = [
    'plengua' => 'es',
    'pcurso' => '2019'
];
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
            <?php
// $titulos = $cliente->__soapCall('wstitulosuni',[$parametro])->wstitulosuniResult;
            $titulos = ($cliente->wstitulosuni($parametro))->wstitulosuniResult->ClaseTitulosUni;
            ?>
            <?php foreach ($titulos as $clave => $titulo): ?>
                <?php var_dump($titulo); ?>
            <?php endforeach ?>
        </pre>

        <h1>Funciones</h1>
        <?php $funciones = $cliente->__getFunctions(); ?>
        <ul>
            <?php foreach ($funciones as $clave => $funcion): ?>
                <li><code><?= $funcion ?></code></li>
            <?php endforeach ?>
        </ul>

        <h1>Tipos</h1>
        <?php $tipos = $cliente->__getTypes(); ?>
        <ul>
            <?php foreach ($tipos as $clave => $tipo): ?>
                <li><code><?= $tipo ?></code></li>
            <?php endforeach ?>
        </ul>

        <h1>Última Petición</h1>
        <?php $xml = $cliente->__getLastRequest(); ?>
        <pre><?= htmlentities($xml) ?></pre>

    </body>
</html>