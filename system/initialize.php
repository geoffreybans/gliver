<?php

//store this application configuration and free memory
Drivers\Registry\Registry::setConfig($config);

//free memory of this variable
//unset($config);

//store the database settings in the registry and free memory
Drivers\Registry\Registry::setSettings($database);

//free memory of this variable
//unset($database);

//store the request URI and free the memory
Drivers\Registry\Registry::setUrl( ( isset($_GET['url8g6l67i6v4chdgetrcswyr']) ) ? $_GET['url8g6l67i6v4chdgetrcswyr'] : '');

//set the application start time
Drivers\Registry\Registry::$gliver_app_start = $gliver_app_start;
