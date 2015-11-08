<?php

use DianaCrud\controller\controller;
use DianaCrud\view\view;

/**
 * Description of index
 *
 * @author diana Meneses
 */
class index extends controller {

  public function execute() {
    
    $respuesta = 2 + 5;
    $mensaje = 'Hola desde el controlador';
    
    $variables = array(
        'title' => 'Titulo de la página',
        'respuesta' => $respuesta,
        'mensaje'=> $mensaje
    );
    
    view::defineView('default', 'index', $variables, 'html');
  }

}