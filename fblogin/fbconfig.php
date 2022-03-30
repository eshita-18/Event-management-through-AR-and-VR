<?php
require_once 'vendor/autoload.php';

$fb=new \Facebook\Facebook([
    'app_id'=>'446529463825229',
    'app_secret'=>'42642b6ab9481d69488ee6bd543877e8',
    'default_graph_version'=>'v2.5',

]);
$helper=$fb->getRedirectLoginHelper();

$login_url=$helper->getLoginUrl('http://localhost/project/project/index.php');
try{
    $accesstoken=$helper->getAccessToken();
    if (isset($accesstoken)) {

        $_SESSION['access_token']=(string)$accesstoken;
        header("location:../project/homepage/project-grid-cards.php");
    }

    
 }
 catch(Exception $e){
     echo $e->getTraceAsString();

 }

?>