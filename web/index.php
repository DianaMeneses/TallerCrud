<?php

include '../lib/DianaCrud/config.class.php';
include '../config/configuracion.class.php';
include '../config/config.php';
include '../lib/DianaCrud/dispatcher.class.php';

use DianaCrud\configuracion\configuracion as config;
use DianaCrud\dispatcher\dispatcher;

session_name(config::getCookieNameSession());
session_start();

dispatcher::main();