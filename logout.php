<?php
    session_start(); // Initialiser
    session_unset(); // Désactiver
    session_destroy(); // Détruire

    header('location: index.php');
    exit();