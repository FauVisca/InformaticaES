<?php
    session_start();

    $servername = "localhost";
    $username = "fauvisca";
    $password = "";
    $dbname = "my_fauvisca";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['user'];
        $password = $_POST['pass'];
        $remember = $_POST['rememberMe'];
        
        $sql ="select id from InformaticaES where User='$user' Password='$password'";
    
        $result = mysqli_query($con, $sql);  
        $count = mysqli_num_rows($result);  
    
        if($count == 1)
        {
            $_SESSION["id"]=$sql;

            if(!empty($_POST['rememberMe'])) {

                setcookie("passowrd",$password);
                setcookie("username",$user);
        
            }
        }
        else
        {
            echo "Errore nel login";
            header("Refresh:0");
        }
    } 
    else
    {
        http_response_code(405);
        $res=array("responseCode"=>405,"responseText"=>"Method not Allowed", "methodAllowed"=>"POST");
        echo json_encode($res);
    }
    
?>