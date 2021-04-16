<?php
/*
Plugin Name: Lotos form plugin
Plugin URI: https://alexander-pl.ru/
Description: This plugin creates and sends contract
Version: 1.0.0
Author: Alexander Plotnikov
Author URI: https://alexander-pl.ru/
License: GPLv2 or later
Text Domain: LotosFormPlugin
*/

require_once  realpath(__DIR__. '/vendor/autoload.php') ;

use \PhpOffice\PhpWord\TemplateProcessor;
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\SMTP;
use \PHPMailer\PHPMailer\Exception;


if (!function_exists('add_action')) {
    exit;
}

class CreateContract
{
    public $plugins = [];

    public function register()
    {
        function onMailError($wp_error)
        {
            echo "<pre>";
            print_r($wp_error);
            echo "</pre>";
        }
        add_action('wp_ajax_my_action',  [$this, 'my_action']);
        add_action('wp_ajax_nopriv_my_action', [$this, 'my_action']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_front',]);
        add_shortcode('create_paper', [$this, 'create_paper']);
        add_action('wp_mail_failed', 'onMailError', 10, 1);
    }

    function my_action()
    {
      

        $email_user = $_POST['lsEmailUser'];
        $title = $_POST['id-title'];

   
        $agreement = new TemplateProcessor(__DIR__ . '/assets/papers/Agreement.docx');
        $contract = new TemplateProcessor(__DIR__ . '/assets/papers/Contract.docx'); 

        foreach ($_POST as $key => $value) {

            $agreement->setValue(str_replace("ls", '', $key), trim($value));
            $contract->setValue(str_replace("ls", '', $key), trim($value));
        }
 
        $agreementName = __DIR__ . '/assets/papers/' . $_POST["lsName"] . '_' . $_POST["lsFamilia"] . '_' . $_POST["lsDataBorn"] . '_' . 'Соглашение.docx';
        $contractName = __DIR__ . '/assets/papers/' . $_POST["lsName"] . '_' . $_POST["lsFamilia"] . '_' . $_POST["lsDataBorn"] . '_' . 'Договор.docx';



        $agreement->saveAs($agreementName);
        $contract->saveAs($contractName); 

      

   /*      $attachments[] = $agreementName;
        $attachments[] = $contractName;

        $headers[] = 'Content-type: text/html; charset=utf-8'; // в виде массива

        $mail = wp_mail($email_user, 'Документы', 'Документы...', $headers, $attachments);

        unlink($agreementName);
        unlink($contractName);

        if ($mail) {
            echo json_encode(['result' => true]);
            die();
        } */

         try { 

            $mail = new PHPMailer();

         /*    echo json_encode(['result' => true]);
            die(); */

            $mail->CharSet = 'UTF-8';

            $mail->isSMTP();

            $mail->SMTPAuth = true;

            $mail->SMTPDebug = 0;

            $mail->Host = 'ssl://smtp.gmail.com';

            $mail->Port = 465;

            $mail->Username = 'lotostoii@gmail.com';

            $mail->Password =  "EUDaawww1";

            $mail->setFrom('lotostoii@gmail.com', 'Alexander Plotnikov');

            $mail->addAddress($email_user, 'Alexander Plotnikov');

            $mail->Subject = 'Отправка почты';
            $body = "<p>Документы...</p>";
            $body .= "<p>C уважением Александр Плотников...</p>";

            $mail->msgHTML($body);

            $mail->addAttachment($agreementName);
            $mail->addAttachment($contractName);
 
            $mail->send();

            unlink($agreementName);
            unlink($contractName); 

            echo json_encode(['result' => true]);
            die();

        } catch (Exception $e) {
            echo json_encode([
                'result' => false,
                'error' => $mail->ErrorInfo,        
            ]);
            die();
        } 

    }

    function create_paper($atts)
    {
        $params = shortcode_atts(
            [
                'title' => 'paper_1',
                'email' => 'taset@mail.ru',
                'fields' => include_once(plugin_dir_path(__FILE__) . "assets/front/data/fields.php")
            ],
            $atts
        );

        extract($params);

        ob_start();

        include(plugin_dir_path(__FILE__) . "assets/front/templates/{$title}.php");

        $output = ob_get_contents();

        ob_end_clean();

        return $output;
    }

    public function enqueue_admin()
    {
        wp_enqueue_style('lotosAdminStyle', plugins_url('/assets/admin/css/style.css', __FILE__));
        wp_enqueue_script('lotosAdminScript', plugins_url('/assets/admin/js/main.js', __FILE__));
    }
    public function enqueue_front()
    {
        wp_enqueue_style('lotosFrontStyle', plugins_url('/assets/front/css/style.css', __FILE__));
        wp_enqueue_script('lotosFrontScript-jq', plugins_url('/assets/front/js/jquery.js', __FILE__));
        wp_enqueue_script('lotosFrontScript-jq-val', plugins_url('/assets/front/js/jquery.validate.min.js', __FILE__));
        wp_enqueue_script('lotosFrontScript-jq-maskedinput', plugins_url('/assets/front/js/jquery.maskedinput.min.js', __FILE__));
        wp_enqueue_script('lotosFrontScript', plugins_url('/assets/front/js/main.js', __FILE__));
        wp_localize_script(
            'lotosFrontScript',
            'ajax_obj',
            array('ajaxurl' => admin_url('admin-ajax.php'))
        );
    }
}


if (class_exists('CreateContract')) {
    $myPlugin = new CreateContract('Hello World!');
    $myPlugin->register();
}
