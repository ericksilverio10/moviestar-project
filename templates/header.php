<?php
    require_once('globals.php');
    require_once('db.php');
    $flassMessage = [];
?>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="index.php" class="navbar-brand">
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
</body>
<?php if(!empty($flassMessage['msg'])):?>
    <div class="msg-container">
        <p class="msg <?= $flassMessage['type'];?>"><?= $flassMessage['msg'];?></p>
    </div>
<?php endif;?>