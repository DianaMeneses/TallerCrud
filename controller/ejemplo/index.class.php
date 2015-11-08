<?php
use DianaCrud\controller\controller;
use DianaCrud\view\view;

/**
 * Description of index
 *
 * @author diana
 */
class index extends controller{
    public function execute() {
        $respuesta  =2 + 5;
        $variables = array(
            'respuesta'=> $respuesta
        );
       view::defineView('ejemplo','index',$variables,'html');
    }
}
