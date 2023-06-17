<?php
    include("../conexao.php");
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="../library/iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>
    <script src="../library/apiCard/dist/card.js"></script>
    <link rel="stylesheet" href="../css/finalizarPedido.css">
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
        <input class="pesquisa"placeholder="Pesquisar" type="text">
    </header>


    <main class="main">
        <form  method="post" action="">
            <h1>Finalizar pagamento</h1>
                <div id="line-ct"></div>
                <p id="sub-title">Pague para que sua escola seja publicada</p>


                <div id="preco">
                    <h2>Resumo</h2>
                    <div id="content-preco"><p id="value-preco"><?php echo "R$".$_SESSION['parteJogador'] ?></p><p id="title-preco">Adiantamento de <?php echo $_SESSION['numberPlayer'];?> jogadores</p></div>
                    <div id="content-preco"><p id="value-preco"><?php echo "R$".$_SESSION['taxa'] ?></p><p id="title-preco">Serviços da PRIM</p></div>
                    <div id="line-resumo"></div>
                    <p id="total-preco"><?php echo "R$".$_SESSION['total']. "\nTotal";?></p>
                    <p id="total-preco-final"><?php echo $_SESSION['parcela'] ?></p>
                    <p id="card-number"><?php echo "pelo " .substr_replace($_SESSION['cardNumber'] , ' **** **** ', 4, 11) ?></p>
                </div>

                <input id="pagar" name="sai" type="submit" value="Finalizar pedido">
        </form>
    </main>
    <script src="../js/finalizarPedido.js" type="text/javascript"></script>
<?php 


    if(isset( $_POST['sai'])){

        echo '<script> 

        var url = new URLSearchParams(window.location.search);

        window.location.replace(url + \'teams.php\'); 

        </script>';
    
    }
?>
</body>
</html>