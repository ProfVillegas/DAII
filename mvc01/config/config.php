<?php

Config::set('site_name', 'Your Site Name');

Config::set('languages', array('en', 'fr','es'));

// Routes. Route name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin'   => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

//Agregar las variables para la conexión a la BD
//Recuerde agregar el num de puerto, de ser necesario :8080
Config::set('db.host', 'localhost'); 
Config::set('db.usuario', 'root');
Config::set('db.password', '');
Config::set('db.db_name', 'mvc');
//Crear la Clase db en lib