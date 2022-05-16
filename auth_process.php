<?php
    require_once('db.php');
    require_once('globals.php');
    require_once('models/User.php');
    require_once('models/Message.php');
    require_once('dao/UserDAO.php');

    $message = new Message($BASE_URL);
    $userDAO = new UserDAO($conn, $BASE_URL);

    // Resgata o tipo do formulário
    $type = filter_input(INPUT_POST, "type");

    // Verifica o tipo do formulário
    if($type === "register"){
        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

        // Verificação de dados mínimos
        if($name && $lastname && $email && $password){
            if(strlen($password) < 8){
                $message -> setMessage("A senha deve ter no mínimo 8 caracteres", "error", "back");
            }
            if($password === $confirmpassword){
                // Verificar se o email já está cadastrado no sistema
                if($userDAO -> findByEmail($email) === false){

                    $user = new User();

                    // Criação de token e senha
                    $userToken = $user -> generateToken();
                    $finalPassword = $user -> generatePassword($password);

                    $user -> name = $name;
                    $user -> lastname = $lastname;
                    $user -> email = $email;
                    $user -> password = $finalPassword;
                    $user -> token = $userToken;

                    $auth = true;

                    $userDAO -> create($user, $auth);

                    $message -> setMessage("Usuário cadastrado com sucesso!", "sucess", "back");
                    
                } else{
                    // Enviar uma msg de erro
                    $message -> setMessage("Usuário já cadastrado, tente outro e-mail", "error", "back");
                }
            } else if($password !== $confirmpassword){
                $message -> setMessage("As senhas não correspondem", "error", "back");
            }
        } else{
            // Enviar uma msg de erro
            $message -> setMessage("Por favor, preencha todos os campos", "error", "back");
        }

    } else if($type === "login"){
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
    }
    