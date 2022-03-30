<?php
include 'config.php';
if(isset($_GET['code']))
{
    $token=$client-AccessTokenWithCode($_GET['code']);
    $client->setAccessToken($token['access_token']);
    $_SESSION['access_token']=$token['access_token'];
    $service=new Google_Service_OAuth2($_client);
    $data->$service->userinfo->get();
    if (!empty($data['given_name'])) {
        $_SESSION['name']=$data['given_name'];

        
    }
}
$link="";
if (!isset($_SESSION['access_token'])) {
    $link=$client->createAuthUrl();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <?php if(!empty($link)){?>

        <a href="<?php echo $link;?>">Sign in with Google</a>
        <?php
        }else{
            echo  $_SESSION['name'];
                }        ?>

        
    </form>
</body>
</html>