<?php
    session_start();
    include'config.php';

    echo"Bienvenue :".$_SESSION['nom']." ".$_SESSION['prenom'];

;?>