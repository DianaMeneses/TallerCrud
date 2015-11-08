<?php
use DianaCrud\configuracion\configuracion as config;
use DianaCrud\controller\controller;
use DianaCrud\view\view;

include config::getUrl() .'model/trabajadorTable.class.php';

/**
 * Description of crear
 *
 * @author diana
 */
class crear extends controller {

    public function execute() {
        $formTrabajador = filter_input_arrray(INPUT_POST)['trabajador'];
       
        //validaciones
        
        $trabajador =new usuarioTable();
        $trabajador->setNombre($formTrabajador['nombre']);
        $trabajador->setApellidos($formTrabajador['apellidos']);
        $trabajador->setTelefono($formTrabajador['telefono']);
        $trabajador->setExtencion($formTrabajador['extencion']);
        $trabajador->setCargo($formTrabajador['cargo']);
        $trabajador->setSueldo($formTrabajador['sueldo']);
       
        $trabajador->save();
        
        header('Location: '. config::getUrl() . 'index.php/usuario/index');
    }
}
