<?php
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
        $email = $_POST['email'];
        
        $sql ="select password from InformaticaES where User='$user' Email='$email'";
        $result = mysqli_query($con, $sql); 

        $to = $email;
        $message = $result;
        $subject = "Forget Password";
        $headers = array(
            'From' => 'InformaticaES',
            'Reply-To' => $to,
            'X-Mailer' => 'PHP/' . phpversion()
        );
        
        mail($to,$subject,$message,$headers);

        include "index.php";
    }
    else
    {
        http_response_code(405);
        $res=array("responseCode"=>405,"responseText"=>"Method not Allowed", "methodAllowed"=>"POST");
        echo json_encode($res);
    }

?>