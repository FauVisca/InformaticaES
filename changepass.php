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
        $pass = $_POST['pass'];
        $pass1 = $_POST['pass1'];
        
        $id =session_id();

        $sql ="UPDATE Customers SET Password=$pass WHERE Id=$id;";
    
        $result = mysqli_query($con, $sql);

        include "accesso.php";
    }
    else
    {
        http_response_code(405);
        $res=array("responseCode"=>405,"responseText"=>"Method not Allowed", "methodAllowed"=>"POST");
        echo json_encode($res);
    }


?>