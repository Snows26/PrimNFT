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
    <link rel="stylesheet" href="../css/criarTime.css">
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
                <p id="nome-perfil">Olá,<br><b id="nickname"><?php echo $_SESSION['nickname'];?></b></p>
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
        <input placeholder="Pesquisar" type="text" id="input-pesquisa-header">
    </header>

    <main class="main">

        <h1>Crie o seu time</h1>
        <div id="line-ct"></div>
        <p id="sub-title">Crie sua Escola NFT, preencha todos os campos abaixo</p>

        <form method="post" action="" id="form" enctype="multipart/form-data" >
            <p class="title-input">Insira sua logo</p>
            <label class="input-image"><img src="../image/insertImage.png" id="img">
            <input type="file" name="image" id="image" accept="image/png,image/jpeg">
            </label>
            <sub class="correct" id="alert-img"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>



            <p class="title-input">Nome do time</p>
            <input type="text" name="nomeTeam" class="input-geral" placeholder="Insira o nome do seu time"><br>
            <sub class="correct" id="alert-name-team"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>


            <p class="title-input">Descrição do time</p>
            <textarea name="description" placeholder="Escreva uma definição para sua escola..." maxlength="500"></textarea><br>
            <sub class="correct" id="alert-description"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>


            <p class="title-input">Jogo</p>
            <div id="select-div">
                <select name="game">                    
                    <option value="Escolha" disabled selected>Escolha</option>
                    <option value="Axie Infinity">Axie Infinity</option>
                    <option value="Thetan Arena" disabled>Thetan Arena</option>
                    <option value="Bomb Crypto" disabled>Bomb Crypto</option>
                </select>
                <img src="../image/triangulo.png">
            </div>
            <sub class="correct" id="alert-game"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>


            <p class="title-input">Numero de jogadores</p>
            <input type="number" name="numberPlayer" class="input-geral" placeholder="Insira o numero de vagas"><br>
            <sub class="correct" id="alert-number-player"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>


            <p class="title-input">Expiração de campanha</p>
            <input type="date" name="expiry" class="input-geral"><br>
            <sub class="correct" id="alert-expiry"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>


            <p class="title-input">Meta</p>
            <input type="text" name="goal" class="input-geral" placeholder="Insira a meta da sua Escola"><br>
            <sub class="correct" id="alert-goal"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>

            <p class="title-input">Nivel de experiencia</p>
                <label class="container" style="margin-top: 10px;">Experiente
                    <input type="radio" id="select2" name="experience" value="Experiente">
                    <span class="checkmark"></span>
                </label>
              
                <label class="container">Iniciante
                    <input type="radio" id="select2" name="experience" value="Iniciante">
                    <span class="checkmark"></span>
                </label>
                <sub class="correct" id="alert-experience"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>

            <p class="title-input">Insira seu contrato</p>
                <label class="input-file">
                    <input type="file" name="file" id="image-file" accept="application/docx,application/pdf">
                        <div class="pack-image">
                            <img src="../image/contract.png" id="img-file">
                            <sub>Insert Image</sub>
                        </div>
                </label>
            <sub class="correct" id="alert-file"><img class="img-alert" src="../image/57077.png">Campo vazio</sub><br>

            <input type="radio" name="experience" value="0" style="display: none;" checked>

            

                    
            <input id="button-continue" type="submit" class="continue" value="Continuar">
        </form>
    </main>
</div>
    <script src="../js/criarTime.js" type="text/javascript"></script>
<?php 

// CONEXÃO BANCO DE DADOS________
include("../conexao.php");

if(isset($_POST['nomeTeam'])){

    // DADOS FORMULARIO TEAMS_________
    $imgLogo = $_FILES['image'];
    $nomeTeam = $_POST['nomeTeam'];
    $description = $_POST['description'];
    $game = $_POST['game'];
    $numberPlayer = $_POST['numberPlayer'];
    $expiry = $_POST['expiry'];
    $goal  = $_POST['goal'];
    $experienceLevel = $_POST['experience']; 
    $file = $_FILES['file'];

    $_SESSION['goal'] = $goal;
    $_SESSION['numberPlayer'] = $numberPlayer;

    // DADOS IMG _________________

    $pasta = '../bd/imagemLogo/';
    $nomeImgLogo = $imgLogo['name'];
    $novoNomeImg = uniqid();
    $extensaoImg = strtolower(pathinfo($nomeImgLogo, PATHINFO_EXTENSION));
      
    // DADOS DOC _________________
    $nomeDoc = $file['name'];
    $extensaoDoc = strtolower(pathinfo($nomeDoc, PATHINFO_EXTENSION));


    // ARRAY DE ERROS_______________
    $errosTeam = [];

        if($extensaoImg != 'png' && $extensaoImg != 'jpg'){
            $errosTeam[] = "<script> validarInputImg() </script>";
        }

        if(empty($nomeTeam)){
            $errosTeam[] = "<script> validarInputNameTeam() </script>";
        }

        if(empty($description)){
            $errosTeam[] = "<script> validarInputDescription() </script>";
        }

        if(empty($game)){
            $errosTeam[] = "<script> validarInputGame() </script>";
        }

        if(empty($numberPlayer)) {
            $errosTeam[] = "<script> validarInputNumberPlayer() </script>";
        }

        if(empty($expiry)){
            $errosTeam[] = "<script> validarInputExpiry() </script>";
        }

        if(empty($goal)){
            $errosTeam[] = "<script> validarInputGoal() </script>";
        }

        if($experienceLevel == "0"){
            $errosTeam[] = "<script> validarInputExperience() </script>";
        }

        if($extensaoDoc != 'docx' && $extensaoDoc != 'pdf'){
            $errosTeam[] = "<script> validarInputFile() </script>";
        }
        
        if(!empty($errosTeam)){
            $errosTeam[] = "<script> erro() </script>";
            foreach($errosTeam as $erro){
            echo $erro;
            }
        }
        else{

            $sqlTeam = "INSERT INTO teams(id_user, nm_nameTeam, dc_descricao, jg_jogo, nj_numeroJogadores, dt_dataLimite, mt_meta, ex_experiencia) 
            VALUES ('$idUser', '$nomeTeam', '$description', '$game', '$numberPlayer', '$expiry', '$goal', '$experienceLevel')";
    
    
            mysqli_query($conexao, $sqlTeam);//_______________________Fazendo a pasta com permissão
                
            $team_id = mysqli_insert_id($conexao);//_______________Pegando ultimo id 
    
            $diretorio = "../bd/imagemLogo/$team_id/";//___________________Fazendo caminho com id LOGO
    
            mkdir($diretorio, 0755);//________________________________Fazendo a pasta com permissão LOGO
    
            $pathImg =  $diretorio . $novoNomeImg . "." . $extensaoImg;//___Fazendo o caminho LOGO
    
            $subindo = move_uploaded_file($imgLogo['tmp_name'] , $pathImg);//_Colocando o arquivo na pasta LOGO
    
    
            $sqlLogo = "INSERT INTO logo(id_time, nm_logo, nm_pathLogo) 
            VALUES ('$team_id', '$nomeImgLogo', '$pathImg')";
    
            mysqli_query($conexao, $sqlLogo);
    
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