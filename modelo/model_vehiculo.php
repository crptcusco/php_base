<?php
require_once '../config.php';;
# Importar modelo de abstracción de base de datos
require_once(RUTA.'sql/db_abstract_model.php');

class Vehiculo extends DBAbstractModel {
############################### PROPIEDADES ################################

    public $id;
    public $estudio_tipo_id;
    public $proyecto_id;
    public $informe_id;
    public $ubicacion;
    public $estudio_fecha;
    public $vehiculo_tipo_id;
    public $vehiculo_marca_id;
    public $vehiculo_modelo_id;
    public $fabricacion_anio;
    public $vehiculo_traccion_id;
    public $valor_similar_nuevo;
    public $contacto;
    public $telefono;
    public $observacion;
    public $ruta_informe;

################################# MÉTODOS ##################################
# Traer datos de un usuario

    public function get($id = '') {
        //funcion no soportada
    }

# Crear un nuevo vehiculo
    public function set($nuevo_vehiculo_data = array()) {             

        foreach ($nuevo_vehiculo_data as $campo => $valor) {
            $$campo = utf8_decode($valor);
        }
        $this->query = "
        INSERT INTO em_vehiculo ( estudio_tipo_id, proyecto_id, informe_id, ubicacion, estudio_fecha, vehiculo_tipo_id, 
        vehiculo_marca_id, vehiculo_modelo_id, fabricacion_anio, vehiculo_traccion_id, valor_similar_nuevo, contacto, 
        telefono, observacion, ruta_informe)
        VALUES('$estudio_tipo_id', '$proyecto_id', '$informe_id', '$ubicacion', '$estudio_fecha', '$vehiculo_tipo_id', 
        '$vehiculo_marca_id', '$vehiculo_modelo_id', '$fabricacion_anio', '$vehiculo_traccion_id', '$valor_similar_nuevo', 
        '$contacto', '$telefono','$observacion', '$ruta_informe')";
        
        //echo $this->query;        
        //die();

        $this->execute_single_query();
        $this->mensaje = 'Estudio de Vehiculo agregado exitosamente';
    }

//LISTADO DE vehiculoS EXTERNOS
    public function listar_vehiculos() {

        $this->query = "
        select emve.id, emve.estudio_tipo_id, emve.proyecto_id, emve.ubicacion UBICACION ,
        divetr.nombre TRACCION, emve.contacto CONTACTO, emve.telefono TELEFONO, 
        emve.observacion OBSERVACION, emve.ruta_informe,
        emve.informe_id COORDINACION, 
        emve.estudio_fecha FECHA,
        divema.nombre MARCA,
        divemo.nombre MODELO, 
        emve.fabricacion_anio FABRICACION_ANIO,
        emve.valor_similar_nuevo VALOR_NUEVO
        from em_vehiculo emve
        inner join diccionario_vehiculo_marca divema 
        on divema.id= emve.vehiculo_marca_id
        inner join diccionario_vehiculo_modelo divemo 
        on divemo.id= emve.vehiculo_modelo_id
        inner join diccionario_vehiculo_tipo diveti 
        on diveti.id= emve.vehiculo_tipo_id
        inner join diccionario_vehiculo_traccion divetr 
        on divetr.id = emve.vehiculo_traccion_id
        order by emve.estudio_fecha desc limit 50
        ;";
        
//        echo $this->query;
//        die();     
        
        $this->rows = null;
        $this->get_results_from_query();
        return $this->rows;
    }
    
    //LISTADO DE vehiculoS EXTERNOS
    public function listar_vehiculo_tipo() {
        $this->query = "select * from diccionario_vehiculo_tipo order by nombre;";
        $this->rows = null;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function listar_vehiculo_marca() {
        $this->query = "select * from diccionario_vehiculo_marca order by nombre;";
        $this->rows = null;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function listar_vehiculo_modelo() {
        $this->query = "select * from diccionario_vehiculo_modelo order by nombre;";
        $this->rows = null;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function listar_vehiculo_traccion() {
        $this->query = "select * from diccionario_vehiculo_traccion order by nombre;";
        $this->rows = null;
        $this->get_results_from_query();
        return $this->rows;
    }

# Modificar un usuario
    public function edit($user_data = array()) {
        foreach ($user_data as $campo => $valor) {
            $$campo = $valor;
        }
        $this->query = "
        UPDATE usuarios
        SET nombre='$nombre',
        apellido='$apellido'
        WHERE email = '$email'
        ";
        $this->execute_single_query();
        $this->mensaje = 'Usuario modificado';
    }
# Eliminar un usuario
    public function delete($user_email = '') {
        $this->query = "
        DELETE FROM usuarios
        WHERE email = '$user_email'
        ";
        $this->execute_single_query();
        $this->mensaje = 'Usuario eliminado';
    }
# Método constructor
    function __construct() {
        $this->db_name = 'cotiza_factura';
    }
# Método destructor del objeto
    function __destruct() {
        unset($this);
    }
}

?>
