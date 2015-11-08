<?php

namespace DianaCrud\controller;

/**
 * Description of controller
 *
 * @author Diana Meneses
 */
abstract class controller {
  
  protected $exc;

  public function __construct(\PDOException $exc = null) {
    $this->exc = $exc;
  }

  abstract public function execute();
}

