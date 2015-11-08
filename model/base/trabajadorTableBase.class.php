<?php

/**
 * Description of trabajadorTableBase
 *Atributos de la tabla trabajador como privados 
 * y sus repectivos geters an d setters.
 * @author diana
 */
class trabajadorTableBase extends model {
private $d;
private $nombre;
private $apellido;
private $telefono;
private $extencion;
private $cargo;
private $sueldo_basico;
private $createdAt;
private $updatedAt;
private $deletedAt;
const SECUENCIA = 'trabajador_id_seq';

public function getD() {
    return $this->d;
}

public function getNombre() {
    return $this->nombre;
}

public function getApellido() {
    return $this->apellido;
}

public function getTelefono() {
    return $this->telefono;
}

public function getExtencion() {
    return $this->extencion;
}

public function getCargo() {
    return $this->cargo;
}

public function getSueldo_basico() {
    return $this->sueldo_basico;
}

public function getCreatedAt() {
    return $this->createdAt;
}

public function getUpdatedAt() {
    return $this->updatedAt;
}

public function getDeletedAt() {
    return $this->deletedAt;
}

public function setD($d) {
    $this->d = $d;
}

public function setNombre($nombre) {
    $this->nombre = $nombre;
}

public function setApellido($apellido) {
    $this->apellido = $apellido;
}

public function setTelefono($telefono) {
    $this->telefono = $telefono;
}

public function setExtencion($extencion) {
    $this->extencion = $extencion;
}

public function setCargo($cargo) {
    $this->cargo = $cargo;
}

public function setSueldo_basico($sueldo_basico) {
    $this->sueldo_basico = $sueldo_basico;
}

public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
}

public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
}

public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
}



    }

