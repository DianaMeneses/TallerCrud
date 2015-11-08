<?php
use DianaCrud\configuracion\configuracion as config;
use DianaCrud\controller\controller;
use DianaCrud\view\view;
include config::getUrl() .'model/trabajadorTable.class.php';
/**
 * Description of eliminar
 *
 * @author diana
 */
class eliminar extends controller {

    public function execute() {
        $id = filter_input(INPUT_POST, 'id');
        $trabajador  =new trabajadorTable();
        $trabajador->setId($id);
        $trabajador->delete();
        $variables=array(
            'data'=>array('code'=>200)
            );
        view::defineView('trabajador','eliminar' , $variables, 'json');
    }
}
