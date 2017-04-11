<?php
    require_once __DIR__.'/gplus-quickstart-php/vendor/autoload.php';
    const CLIENT_ID = '1050771473952-7ofp2lmavtpabp5vrvdmr0ka2ca1lqh6.apps.googleusercontent.com';
    const CLIENT_SECRET = 'exiUCPktkm72s2CxcCUwPsWm';
    // const REDIRECT_URL = 'http://127.0.0.1/google_login_git/index.php';
    const REDIRECT_URL = 'http://arjungupta.esy.es/google_login_git/rating/index.php';
   //const REDIRECT_URL = 'http://' . $_SERVER['HTTP_HOST'] . '/google_login_git/index.php';
    session_start();

    $client = new Google_Client();
    $client->setClientId(CLIENT_ID);
    $client->setClientSecret(CLIENT_SECRET);
    $client->setRedirectUri(REDIRECT_URL);
    //$client->setScope("email");
    $client->addScope("email");
    $client->addScope("profile");

    
    $plus = new Google_Service_Plus($client);

    if (isset($_REQUEST['logout'])) {
        session_unset();
    }
    if (isset($_GET['code'])) {
        $client->authenticate($_GET['code']);
        $_SESSION['access_token'] = $client->getAccessToken();
        $redirect = 'http://'.$_server['HTTP_HOST'].$_SERVER['PHP_SELF'];

        header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
        // exit;
    }

    if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
        $client->setAccessToken($_SESSION['access_token']);
        $me = $plus->people->get('me');

        $id = $me['id'];
        $name = $me['displayName'];
        $email = $me['emails'][0]['value'];
        $profile_image_url = $me['image']['url'];
        $cover_image_url = $me['cover']['coverPhoto']['url'];
        $profile_url = $me['url'];
        
}
    else {
        $authUrl = $client->createAuthUrl();
    }







?>

<div>
    <?php
        if(isset($authUrl)){
            echo "<a class='login' href='".$authUrl."' ><img src='gplus-quickstart-php/signin_button.png' height='50px'>";
        }
        else{
            print "{$id}";
            print "{$name}";
            print "{$email}";
            print "{$profile_image_url}";
            print "{$profile_url}";
            echo "<a class='logout' href='?logout'> <button>Logout</button></a>";
            

        }
    ?>
</div>


