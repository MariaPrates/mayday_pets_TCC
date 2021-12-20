<?php
    session_start();
    session_destroy();
    header('Location:../index.php?pag=index');
    exit;
    
?>