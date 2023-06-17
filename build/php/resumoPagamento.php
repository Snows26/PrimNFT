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
    <link rel="stylesheet" href="../css/resumoPagamento.css">
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
    
    <h1>Finalizar pagamento</h1>
        <div id="line-ct"></div>
        <p id="sub-title">Pague para que sua escola seja publicada</p>

    <div class="parcelas">
    
        <div class="card-wrapper"></div>
        <?php
            $id_card = $_SESSION['cartao'];

            $query_paycard = "SELECT * FROM paycard WHERE id_card = '$id_card' "; 
            $sql_query = $conexao->query($query_paycard) or die("Falha!" . $conexao->error);

            $paycard = $sql_query->fetch_assoc();

            $total = $_SESSION['total'];

        ?>

        <form method="post" action="" id="formCard">
            <input type="text" name="number" class="input-geral" placeholder="Insira o numero do cartão" value="<?php echo $paycard['id_numberCard'];?>"><br>
            <input type="text" name="name" class="input-geral" placeholder="Insira o nome do titular do cartão" value="<?php echo $paycard['nm_nameCard'];?>"><br>
            <input type="text" name="expiry" class="input-geral" placeholder="MM/YY" value="<?php echo $paycard['dt_dateExpiry'];?>"><br>
            <input type="text" name="cvc" class="input-geral" placeholder="Ex: 123" value="<?php echo $paycard['cd_cvc'];?>"><br>
        </form>

        <script>
            let cartao = new Card({
                form: '#formCard',
                container: '.card-wrapper',

                placeholders:{
                name: 'Nome do titular',
                number: '2306 1425 5454 2145'
                }
            });
        </script>

        <h2 class="parcela-title">Parcelas</h2>

        <form method="post" action="">
            <div id="select-div">
                <select name="parcela">
                    <option value="0" disable selected>Escolha</option>
                    <option value="<?php echo "1x de R$". round($total / 1, 2);?>">1x de <?php echo round($total / 1, 2);?></option>
                    <option value="<?php echo "2x de R$". round($total / 2, 2);?>">2x de <?php echo round($total / 2, 2);?></option>
                    <option value="<?php echo "3x de R$". round($total / 3, 2);?>">3x de <?php echo round($total / 3, 2);?></option>
                    <option value="<?php echo "4x de R$". round($total / 4, 2);?>">4x de <?php echo round($total / 4, 2);?></option>
                    <option value="<?php echo "5x de R$". round($total / 5, 2);?>">5x de <?php echo round($total / 5, 2);?></option>
                    <option value="<?php echo "6x de R$". round($total / 6, 2);?>">6x de <?php echo round($total / 6, 2);?></option>
                    <option value="<?php echo "7x de R$". round($total / 7, 2);?>">7x de <?php echo round($total / 7, 2);?></option>
                    <option value="<?php echo "8x de R$". round($total / 8, 2);?>">8x de <?php echo round($total / 8, 2);?></option>
                    <option value="<?php echo "9x de R$". round($total / 9, 2);?>">9x de <?php echo round($total / 9, 2);?></option>
                    <option value="<?php echo "10x de R$". round($total / 10, 2);?>">10x de <?php echo round($total / 10, 2);?></option>
                    <option value="<?php echo "11x de R$". round($total / 11, 2);?>">11x de <?php echo round($total / 11, 2);?></option>
                    <option value="<?php echo "12x de R$". round($total / 12, 2);?>">12x de <?php echo round($total / 12, 2);?></option>
                </select>
                <img src="../image/triangulo.png">
            </div>
            
            <input id="pagar" type="submit" value="Continuar">
        </form>
    </div>

    
    </main>
    <script src="../js/resumoPagamento.js" type="text/javascript"></script>
    <?php
        
        if(isset($_POST['parcela'])){

            $_SESSION['parcela'] = $_POST['parcela'];

            if($_POST['parcela'] == 0){
                $errosParcela[] = "<script> validarParcela() </script>";
            }
            if(!empty($errosParcela)){
                $errosParcela[] = "<script> erro() </script>";
                foreach($errosTeam as $erro){
                echo $erro;
                }
            }
            else{
                
                echo '<script> 
    
                var url = new URLSearchParams(window.location.search);
            
                window.location.replace(url + \'finalizarPedido.php\'); 
                
                </script>';
            }


        }
        
    ?>
</body>
</html>