<?php

header('Content-Type: application/json');

require_once '../../modelo/operador.php';
require_once '../../modelo/satelite.php';
require_once 'responses/consultarResponses.php';

$op = new Operador();
$op->Nombre = 'ARSAT';
$op->TipoEmpresa = 'Pública';
$op->FormaLegal = 'Sociedad Anónima';

$sat = new Satelite();
$sat->Id = $_GET['IdSatelite'];
$sat->Nombre = 'Arsat-1';
$sat->Operador = $op;
$sat->TipoMision = 'Comunicaciones';
$sat->DuracionEnAnios = '15 Años';

$res = new ConsultarResponses();
$res->Satelite = $sat;

echo json_encode($res);
