<?php

// set name space 
namespace Headless\Theme;

define('THEME_URL', get_stylesheet_directory_uri());
define('THEME_DIR', realpath( get_template_directory() ) . DIRECTORY_SEPARATOR);




// run file loader
require 'FileLoader.php';

$fileLoader = new FileLoader();


$fileLoader->load_directory('app');