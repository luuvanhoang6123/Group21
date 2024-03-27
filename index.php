<?php

    session_start();
    ob_start();
    include "model/connect.php";
    conn();




    include "view/header.php";
    include "view/home.php";
    include "view/footer.php";
?>