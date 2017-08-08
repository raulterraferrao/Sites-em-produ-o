<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Rhavi Makeup</title>
        <?php wp_head(); ?>       
    </head>

    <?php
    //is_home é aonde estão os posts
    //is_front_page é aonde está o home
        if(is_home()){
            $var_home = array('home-page','inicio');
        }
    ?>


    <body <?php body_class($var_home); ?> >

    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>