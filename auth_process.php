<?php
    require_once('models/User.php');
    require_once('dao/UserDAO.php');
    require_once('globals.php');
    require_once('db.php');

    // Resgata o tipo do formulário
    $type = filter_input(INPUT_POST, "type");

    // Verifica o tipo do formulário
    if($type === "register"){

    } else if($type === "login"){

    }
    