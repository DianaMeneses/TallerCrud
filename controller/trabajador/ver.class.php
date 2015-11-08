<?php
use DianaCrud\configuracion\configuracion as config;
use DianaCrud\controller\controller;
use DianaCrud\view\view;

include config::getPath() . 'model/trabajadorTable.class.php';
/**
 * Description of ver
 *
 * @author diana
 */
class ver extends controller {
    public function execute() {        
        $id = filter_input(INPUT_GET, 'id');        
        $objTrabajador = usuarioTable::getById($id);
        
        $variables = array(
            'objTrabajador'=> $objTrabajador
        );
        
        view::defineView('trabajador', 'ver', $variables, 'html');
    }
}