<?php
use DianaCrud\controller\controller;
use DianaCrud\view\view;

/**
 * Description of nuevo
 *
 * @author diana
 */
class nuevo extends controller {
    public function execute() {
        
        
        view::defineView('trabajador', 'nuevo', null, 'html');
    }
}
