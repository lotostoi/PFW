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

require_once  realpath(__DIR__ . '/vendor/autoload.php');

use \PhpOffice\PhpWord\TemplateProcessor;


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
            echo json_encode(['result' => false, 'error' => $wp_error]);
            die();
        }
        function wpse27856_set_content_type()
        {
            return "text/html";
        }
        add_action('wp_ajax_my_action',  [$this, 'my_action']);
        add_action('wp_ajax_nopriv_my_action', [$this, 'my_action']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_front',]);
        add_shortcode('create_paper', [$this, 'create_paper']);
        add_action('wp_mail_failed', 'onMailError', 10, 1);
        add_filter('wp_mail_from', [$this, 'wpb_sender_email']);
        add_filter('wp_mail_content_type', 'wpse27856_set_content_type');
    }

    function my_action()
    {
        $agreement = new TemplateProcessor(__DIR__ . '/assets/papers/Agreement.docx');
        $contract = new TemplateProcessor(__DIR__ . '/assets/papers/Contract.docx');
        $healthyList = new TemplateProcessor(__DIR__ . '/assets/papers/HealthyList.docx');

        foreach ($_POST as $key => $value) {

            $agreement->setValue(str_replace("ls", '', $key), trim($value));
            $contract->setValue(str_replace("ls", '', $key), trim($value));
            $healthyList->setValue(str_replace("ls", '', $key), trim($value));
        }

        $agreementName = __DIR__ . '/assets/papers/' . $_POST["lsName"] . '_' . $_POST["lsFamilia"] . '_' . $_POST["lsDataBorn"] . '_' . 'Соглашение.docx';
        $contractName = __DIR__ . '/assets/papers/' . $_POST["lsName"] . '_' . $_POST["lsFamilia"] . '_' . $_POST["lsDataBorn"] . '_' . 'Договор.docx';
        $healthyListName = __DIR__ . '/assets/papers/' . $_POST["lsName"] . '_' . $_POST["lsFamilia"] . '_' . $_POST["lsDataBorn"] . '_' . 'Лист-здоровья.docx';

        $agreement->saveAs($agreementName);
        $contract->saveAs($contractName);
        $healthyList->saveAs($healthyListName);

        $attachments[] = $agreementName;
        $attachments[] = $contractName;
        $attachments[] = $healthyListName;

        $headers[] = 'Content-type: text/html; charset=utf-8'; // в виде массива
        $headers[] = 'Cc: От кого...';

        $userAddres = $_POST['lsEmailUser'];
        $adminAddres = $_POST['toEmail'];

        $titleUser = 'Документы для приёма в клинику Aurora DentHouse.';
        $titleAdmin = 'Для администратора. Документы онлайн с сайта.';

        $fullname = $_POST["lsPatronymic"] ?
            $_POST["lsFamilia"] . ' ' . $_POST["lsName"] . ' ' . $_POST["lsPatronymic"] :
            $_POST["lsFamilia"] . ' ' . $_POST["lsName"];

        $bodyUser = "<p>{$fullname}, благодарим Вас за обращение в семейную стоматологическую клинику «Aurora DentHouse»</p>";
        $bodyUser .= "<p>На нашем сайте Вы заполнили документы, которые будут готовы к Вашему приезду в клинику.</p>";
        $bodyUser .= "<p>Вы можете ознакомится с ними в прикрепленных файлах к письму.</p>";
        $bodyUser .= "<br/>";
        $bodyUser .= '<p>С уважением "AuroraDH"</p>';
        $bodyUser .= "<br/>";
        $bodyUser .= "<br/>";
        $bodyUser .= "<hr/>";
        $bodyUser .= '<p>Телефоны:</p>';
        $bodyUser .= '<p>+7 902 557 10 01</p>';
        $bodyUser .= '<p>+7 (4232) 571 001</p>';
        $bodyUser .= '<p>Адрес:</p>';
        $bodyUser .= '<p>г. Владивосток, ул. Авроровская, 17.</p>';

        $bodyAdmin = '<p>На сайте были сформированы документы.</p>';
        $bodyAdmin .= "<br/>";
        $bodyAdmin .= "<br/>";
        $bodyAdmin .= '<p>Ответ на вопрос откуда узнали:</p>';
        $bodyAdmin .= '<p style="font-style: italic;">' . $_POST['isAnswer'] . '</p>';


        wp_mail($userAddres, $titleUser, $bodyUser, $headers, $attachments);
        wp_mail($adminAddres, $titleAdmin, $bodyAdmin,  $headers, $attachments);


        unlink($agreementName);
        unlink($contractName);
        unlink($healthyListName);
        echo json_encode(['result' => true]);
        die();
    }
    function wpb_sender_email($original_email_address)
    {
        return  "test@mail.ru";
    }

    function create_paper($atts)
    {

        $emailAddresses = $atts['email'];;


        $fields = include_once(plugin_dir_path(__FILE__) . "assets/front/data/fields.php");

        ob_start();

        include(plugin_dir_path(__FILE__) . "assets/front/templates/paper_1.php");

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
