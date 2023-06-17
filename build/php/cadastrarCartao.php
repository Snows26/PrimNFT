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
    <link rel="icon" href="../image/Ativo 1.png">
    <link rel="stylesheet" href="../css/cadastrarCartao.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="../library/iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>
    <script src="../library/apiCard/dist/card.js"></script>
    <title>PRIM | Login</title>
</head>
<body>
<div id="all">
    <nav class="nav">
    <img src="../image/bubleTop.png">
        <!-- Nav primaria-->
        <div id="nav-primaria" class="nav-primaria">
            <div id="dashboard-perfil">
                <img id="img-perfil" src="<?php echo $_SESSION['path'];?>">
                <p id="nome-perfil">Olá,<br><b><?php echo $_SESSION['nickname'];?></b></p>
                <div id="line-nome"></div>
                <button id="bell" onclick="telaNotificacao()"><img src="../image/bell.png"><img></button>
                <div id="points-all"><img src="../image/star-coins.png"><p>3247</p><sub>P</sub></div>
            </div>
            <div id="nav-opc">
                <ul>
                    <li id="list-time"><img src="../image/Group.png">Perfil</li>
                    <a id="link-time" href="teams.php"><li id="list-time"><img src="../image/shield.png">Times</li></a>
                    <li id="list-time"><img src="../image/text_file.png">Contratos</li>
                    <li id="list-time"><img src="../image/card.png">Carteira</li>
                </ul>
            </div>

            <center><a href="logOut.php" id="logOut"> Sair </a></center>
        </div>

        <!-- Nav modo notificação-->
        <div id="nav-modo-notificacao" class="nav-modo-notificacao-close">

            <div id="all-title-notif">
                <button id="back-notif" onclick="voltarNotif()"><img src="../image/arrow back.png"></button>
                <h1 id="titulo-notif">Notificações</h1>
            </div>

            <div id="main-notif">
                <div id="all-notif">
                    <table id="corpo-notif">
                        <tbody id="body-notif">
                            <tr>
                                <td><img src="../image/email.png" id="img-msg"></td>
                                <td><h1>Nova mensagem!</h1><p>Mety Mefy enviou uma mensagem</p></td>
                            </tr>
                            <tr>
                                <td><img src="../image/email.png" id="img-msg"></td>
                                <td><h1>Nova mensagem!</h1><p>Mety Mefy enviou uma mensagem</p></td>
                            </tr>
                            <tr>
                                <td><img src="../image/email.png" id="img-msg"></td>
                                <td><h1>Nova mensagem!</h1><p>Mety Mefy enviou uma mensagem</p></td>
                            </tr>
                            <tr>
                                <td><img src="../image/email.png" id="img-msg"></td>
                                <td><h1>Nova mensagem!</h1><p>Mety Mefy enviou uma mensagem</p></td>
                            </tr>
                            <tr>
                                <td><img src="../image/email.png" id="img-msg"></td>
                                <td><h1>Nova mensagem!</h1><p>Mety Mefy enviou uma mensagem</p></td>
                            </tr>
                            <tr>
                                <td><img src="../image/email.png" id="img-msg"></td>
                                <td><h1>Nova mensagem!</h1><p>Mety Mefy enviou uma mensagem</p></td>
                            </tr>
                            <tr>
                                <td><img src="../image/email.png" id="img-msg"></td>
                                <td><h1>Nova mensagem!</h1><p>Mety Mefy enviou uma mensagem</p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </nav>


    <header class="header">
        <input placeholder="Pesquisar" type="text" id="pesquisa">
    </header>


    <main class="main">

    <h1>Cadastre o cartão</h1>
        <div id="line-ct"></div>
        <p id="sub-title">Pague para que sua escola seja publicada</p>


            <div class="card-wrapper"></div>

        <div id="main-dado-cartao">

            <h2 id="">Dados do cartão</h2>
            
            <form method="post" action="" id="formCard">
                        
            <p class="title-input">Numero do cartão</p>
            <input type="text" name="number" class="input-geral" placeholder="Insira o numero do cartão"><br>
            <sub class="correct" id="alert-number-card"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>
            <sub class="correct" id="alert-invalid-number"><img class="img-alert" src="../image/57077.png">Numero invalido</sub>

            <p class="title-input">Nome do titular</p>
            <input type="text" name="name" class="input-geral" placeholder="Insira o nome do titular do cartão"><br>
            <sub class="correct" id="alert-name-card"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>

            <p class="title-input">Data de validade</p>
            <input type="text" name="expiry" class="input-geral" placeholder="MM/YY"><br>
            <sub class="correct" id="alert-expiry-card"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>

            <p class="title-input">CVC</p>
            <input type="text" name="cvc" class="input-geral" placeholder="Ex: 123"><br>
            <sub class="correct" id="alert-cvc"><img class="img-alert" src="../image/57077.png">Campo vazio</sub><br>

            <input id="button-cadastrar" type="submit" class="cadastrar" value="Cadastrar">
            </form>

                <script>
                let cartao = new Card({
                    form: '#formCard',
                    container: '.card-wrapper',

                    placeholders:{
                    name: 'Nome do titular',
                    }
                });
                </script>
        </div>

    </main>

</div>
<script src="../js/cadastrarCartao.js" type="text/javascript"></script>

<?php 

// CONEXÃO BANCO DE DADOS________
    include("../conexao.php");


if(isset($_POST['number'])){

    // DADOS CADASTRO CARD_________
    $numberCard = $_POST['number'];
    $nameCard = $_POST['name'];
    $dateExpiryCard = $_POST['expiry'];
    $CVC = $_POST['cvc'];

    $idUser = $_SESSION['user_id'];

    // BANCO DE DADOS ______________
    $sqlPayCard = "INSERT INTO paycard(id_user, id_numberCard, nm_nameCard, dt_dateExpiry, cd_cvc) 
    VALUES ('$idUser', '$numberCard ', '$nameCard', '$dateExpiryCard', '$CVC')";

    // ARRAY DE ERROS_______________
    $errosCard = [];


    if(empty($numberCard)){
        $errosCard[] = "<script> validarInputNumberCard() </script>";
    }
    if(empty($nameCard)){
        $errosCard[] = "<script> validarInputNameCard() </script>";
    }
    if(empty($dateExpiryCard)){
        $errosCard[] = "<script> validarInputDateExpiryCard() </script>";
    }
    if(empty($CVC)){
        $errosCard[] = "<script> validarInputCvcCard() </script>";
    }
    if(!empty($errosCard)){
        $errosCard[] = "<script> erro() </script>";
        foreach($errosCard as $erro){
          echo $erro;
        }
      }
    else{

    mysqli_query($conexao, $sqlPayCard);//_______________________Cadastrando no banco de dados

    mysqli_close($conexao);

    echo '<script> 
    
            var url = new URLSearchParams(window.location.search);
        
            window.location.replace(url + \'pagamentoTime.php\'); 
            
            </script>';
    }

}
?>
</body>
</html>