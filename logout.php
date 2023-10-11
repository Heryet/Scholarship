<?php
    session_start();

    if(session_destroy() == 1){
        header('location: pages-login.php');
    }


?>