<?php
    session_start();
?>
<html>
    <head>
        <title>Accesso</title>
    </head>
    <body>
        <div class="">
    <?php
         $id =session_id();

         $sql ="select User from InformaticaES where ID ='$id'";
         $result = mysqli_query($con, $sql); 

         echo "Benvenuto nel sito: "+ $result;
    ?>
        </div>
            <a target="_blank" href="changepassw.html">Change PASSWORD</a>
        <footer>
            <form action="destroy.php">
                <button type="submit">LOGOUT</button>
            </form>
        </footer>
    </body>
</html>