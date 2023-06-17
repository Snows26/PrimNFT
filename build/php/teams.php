<?php

    session_start();
    include("../conexao.php");

    $id_user = $_SESSION['user_id'];

    $query_img = "SELECT id_img, nm_path FROM imagem WHERE id_img ='$id_user'"; 
    $sql_query_img = $conexao->query($query_img) or die("Falha!" . $conexao->error);

    $img = $sql_query_img->fetch_assoc();
    
    $id_img = $img['id_img'];

    if($id_user == $id_img){

    $_SESSION['path'] = $img['nm_path'];

    }
?>
<?php

    $query_user = "SELECT * FROM user WHERE id_user ='$id_user'"; 
    $sql_query_user = $conexao->query($query_user) or die("Falha!" . $conexao->error);

    $user = $sql_query_user->fetch_assoc();

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
    <link rel="stylesheet" href="../css/teams.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="../library/iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>
    <script src="../js/teams.js" type="text/javascript"></script>
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
                    <li><img src="../image/Group.png">Perfil</li>
                    <a id="link-time" href="teams.php"><li><img src="../image/shield.png">Times</li></a>
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
    <?php
        if($user['pf_tipo'] == 1){

            echo "<style>
            
            #inscritos{
                display: block;
            }
            </style>";
        }
        else{
            echo "<style>
            
            #criar-time{
                display: block;
            }
            </style>";
        }
    ?>
    <div id="criar-time">
        <h1>Seu time</h1>
        <p>Todo o seu layout de time</p>
        <p id="nada">Nenhum time foi criado</p>
        <a href="../createTeam/criarTime.php" id="button-time-criar"> Criar time </a>
    </div>
    <div id="inscritos">
        <h1>Suas inscrições</h1>
        <p>Times onde voce esta inscrito, espere a confirmação</p>
        <p id="nada">Nenhum time em analise</p>
    <?php
        
        if(isset($_SESSION['analise_iniciada'])){

            unset($_SESSION['analise_iniciada']);

            echo '
            <script> inscricaoCompleta() </script>'
            ;
        }
        ?>
        <table id="tbody-tabela" class="tbody-inscrito">
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
        <?php 
        
        $query_insc = "SELECT * FROM inscrito WHERE id_user = '$id_user'";
        $sql_query_insc = $conexao->query($query_insc) or die("Falha!" . $conexao->error);
    
        $quantidadeInsc = $sql_query_insc->num_rows;


        if($quantidadeInsc >= 1){
        echo '<style>
                #nada{
                    display: none;
                }
                .tbody-inscrito{
                    display: table;
                }
            </style>';
            

        for ($i = 1; $i <= $quantidadeInsc; $i++) {

            $insc= $sql_query_insc->fetch_assoc();

            $id_insc_team = $insc['id_team'];
        ?>    
        <?php

            $query_logo = "SELECT * FROM logo WHERE id_time = '$id_insc_team'"; 
            $sql_query_logo = $conexao->query($query_logo) or die("Falha!" . $conexao->error);
        
            $logo = $sql_query_logo->fetch_assoc();

            $query_team = "SELECT * FROM teams WHERE id_time = '$id_insc_team ' "; 
            $sql_query = $conexao->query($query_team) or die("Falha!" . $conexao->error);
        ?>
        <?php
            $team = $sql_query->fetch_assoc();

            echo "<tr>
            <td><img src='" .$logo['nm_pathLogo']. "'></td>
            <td>" .$team['nm_nameTeam']. "</td>
            <td>" .$team['jg_jogo']. "</td>
            <td>0/" .$team['nj_numeroJogadores']. "</td>
            <td>" .$team['mt_meta']. "</td>
            <td>" .$team['dt_dataLimite']. "</td>
            <td><button id='button-analise'>Analise</button></td>
          </tr>";


        }
    }

        ?>
            </tbody>
        </table>
    </div>



        <h1 id="times-disp">Times disponiveis</h1>
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
            <?php
                
                $idUser = $_SESSION['user_id'];

                $query_team = "SELECT * FROM teams "; 
                $sql_query = $conexao->query($query_team) or die("Falha!" . $conexao->error);

                $quantidade = $sql_query->num_rows;

                for ($i = 1; $i <= $quantidade; $i++) {
                    $team = $sql_query->fetch_assoc();

                    $id_time = $team['id_time'];

                    $query_logo = "SELECT * FROM logo WHERE id_time = ' $id_time'"; 
                    $sql_query_logo = $conexao->query($query_logo) or die("Falha!" . $conexao->error);

                    ?>
                    <?php

                    $logo = $sql_query_logo->fetch_assoc();

                    echo "<tr>
                            <td><img src='" .$logo['nm_pathLogo']. "'></td>
                            <td>" .$team['nm_nameTeam']. "</td>
                            <td>" .$team['jg_jogo']. "</td>
                            <td>0/" .$team['nj_numeroJogadores']. "</td>
                            <td>" .$team['mt_meta']. "</td>
                            <td>" .$team['dt_dataLimite']. "</td>
                            <td><a href='../displayTeam/displayTime.php?id=".$team['id_time']."'><button id='button-ver'>Ver</button></a></td>
                          </tr>";
                }

                ?>
            </tbody>
        </table>
</div>
</body>
</html>