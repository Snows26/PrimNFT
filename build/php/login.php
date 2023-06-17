<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../library/iziToast-master/dist/css/iziToast.min.css">
    <link rel="stylesheet" href="../../node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="../library/iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>
    <title>PRIM | Login</title>
</head>
<body>
    <div id="elipse1"></div>
    <div id="elipse2"></div>
    <div id="elipse3"></div>
    <div id="elipse4"></div>

    <main>
        <div class="glide" id="left">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide"><img src="../image/Inter.png" class="camisa"></li>
                    <li class="glide__slide"><img src="../image/Slide 2.jpeg" class="camisa"></li>
                    <li class="glide__slide"><img src="../image/MicrosoftTeams-image.png" class="camisa"></li>
                </ul>
            </div>
            <div style="display: flex; justify-content: center; transform: translateY(-40px);" data-glide-el="controls">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
            </div>
        </div>
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script>

    </script>
    
        <div id="right">

            <form method="post" action=""> <!-- Form -->
                <a href="../index/index.html"><img src="../image/Ativo 1.png" class="logo"></a>
                <h1 class="name-login">Login</h1>
                <p class="sub-name-login">Bem vindo! Logue ou crie uma conta para acessar as nossas ferramentas</p>

                <p class="name-email">Email</p>
                <input type="email" class="input-email" id="emailLogin" name="emailLogin" placeholder="Insira o seu Email" value="<?php 
                                                                                                                                    if(isset($_POST['emailLogin'])){
                                                                                                                                        $_SESSION['emailLogin'] = $_POST['emailLogin']; 
                                                                                                                                        echo $_SESSION['emailLogin'];}
                                                                                                                                ?>">


                <p class="name-password">Senha</p>
                <input type="password" class="input-password" id="senhaLogin" name="senhaLogin" placeholder="Insira a sua senha">
                <sub><p class="forgot">Esqueceu a senha?<a class="click-forgot">Clique aqui</a></p></sub>

                <br><input type="submit" class="button-login" value="Login"><br>
            </form>

                <input type="button" class="button-google" value="Entre com o Google">

                <div class="tudo-outro">
                    <div class="line"></div>
                        <p class="outro">or</p>
                    <div class="line"></div>
                </div>

                <a href="registro.php"><button type="button" class="button-register">Registro</button></a>
        </div>
    </main>
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script src="../js/login.js"></script>
    <?php

    if(isset($_SESSION['verificarConcluido'])){
        if($_SESSION['verificarConcluido'] == 1)
        echo $_SESSION['comandConcluido'];
    }
    unset($_SESSION["verificarConcluido"]);


    ?>
    <?php
    include("../conexao.php");

    $i = 0;


    if(!empty($_POST['emailLogin']) && !empty($_POST['senhaLogin'])){

        
    $email = $conexao->real_escape_string($_POST['emailLogin']);
    $senha = $conexao->real_escape_string($_POST['senhaLogin']);

    # Executa a query desejada 
    $query = "SELECT * FROM user WHERE em_email = '$email' AND ps_password = '$senha'"; 
    $sql_query = $conexao->query($query) or die("Falha!" . $conexao->error);


            $quantidade = $sql_query->num_rows;

            if($quantidade == 1){

                $usuario = $sql_query->fetch_assoc();

                $_SESSION['user_id'] = $usuario['id_user'];
                $_SESSION['nickname'] = $usuario['nm_nickname'];
            
                echo '<script> 
    
                var url = new URLSearchParams(window.location.search);
            
                window.location.replace(url + \'teams.php\'); 
                
                </script>';
            }
            else{
                $i = 1;

            }
            
            if($i == 1){
                echo "<script> loginNaoExiste() </script>";
            }
    }

    else{
        echo "<script> loginPreencher() </script>";
    }


?>
</body>
</html>