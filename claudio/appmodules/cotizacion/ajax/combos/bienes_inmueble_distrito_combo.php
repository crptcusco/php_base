<?php
// ---------------------------------------------- ini-libs
include "../../../../librerias.v2/html/tabla.php";
include "../../../../librerias.v2/mysql/dbconnector.php";
include "../../../../librerias.v2/mysql/reutilizabes_cotizacion.php";
include "../../modelo/combos.php";

// -------------------------------------------------------- INPUT
$input['depatamento_id'] = clear_input( $_POST['departamento_id'] );
$input['provincia_id'] = clear_input( $_POST['provincia_id'] );
$input['distrito_id'] = clear_input( $_POST['distrito_id'] );

// -------------------------------------------------------- OUTPUT
if ( $input['depatamento_id'] != '' and $input['provincia_id'] != '' ) {
    get_options_bienes_inmueble_distrito($input);
}
