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
    <link rel="stylesheet" href="../css/pagamentoTime.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="../library/iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>
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

        <h1>Pagamento</h1>
        <div id="line-ct"></div>
        <p id="sub-title">Pague para que sua escola seja publicada</p>

        <?php

            $idUser = $_SESSION['user_id'];

            //api de preco slp
            $url = 'https://www.mercadobitcoin.net/api/SLP/ticker/';
            $dadosSite = file_get_contents($url);
            $arr = explode(',', $dadosSite);
            $arrN = array();
            foreach($arr as $item){
                $valor = explode(':', $item); // quebra o elemento atual em um array com duas posições, onde o indice zero é a chave e o um o valor em $arrN
                                               
                $arrN[$valor[0]] = $valor[1];
            }
            $lastPriceSLP = str_replace('"',"",$arrN['"last"']);
            $lastPriceSLPNumber = number_format($lastPriceSLP, 12);


            //conta a pagar
            $loko = intval(str_replace( 'SLP' , '' , $_SESSION['goal'] ));

            $xai = number_format($loko, 5);
            
            $valor = $lastPriceSLPNumber * $loko;
            $parteJogadorBruto = $valor - ($valor * 50 / 100);
            $taxaBruta = $parteJogadorBruto * (15 / 100);

            $_SESSION['parteJogador'] = $_SESSION['numberPlayer'] * round($parteJogadorBruto, 3);
            $_SESSION['taxa'] = round($taxaBruta, 2);

            $_SESSION['total'] = $_SESSION['taxa'] + $_SESSION['parteJogador'];

            $total = $_SESSION['total'];
     
        ?>

        <div id="preco">
            <h2>Resumo</h2>
            <div id="content-preco"><p id="value-preco"><?php echo "R$".$_SESSION['parteJogador'] ?></p><p id="title-preco">Adiantamento de <?php echo $_SESSION['numberPlayer'];?> jogadores</p></div>
            <div id="content-preco"><p id="value-preco"><?php echo "R$".$_SESSION['taxa'] ?></p><p id="title-preco">Serviços da PRIM</p></div>
            <div id="line-resumo"></div>
            <p id="total-preco"><?php echo "R$".$total." Total" ?></p>
        </div>

        <div id="forma-de-pagamento">
            <h2>Formas de pagamento</h2>
                <a href="registerCard/cadastrarCartao.php" class="link-pagamento"><li id="item-pagamento" class="item-pagamento-neutro"><img id="plus-card-img" src="../image/plus.png">Cadastrar cartão</li></a>
                <form method="post" action="">        
                    <div class="sla">
                        <?php
                        
                        //$idUser = $_SESSION['user_id'];

                        $query = "SELECT * FROM paycard WHERE id_user = '$idUser' "; 
                        $sql_query = $conexao->query($query) or die("Falha!" . $conexao->error);

                        $quantidade = $sql_query->num_rows;

                        for ($i = 1; $i <= $quantidade; $i++) {
                            $card = $sql_query->fetch_assoc();

                            echo "<div class='form-group'><input class='radio-card".$i."' name='formPayment' id='cardcredit' type='radio' value='".$card['id_card']."' onclick='selectPaymentCard".$i."()'><img id='card-credit-img".$i."' src='image/card credit.png'></div><style>.radio-card".$i."{appearance: none;border: 2px solid #7a58bf;width: 295px;height: 58px;border-radius: 15px;display: flex;align-items: center;justify-content: left;cursor: pointer;margin-left: 0px;}.radio-card".$i.":hover{background: #f1f0f0;}.radio-card".$i.":checked{appearance: none;background: #58bf67;border: 2px solid #58bf67;}.radio-card".$i.":checked:hover{background: #429b50;}.radio-card".$i.":before{content: '".substr_replace($card['id_numberCard'], ' **** **** ', 4, 11)."';cursor: pointer;font-size: 13pt;font-weight: 600;color: #7a58bf; margin-left: 67px;}.radio-card".$i.":checked:before{content: '".substr_replace($card['id_numberCard'], ' **** **** ', 4, 11)."';color: #ffffff;}</style>";
                        }
                        ?>
                        <div class="form-group">
                            <input class="radio-bol" name="formPayment" id="bol" type="radio" value="boleto" onclick="selectPaymentBoleto()">
                            <img id="boleto-img" src="../image/boleto.png">
                        </div>
                        <div class="form-group">
                            <input class="radio-pix" name="formPayment" id="pix" type="radio" value="pix" onclick="selectPaymentPix()">
                            <img id="pix-img" src="../image/pix.png">
                        </div>    
                    </div>
                    <input id="pagar" type="submit" value="Continuar">
                </form>
           
        </div>


    </main>

</div>
<script src="../js/pagamentoTime.js" type="text/javascript"></script>
<?php

    if(isset($_POST['formPayment'])){
        
        $_SESSION['cartao'] = $_POST['formPayment'];

        if($_SESSION['cartao'] == 'boleto'){
            echo '<script> 
    
            var url = new URLSearchParams(window.location.search);
        
            window.location.replace(url + \'finalizarPedidoBoleto.php\'); 
            
            </script>';

            echo "isso é um boleto";
        }
        if($_SESSION['cartao'] == 'pix'){
            echo '<script> 
    
            var url = new URLSearchParams(window.location.search);
        
            window.location.replace(url + \'finalizarPedidoPix.php\'); 
            
            </script>';
        }
        if(is_numeric($_SESSION['cartao']) == true ){

            $_SESSION['cardNumber'] = $card['id_numberCard'];
            echo '<script> 
    
            var url = new URLSearchParams(window.location.search);
        
            window.location.replace(url + \'resumoPagamento.php\'); 
            
            </script>';
        }
    }
    else{

    }

?>
</body>
</html>