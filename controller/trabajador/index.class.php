<?php

use DianaCrud\configuracion\configuracion as config;
use DianaCrud\controller\controller;
use DianaCrud\view\view;

include config::getPath() . 'model/trabajadorTable.class.php';
/**
 * Description of index
 *
 * @author diana <meneses_d@rocketmail.com>
 */
class index extends controller{
    public function execute() {
        
        $objTrabajador= trabajadorTable::getAll();
        
        $variables= array(
            'objTrabajador'=>$objTrabajador            
        );
        view::defineView('trabajador', 'index', $variables, 'html');
    }
}
