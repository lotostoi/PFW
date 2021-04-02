<?php
/*
Plugin Name: Lotos form plagin
Plugin URI: https://alexander-pl.ru/
Description: This plagin creates and sends contract
Version: 1.0.0
Author: Alexander Plotnikov
Author URI: https://alexander-pl.ru/
License: GPLv2 or later
Text Domain: LotosFormPlagin
*/

if (!function_exists('add_action')) {
    exit;
}




class CreateContract
{



    public function register()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_front']);
        add_shortcode('foobar', [$this, 'foobar_shortcode']);
    }

    function foobar_shortcode($atts)
    {
        ob_start();
        /* // тут можно сразу выводить при помощи echo()
	// или get_template_part( 'entry' );
	// или закрывать тег ?> и выводить сразу HTML */
        include(plugin_dir_path(__FILE__) . 'assets/front/templates/form.php');
        $output = ob_get_contents(); // всё, что вывели, окажется внутри $output
        ob_end_clean();

        return $output;

        /*  $form = include(plugin_dir_path(__FILE__).'assets/front/templates/form.php');
        return '<div>'.$form.'</div>'; */
    }

    public function enqueue_admin()
    {
        wp_enqueue_style('lotosAdminStyle', plugins_url('/assets/admin/css/style.css', __FILE__));
        wp_enqueue_script('lotosAdminScript', plugins_url('/assets/admin/js/main.js', __FILE__));
    }
    public function enqueue_front()
    {
        wp_enqueue_style('lotosFrontStyle', plugins_url('/assets/front/css/style.css', __FILE__));
        wp_enqueue_script('lotosFrontScript', plugins_url('/assets/front/js/main.js', __FILE__));
    }
}


if (class_exists('CreateContract')) {
    $myPlagin = new CreateContract('Hello World!');
    $myPlagin->register();
}
