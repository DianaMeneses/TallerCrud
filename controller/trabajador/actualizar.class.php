<?php
use DianaCrud\configuracion\configuracion as config;
use DianaCrud\controller\controller;
use DianaCrud\view\view;
include config::getUrl() .'model/trabajadorTable.class.php';

/**
 * Description of actualizar
 *
 * @author diana
 */
class actualizar extends controller {

    public function execute() {
     $formularioTrabajador = filter_input_array(INPUT_POST)['trabajador'];
     $trabajador = new trabajadorTable();
     $trabajador->setId($formularioTrabajador['id']);
     $trabajador->setNombre($formularioTrabajador['nombre']);
     $trabajador->setApellido($formularioTrabajador['apellido']);
     $trabajador->setTelefono($formularioTrabajador['telefono']);
     $trabajador->setExtencion($formularioTrabajador['extencion']);
     $trabajador->setCargo($formularioTrabajador['cargo']);
     $trabajador->setSueldo($formularioTrabajador['sueldo_basico']);
     $trabajador->update();
     
        
        header('Location: ' . config::getUrl() . 'index.php/trabajador/index');
    }
}
