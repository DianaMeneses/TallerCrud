<?php


use DianaCrud\configuracion\configuracion as config;

config::setPath('/var/www/html/DianaCrud/');
config::setUrl('http://localhost/DianaCrud/web');

config::setDriver('pgsql');
config::setHost('localhost');
config::setPort('5432');
config::setDbUser('postgres');
config::setDbPassword('123456');
config::setDbName('crud');
config::setPersistentConnection(true);

config::setDSN(config::getDriver() . ':host=' . config::getHost() . ';port=' . config::getPort() . ';dbname=' . config::getDbName());

config::setCookieNameSession('azucarSession');

config::setDefaultModule('default');
config::setDefaultAction('index');