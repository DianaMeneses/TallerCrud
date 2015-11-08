<?php
use DianaCrud\controller\controller;
use DianaCrud\view\view;

/**
 * Description of sohoException
 *
 * @author diana
 */
class sohoException extends controller {

  public function execute() {
    $variables = array(
        'title' => 'Ocurrio un error en el sistema',
        'exc' => $this->exc
    );
    view::defineView('azucar', 'exception', $variables, 'html');
  }

}
