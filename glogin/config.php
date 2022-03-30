<?php
require_once "vendor/autoload.php";
$client=new Google_Client();
$client->setApplicationName('Power Vision');
$client->setClientId('343540901839-cqj9tkm9ijd27pci7ba31ep3d1p2k503.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/project/project/homepage/projects-grid-cards.php');
$client->addScope('email');
$client->addScope('profile');
session_start();
?>