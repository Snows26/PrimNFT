<?php
    session_start();
    include("../conexao.php");
?>
<?php 
    $id = $_GET['id'];

    $query_team_esp = "SELECT * FROM teams WHERE id_time = '$id'";
    $sql_query = $conexao->query($query_team_esp) or die("Falha!" . $conexao->error);

    $team = $sql_query->fetch_assoc();
?>
<?php
    $query_logo = "SELECT * FROM logo WHERE id_time = '$id'";
    $sql_query = $conexao->query($query_logo) or die("Falha!" . $conexao->error);

    $logo = $sql_query->fetch_assoc();
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
    <link rel="stylesheet" href="../css/displayTime.css">
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
        <div id="topo-times">
            <img id="img-time" src="<?php echo $logo['nm_pathLogo'];?>">
                <h1 id="title-time"><?php echo $team['nm_nameTeam'];?></h1>
                <p id="title-descricao">Descrição:</p>
                <p id="descricao"><?php echo $team['dc_descricao'];?></p>
        </div>
        <div id="infomacoes">
            <div id="info">
                <h2 id="title-info">Detalhes do time:</h2>
                <div id="line-ct"></div>
            </div>
            <div id="jogo-type">
                <p id="title-jogo">Jogo:</p>
                <p id="content-jogo"><?php echo $team['jg_jogo'];?></p>
            </div>

            <div id="number-player">
                <p id="title-number-player">Numero de Jogadores:</p>
                <p id="content-number-player">0/<?php echo $team['nj_numeroJogadores'];?></p>
            </div>

            <div id="data-campanha">
                <p id="title-data-campanha">Data de expiração:</p>
                <p id="content-data-campanha"><?php echo $team['dt_dataLimite'];?></p>
            </div>
            
            <div id="meta">
                <p id="title-meta">Meta:</p>
                <p id="content-meta"><?php echo $team['mt_meta'];?></p>
            </div>

            <div id="experiencia">
                <p id="title-experiencia">Nivel de conhecimento:</p>
                <p id="content-experiencia"><?php echo $team['ex_experiencia'];?></p>
            </div>

            <div id="contrato">
                <p id="title-contrato">Contrato:</p>
                <a href="sla.php" id="content-contrato">Visualizar</a>
            </div>
        </div>
        <?php

    $id_user = $_SESSION['user_id'];

    $query_insc = "SELECT * FROM inscrito WHERE id_user = '$id_user' AND id_team = '$id'";
    $sql_query_insc = $conexao->query($query_insc) or die("Falha!" . $conexao->error);

    $quantidadeInsc = $sql_query_insc->num_rows;

    ?>
    <?php

    $query_user = "SELECT * FROM user WHERE id_user = '$id_user'";
    $sql_query_user = $conexao->query($query_user) or die("Falha!" . $conexao->error);

    $user = $sql_query_user->fetch_assoc();

        if($user['pf_tipo'] == 1){
            if($quantidadeInsc == 1){
               echo '<style>
                    #analise{
                     display: block;   
                    }
                    #continuar{
                     display: none;
                    }
               </style>';
            }
        }
        else{
            echo '<style>
            #analise{
             display: none;   
            }
            #continuar{
             display: none;
            }
       </style>';
        }
        ?>
    <form id="form" action="" method="post">
        <input class="analise" type="submit" id="analise" value="Analise">
        <input class="continue" type="submit" id="continuar" name="ingressar" value="Ingressar">
    </form>
    </main>

    <script src="../js/displayTime.js" type="text/javascript"></script>
    <?php

        if(isset($_POST['ingressar'])){

 
            $status = "analise";
            
            $sqlInscrito = "INSERT INTO inscrito(id_user, id_team, st_status) 
            VALUES ('$id_user', '$id', '$status')";


            mysqli_query($conexao, $sqlInscrito);
                
            mysqli_close($conexao);

            $_SESSION['analise_iniciada'] = 1;
            
            echo '<script> 
        
            window.location.href = "../teams/teams.php"; 
            
            </script>';
        }

    ?>
</body>
</html>