<?php

/**
 * Description of trabajadorTable
 *
 * @author diana
 */
class trabajadorTable extends trabajadorTable {

    public static function getAll() {
        $conn = self::getConexion();
        $sql = 'Select id,nombre,apellido,cargo,telefono,extencion,sueldo_basico,created_at,updated_at,deleted_at from trabajador ORDER BY created_at ASC';
        $respuesta = $conn->prepare($sql);
        $respuesta->execute();
        return ($respuesta->rowCount() > 0) ? $respuesta->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public static function getById($id) {
        $conn = self::getConexion();
        $sql = 'Select id,nombre,apellido,cargo,telefono,extencion,sueldo_basico,created_at,updated_at,deleted_at  from trabajador WHERE deleted_at is null and id= :id';
        $params = array(
            ':id' => $id
        );
        $respuesta = $conn->prepare($sql);
        $respuesta->execute($params);
        return ($respuesta->rowCount() > 0) ? $respuesta->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public static function save() {
        
    }
    public function update() {
      
  
    }

}
