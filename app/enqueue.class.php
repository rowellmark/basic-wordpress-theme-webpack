<?php

namespace Headless\App;

class Enqueue{


    public function construct(){
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue' ], 11 );
    }

    public function enqueue(){
        wp_enqueue_style('style', get_stylesheet_directory_uri() . '/dist/styles.css');
    }


}   
$enqueue = new Enqueue();
$enqueue->construct();