<?php
    include("conexao.php");
    session_start();

    $id_user = $_SESSION['user_id'];

    $query_img = "SELECT id_img, nm_path FROM imagem WHERE id_img ='$id_user'"; 
    $sql_query_img = $conexao->query($query_img) or die("Falha!" . $conexao->error);

    $img = $sql_query_img->fetch_assoc();
    
    $id_img = $img['id_img'];

    if($id_user == $id_img){

    $_SESSION['path'] = $img['nm_path'];

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../library/iziToast-master/dist/css/iziToast.min.css">
    <link rel="stylesheet" href="../../node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="../css/mainPage.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="../library/iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>
    <script src="../js/mainPage.js" type="text/javascript"></script>
    <title>PRIM | Login</title>
</head>
<body>
<div id="all">
    <nav class="nav">
    <img src="../image/Vector.png">
        <!-- Nav primaria-->
        <div id="nav-primaria" class="nav-primaria">
            <div id="dashboard-perfil">
                <img id="img-perfil" src="<?php echo $_SESSION['path'];?>">
                <p id="nome-perfil">Hello,<br><b><?php echo $_SESSION['nickname'];?></b></p>
                <div id="line-nome"></div>
                <button id="bell" onclick="telaNotificacao()"><img src="../image/bell.png"><img></button>
                <div id="points-all"><img src="../image/star-coins.png"><p>3247</p><sub>P</sub></div>
            </div>
            <div id="nav-opc">
                <ul>
                    <li><img src="../image/Group.png">Perfil</li>
                    <li><img src="../image/shield.png">Times</li>
                    <li><img src="../image/text_file.png">Contratos</li>
                    <li><img src="../image/card.png">Carteira</li>
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
        <input placeholder="Pesquisar" type="text">
    </header>
    <main class="main">
        <h1>Times</h1>
        <p>Escolha seu time e se inscreva para tentar uma vaga</p>
        <table id="tbody-tabela">
            <thead>
                <tr>
                    <td></td>
                    <td>Times</td>
                    <td>Jogos</td>
                    <td>Participantes</td>
                    <td>Meta</td>
                    <td>Encerramento</td>
                </tr>
            </thead>
            <tbody id="body-teams">
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>

                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
                <tr>
                    <td><img src="../image/logo_time.png"></td>
                    <td>Aguias do Concorvado</td>
                    <td>Axie Infinity</td>
                    <td>1/10</td>
                    <td>4500 SLP</td>
                    <td>22/12/2022</td>
                </tr>
            </tbody>
        </table>
</div>
</body>
</html>