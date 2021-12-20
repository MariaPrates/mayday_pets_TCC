<?php
    require_once('./backend/libs/conecta.php');

session_start();
if((!isset ($_SESSION['email_login']) == true) and (!isset ($_SESSION['senha_login']) == true))
{
  header('location:index.php');
  }

$logado = $_SESSION['email_login'];


$sql_home = "SELECT * FROM usuarios WHERE email = '{$_SESSION['email_login']}'";

$sql_conecta = mysqli_query($conexao, $sql_home);

while($user = mysqli_fetch_object($sql_conecta)):
?>

<!DOCTYPE html>
<html lang='PT-br'>
    
    <head>
    
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>

        
        <link rel='stylesheet' href='./frontend/assets/css/bootstrap.css'>
        <link rel='stylesheet' href='./frontend/CSS/PostFeito/style.css'>

        <link rel="shortcut icon" href="./frontend/imagens/logo.png" >
        
        <title>Postagens feitas - MayDay Pet's</title>
    </head>

    <body>
         
        <?php
            require_once('./frontend/header/header.php');
       ?>
        <!--Fim navbar-->

            <!--Container do corpo-->
                <div class='container-fluid '>
        
                    <!--Postagens feitas-->              
                    
                       <?php
                       
                            require_once("./frontend/PostFeitos/postagens1.php");
                       
                       ?>

                </div>
            <!--Fim do container-->

        <!--Scripts que linkam com  o JavaScript do Bootstrap 5-->
            <script type='text/javascript' src='./frontend/assets/js/bootstrap.bundle.js'></script>
            <script type='text/javascript' src='./frontend/assets/js/jquery.js'></script>
            <script src='./frontend/JS/PostFeito/script.js'></script>

    </body>
</html>
<?php

    endwhile;

?>