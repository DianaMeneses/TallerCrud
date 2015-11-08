<?php
use DianaCrud\configuracion\configuracion as config;
use DianaCrud\controller\controller;
use DianaCrud\view\view;

include config::getUrl() .'model/trabajadorTable.class.php';

/**
 * Description of editar
 *
 * @author diana
 */
class editar extends controller {

    public function execute() {
       $id = filter_input(INPUT_GET, 'id');
       $objTrabajador = trabajadorTable::getById($id);
       
       $variables= array(
           'objTrabajador'=> $objTrabajador
           
       );
                
        view::defineView('trabajador', 'editar', $variables, 'html');
    }
}

