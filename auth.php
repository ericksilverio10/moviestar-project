<?php
    include_once('templates/header.php');
?>
<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <div class="row" id="auth-row">
            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                <form action="" method="POST">
                <input type="hidden" name="type" value="login">
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite a sua senha" required>
                    </div>
                    <input type="submit" class="btn card-btn" value="Entrar">
                </form>
            </div>
            <div class="col-md-4" id="register-container">
                <h2>Criar conta</h2>
                <form action="<?=$BASE_URL?>auth_process.php" method="POST">
                <input type="hidden" name="type" value="register">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Sobrenome:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite o seu sobrenome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Crie uma senha:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite a sua senha" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirme a sua senha:</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirme a sua senha" required>
                    </div>
                    <input type="submit" class="btn card-btn" value="Cadastrar">
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    #auth-row{
    justify-content: space-evenly;
}
    #login-container h2, #register-container h2{
        text-align: center;
        border-bottom: 2px solid #f5c518;
        width: 200px;
        margin: 0 auto;
        padding: 10px;
        transition: .5s ease-in-out;
        cursor: pointer;
    }
    #login-container h2:hover, #register-container h2:hover{
        text-align: center;
        border-bottom: 2px solid #f5c518;
        width: 300px;
        margin: 0 auto;
        padding: 10px;
    }
    #login-container form, #register-container form{
        max-width: 400px;
        margin: 30px auto;
    }
    .btn.card-btn{
        color: black;
        background-color: #f5c518;
        border: 2px solid #f5c518;
        width: 100%;
        border-radius: 20px;
        transition: .5s ease-in-out;
    }
    .btn.card-btn:hover{
        color: #f5c518;
        background-color: transparent;
        border: 2px solid #f5c518;
        letter-spacing: 2px;
    }
</style>
<?php
    include_once('templates/footer.php');
?>