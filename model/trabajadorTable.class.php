<?php

use DianaCrud\configuracion\configuracion as config;

include_once config::getPath() . 'model/base/trabajadorTableBase.class.php';

/**
 * Description of trabajadorTable
 *
 * @author diana
 */
class trabajadorTable extends trabajadorTableBase {

    public static function getAll() {
        $conn = self::getConexion();
        $sql = 'select id,nombre,apellido,telefono,extencion,cargo,sueldo_basico,created_at,updated_at,deleted_at from trabajador where deleted_at is null';
        $respuesta = $conn->prepare($sql);
        $respuesta->execute();
        return ($respuesta->rowCount() > 0) ? $respuesta->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public static function getById($id) {
        $conn = self::getConexion();
        $sql = 'select id,nombre,apellido,telefono,extencion,cargo,sueldo_basico,created_at,updated_at,deleted_at from trabajador where deleted_at is null and id = :id';
        $params = array(
            ':id' => $id
        );
        $respuesta = $conn->prepare($sql);
        $respuesta->execute($params);
        return ($respuesta->rowCount() > 0) ? $respuesta->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = self::getConexion();
        $sql = 'Insert into trabajador (nombre,apellido,telefono,extencion,cargo,sueldo_basico) values (:nombre, :apellido, :telefono, :extencion, :cargo, :sueldo_basico)';
        $params = array(
            ':nombre' => $this->getNombre(),
            ':apellido' => $this->getApellido(),
            ':telefono' => $this->getTelefono(),
            ':extencion' => $this->getExtencion(),
            ':cargo' => $this->getCargo(),
            ':sueldo_basico' => $this->getSueldo_basico(),
        );

        $respuesta = $conn->prepare($sql);
        $respuesta->execute($params);
        return $conn->lastInsertId(self::SECUENCIA);
    }

    public function update() {
        $conn = self::getConexion();
        $sql = 'UPDATE trabajador SET nombre = :nombre, apellido :apellido, telefono :telefono, extencion :extencion, cargo :cargo, sueldo_basico :sueldo_basico WHERE id :id';
        $params = array(
            ':nombre' => $this->getNombre(),
            ':apellido' => $this->getApellido(),
            ':telefono' => $this->getTelefono(),
            ':extencion' => $this->getExtencion(),
            ':cargo' => $this->getCargo(),
            ':sueldo_basico' => $this->getSueldo_basico(),
            ':id' => $this->getId()
        );
        $respuesta = $conn->prepare($sql);
        $respuesta->execute($params);
        return true;
    }

    public function delete($deleteLogica = true) {
        $conn = self::getConexion();
        $params = array(
            ':id' => $this->getId()
        );
        switch ($deleteLogica) {
            case true:
                $sql = 'UPDATE trabajador SET deleted_at = now() WHERE id = :id';
                break;
            case false :
                $sql = 'DELETE FROM trabajador WHERE id = :id';
                break;
            default:
                throw new PDOException('por favor indique un dato coherente para el borrado logico o fisico');
        }
        $respuesta = $conn->prepare($sql);
        $respuesta->execute($params);
        return true;
    }

}
