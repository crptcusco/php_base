<?php
// ---------------------------------------------- ini-libs
include "../../../../librerias.v2/mysql/dbconnector.php";
include "../../../../librerias.v2/mysql/reutilizabes_cotizacion.php";
include "../../../../librerias.v2/utilidades.php";
include "../../modelo/buttons.php";

$button = new Coordinacion_Modelo_Eventos_Buttons();
// -------------------------------------------------------- INPUT
$in['coordinacion_id'] = Utilidades::clear_input_id($_POST['coordinacion_id']);
$in['id'] = Utilidades::clear_input_id($_POST['id']);

// print_r($in);
// -------------------------------------------------------- OUTPUT
$button->coordinacionItemBienAdd($in);
