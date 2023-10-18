<?php

error_reporting(0);
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');	
date_default_timezone_set('America/Sao_Paulo');

/*echo "<pre>";
 echo "<br />";
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $postData = json_decode(file_get_contents('php://input'), true);
    if (empty($postData)) {
        http_response_code(400);
        echo '{"status": false, "message": "0"}'; exit;
    }

    if(!empty($postData)) {

        require_once('../../sistema/framework/class/login.class.php');
        require_once('../../sistema/framework/class/mysql.class.php');

        $login = new MyLoginClass($postData['pin']);

        if(!$login){
            session_destroy();
            echo '{"status": false, "message": "1"}'; exit;
        }

        session_start();
        $_SESSION['HOST_CLIENT'] = $login->getHost();
        $_SESSION['DB_USER']     = $login->getUser();
        $_SESSION['DB_PASS']     = $login->getPassword();

        //print_r($_SESSION);
        $mysql = new MySQLClass();

        if(!$mysql){
            session_destroy();
            echo '{"status": false, "message": "2"}'; exit;
        }

        $query = $mysql->fetchRow("SELECT * FROM users WHERE pin = '".$postData['pin']."' ");

        /*print_r($query);
         echo "47 <br />";
         print_r($postData);
        */

        if($query['pass'] == $postData['senha']) {
            $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
            $uri = $protocol . $_SERVER['HTTP_HOST'];
            $response = '{"status": true, "message": "OK"}';
        } else {
            $response = '{"status": false, "message": "3"}';
        }

    } else {
        $response = '{"status": false, "message": "0"}';
    }

} else {
    http_response_code(405);
    $response = '{"status": false, "message": "0"}';
}

/*echo "<br /></pre>";
 echo "72 - ".$response;
*/

echo $response;

?>