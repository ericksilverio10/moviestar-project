<?php
    require_once('globals.php');
    require_once('db.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=$BASE_URL?>img/moviestar.ico" type="image/x-icon">
    <title>MovieStar</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.css" integrity="sha512-Ty5JVU2Gi9x9IdqyHN0ykhPakXQuXgGY5ZzmhgZJapf3CpmQgbuhGxmI4tsc8YaXM+kibfrZ+CNX4fur14XNRg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS DO PROJETO -->
    <link rel="stylesheet" href="<?=$BASE_URL?>/css/styles.css">

</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="#" class="navbar-brand">
                <img src="<?=$BASE_URL?>img/logo.svg" alt="Logo" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" id="search-form" class="form-inline my-lg-0" method="GET">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar filme" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?=$BASE_URL?>auth.php" class="nav-link">Entrar/Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="main-container" class="container-fluid">
        <h1>CORPO DO SITE</h1>
    </div>
    <footer id="footer">
        <div class="social-container">
            <ul>
                <li>
                    <a href="#">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-instagram-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-youtube-square"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div id="footer-links-container">
            <ul>
                <li><a href="#">Adicionar Filme</a></li>
                <li><a href="#">Adicionar Crítica</a></li>
                <li><a href="#">Entrar/ Registrar</a></li>
            </ul>
        </div>
        <p>&copy;2022 MovieStar</p>
    </footer>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.js" integrity="sha512-0agUJrbt+sO/RcBuV4fyg3MGYU4ajwq2UJNEx6bX8LJW6/keJfuX+LVarFKfWSMx0m77ZyA0NtDAkHfFMcnPpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

<style>
/* Footer */
    #footer{
    background-color: #000;
    color: #FFF;
    text-align: center;
    margin: 0;
    padding: 20px;
}

.social-container ul,
#footer-links-container ul{
    list-style: none;
    padding: 0;
}
.social-container li,
#footer-links-container li{
    display: inline-block;
    margin: 0 20px;
}
.social-container li{
    height: 40px;
    width: 40px;
    border-radius: 100%;
    transition: .5s;
    line-height: 3;
}
.social-container li:hover{
    background-color: #333;
}
.social-container a,
#footer-links-container a{
    color: white;
    transition: .5s;
}
.social-container li i{
    font-size: 25px;
}
#footer-links-container{
    margin: 30px 0;
}

/* Home */
#main-container{
    background-color: #000;
    color: #FFF;
    min-height: 65vh;
    padding: 40px;
}

</style>
