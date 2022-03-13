<!DOCTYPE html>
<html>

<head>
    <title>IndexPage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Slide Navbar</title>
        <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    </head>

    <body>
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">

            <div class="signup">
                <form>
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <input type="text" name="user" placeholder="User name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="pass" placeholder="Password">
                    <button>Sign up</button>
                </form>
            </div>

            <div class="login">
                <form>
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="text" name="user" placeholder="User name">
                    <input type="email" name="email" placeholder="Email" required="">
                    <center>
                        <input type="checkbox" name="rememberMe">Remember me
                        <br>
                        <?php
                            require_once './google/vendor/autoload.php';
                              
                            $clientID = '903725800682-sfrcglepaassq1qvfe1rih41hvs2r8j2.apps.googleusercontent.com';
                            $clientSecret = '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';
                            $redirectUri = 'http://fauvisca.altervista.org/Informatica/accesso.php';
                               
                            $client = new Google_Client();
                            $client->setClientId($clientID);
                            $client->setClientSecret($clientSecret);
                            $client->setRedirectUri($redirectUri);
                            $client->addScope("email");
                            $client->addScope("profile");
                            
                            if (isset($_GET['code'])) {
                              $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
                              $client->setAccessToken($token['access_token']);
                            
                              $google_oauth = new Google_Service_Oauth2($client);
                              $google_account_info = $google_oauth->userinfo->get();
                              $email =  $google_account_info->email;
                              $name =  $google_account_info->name;
                              
                            } else {
                              echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
                            }
                        ?>
                        <br>
                        <a href="forgetpss.html">Forgot your password?</a>
                    </center>
                    <button>Login</button>
                </form>
            </div>
        </div>
    </body>

    </html>
</body>