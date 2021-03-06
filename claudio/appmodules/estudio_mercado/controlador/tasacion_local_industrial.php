<?php
################# LIBRERIAS #####################
require_once '../config.php';
require_once RUTA.'modelo/tasacion_local_industrial.php';

################ OPCIONES ####################
if (!isset($_POST['opcion'])) {
    header('Location: '.RUTA.'vista/error.php');
}
$opcion = $_POST['opcion'];

switch ($opcion) {
    case "nuevo":
    $nuevo_local_industrial_data = array(
        'id' => "",
        'proyecto_id' => $_POST['informe_id'],
        'informe_id' => $_POST['informe_id'],
        'cliente_id' => $_POST['cliente_id'],
        'propietario_id' => $_POST['propietario_id'],
        'solicitante_id' => $_POST['solicitante_id'],
        'ubicacion' => $_POST['ubicacion'],
        'tasacion_fecha' => $_POST['tasacion_fecha'],
        'ubi_departamento_id' => $_POST['ubi_departamento_id'],
        'ubi_provincia_id' => $_POST['ubi_provincia_id'],
        'ubi_distrito_id' => $_POST['ubi_distrito_id'],
        'mapa_latitud' => $_POST['mapa_latitud'],
        'mapa_longitud' => $_POST['mapa_longitud'],
        'zonificacion' => $_POST['tasacion_zonificacion_id'],
        'piso_cantidad' => $_POST['piso_cantidad'],
        'terreno_area' => $_POST['terreno_area'],
        'terreno_valorunitario' => $_POST['terreno_valorunitario'],
        'edificacion_area' => $_POST['edificacion_area'],
        'valor_comercial' => $_POST['valor_comercial'],
        'areas_complementarias' => $_POST['areas_complementarias'],
        'tipo_cambio' => $_POST['tipo_cambio'],
        'observacion' => $_POST['observacion'],
        'usuario_registro_id' => $_POST['usuario_registro_id'],
        'ruta_informe' => str_replace("\\","\\\\",$_POST['ruta_informe']));
    $LocalIndustrial = new LocalIndustrial();
    $LocalIndustrial->set($nuevo_local_industrial_data);
    header('Location:../vista/tasacion_informe.php?mensaje="Tasacion ingresada correctamente"');
    break;
    default:
    break;
}
?>