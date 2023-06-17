<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../library/iziToast-master/dist/css/iziToast.min.css">
    <script src="../library/iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>
    <title>PRIM | Register</title>
</head>
<body>
  <div id="elipse1"></div>
  <div id="elipse2"></div>
  <div id="elipse3"></div>
  <div id="elipse4"></div>
    <main>
        <form enctype="multipart/form-data" method="post" action="" id="form">

          <a href="../index/index.html"><img class="logo" src="../image/Ativo 1.png"></a>
            <h2 class="title">Registro</h2>
            <p class="sub-title">Se registre conosco para desfrutar de todas as ferramentas do nosso site.</p>

            <p class="name-image">Insira uma imagem</p>
            <label class="input-image"><img src="../image/download.png" id="img">
            <input type="file" name="image" id="image" accept="image/png,image/jpeg">
            </label>
            <sub class="correct" id="alert-img"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>


            <p class="name-name">Nome</p>
            <input type="text" class="input-name" name="nome" id="nome" placeholder="Insira seu nome completo" value="<?php 
                                                                                                                    if(isset($_POST['nome'])){
                                                                                                                      $_SESSION['nome'] = $_POST['nome']; 
                                                                                                                      echo $_SESSION['nome']; }
                                                                                                                  ?>">
            <sub class="correct" id="alert-name"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>


            <p class="name-username">Nickname</p>
            <input type="text" class="input-username" name="user" id="user" placeholder="Insira seu nome de usuario" value="<?php 
                                                                                                                        if(isset($_POST['user'])){
                                                                                                                          $_SESSION['user'] = $_POST['user']; 
                                                                                                                          echo $_SESSION['user']; }
                                                                                                                      ?>">
            <sub class="correct" id="alert-username"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>


            <p class="name-birth">Data de aniversario</p>
            <input type="date" class="input-birth" name="birth" id="birth" value="<?php 
                                                                                    if(isset($_POST['birth'])){
                                                                                      $_SESSION['birth'] = $_POST['birth']; 
                                                                                      echo $_SESSION['birth'];}
                                                                                  ?>">
            <sub class="correct" id="alert-birth"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>


            <p class="name-phone">Celular</p>
            <input type="number" class="input-phone" name="phone" id="phone" placeholder="Insira seu numero de celular" value="<?php 
                                                                                                                      if(isset($_POST['phone'])){
                                                                                                                        $_SESSION['phone'] = $_POST['phone']; 
                                                                                                                        echo $_SESSION['phone']; } 
                                                                                                                    ?>">
            <sub class="correct" id="alert-phone"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>


            <p class="name-email">Email</p>
            <input type="email" class="input-name" name="email" id="email" placeholder="Insira seu email" value="<?php 
                                                                                                                    if(isset($_POST['email'])){
                                                                                                                      $_SESSION['email'] = $_POST['email']; 
                                                                                                                      echo $_SESSION['email']; }
                                                                                                                  ?>">
            <sub class="correct" id="alert-email"><img class="img-alert" src="../image/57077.png">Campo vazio</sub>


            <p class="name-pw">Senha</p>
            <input type="password" class="input-pw" name="password" id="password" placeholder="Crie uma senha" onkeyup="validarSizeAndLetter() , validarChar() , validarNumber()">

            <label class="ver-senha">
              <button type="button" class="check-ver-senha" onclick="togglePassword()"></button>
              <img class="img-ver-senha" id="img-ver-senha" src="../image/olho (1).png">
            </label>
            <sub class="correct" id="alert-pw"><img class="img-alert" src="../image/57077.png">Campo vazio<br></sub><br>
            <sub class="correct" id="alert-pwf"><img class="img-alert" src="../image/57077.png">Senha fraca</sub>

            <sub><p class="verificacao-size" id="verificacao-size">● Minimo de 8 caracteres</p></sub>
            <sub><p class="verificacao-letter" id="verificacao-letter" >● Use letras maisuculas</p></sub>
            <sub><p class="verificacao-char" id="verificacao-char">● Use caracteres @#$%</p></sub>
            <sub><p class="verificacao-number" id="verificacao-number">● Use numeros 1234</p></sub>

            <p class="name-pwg">Repita a senha</p>
            <input type="password" class="input-pwg" name="passwordAgain" id="passwordAgain" placeholder="Repita a senha acima">
            <sub class="correct" id="alert-pwg"><img class="img-alert" src="../image/57077.png">Campo vazio</sub><br>
            <sub class="correct" id="alert-pwgc"><img class="img-alert" src="../image/57077.png">Senhas diferente</sub>


            <p class="name-perfil">Escolha seu perfil</p>
            <div id="escolha">
              <div class="form-group">
                <input class="radio-investidor" name="perfil" id="investidor" type="radio" value="1">
              </div>
              <div class="form-group">
                <input class="radio-jogador" name="perfil" id="jogador" type="radio" value="2">
              </div>  
            </div>
            <sub class="correct" id="alert-perfil"><img class="img-alert" src="../image/57077.png">Escolha</sub><br>


            <label class="container-pad">Li e estou de acordo com as <a id="link-pol">politicas de privacidade.</a>
                <input type="checkbox" id="select1" name="select1">
                <span class="checkmark"></span>
              </label>
              
              <label class="container">Aceito receber emails desta empresa.
                <input type="checkbox" id="select2" name="select2">
                <span class="checkmark"></span>
              </label>
              
              <label class="container">Concordo com tudo.
                <input type="checkbox" id="select3" name="select3" onclick="selectAll()">
                <span class="checkmark"></span>
              </label>
              


            <input type="submit" class="continue" value="Continuar">
        </form>
    </main>
    <script src="../js/registro.js"></script>
    <?php
  // CONEXÃO BANCO DE DADOS________
    include("../conexao.php");

  // DADOS FORMULARIO _________
  if(isset($_POST['nome'])){


  $img = $_FILES['image'];
  $nome = $_POST['nome'];
  $user = $_POST['user'];
  $birth = $_POST['birth'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordAgain = $_POST['passwordAgain'];
  $checkbox = $_POST['select1'] ?? null;
  $perfil = $_POST['perfil'] ?? null;

  // DADOS IMG _________________
  $pasta = '../bd/imagemPerfil/';
  $nomeImg = $img['name'];
  $novoNomeImg = uniqid();
  $extensao = strtolower(pathinfo($nomeImg, PATHINFO_EXTENSION));
  
  // VALIDAR SENHA ______________
  $validar = '/^(?=.*[0-9])(?=.*[@#$])(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d].\S{6,35}$/';
  $total = preg_match($validar, $password);

  // BANCO DE DADOS ______________
  $sqlUser = "INSERT INTO user(nm_name, nm_nickname, dt_birthday, ph_phone, em_email, ps_password, pf_tipo) 
              VALUES ('$nome', '$user', '$birth', '$phone', '$email', '$password', '$perfil')";

  // ARRAY DE ERROS_______________
  $erros = [];

  //SANITIZAR_____________________
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
  $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $birth = filter_input(INPUT_POST, 'birth', FILTER_SANITIZE_NUMBER_INT);


  if($extensao != 'jpg' && $extensao != 'png'){
    $erros[] = "<script> validarInputImg() </script>";
  }

  if(empty($nome)){
    $erros[] = "<script> validarInputName() </script>";
  }

  if(empty($user)){
    $erros[] = "<script> validarInputUserName() </script>";
  }

  if(empty($birth)) {
    $erros[] = "<script> validarInputBirth() </script>";
  }

  if(!$phone = filter_input(INPUT_POST, 'phone',
  FILTER_VALIDATE_INT)) {
    $erros[] = "<script> validarInputPhone() </script>";
  }

  if(!$email = filter_input(INPUT_POST, 'email',
  FILTER_VALIDATE_EMAIL)) {
    $erros[] = "<script> validarInputEmail() </script>";
  }
  
  if($total == 0 && !empty($password)){
    $erros[] = "<script> validarInputPasswordForca() </script>";
  }

  if(empty($password)){
    $erros[] = "<script> validarInputPassword() </script>";
  }

  if($password != $passwordAgain && !empty($password)){
    $erros[] = "<script> validarInputPasswordAgainComparacao() </script>";
  }

  if(empty($passwordAgain)){
    $erros[] = "<script> validarInputPasswordAgain() </script>";
  }

  if(!isset($checkbox)){
    $erros[] = "<script> validarInputCheckbox() </script>";
  }
  
  if(!isset($perfil)){
    $erros[] = "<script>  validarInputPerfil() </script>";
  }

  if(!empty($erros)){
    $erros[] = "<script> erro() </script>";
    foreach($erros as $erro){
      echo $erro;
    }
  }
  else{

    mysqli_query($conexao, $sqlUser);//_______________________Fazendo a pasta com permissão

    $usuario_id = mysqli_insert_id($conexao);//_______________Pegando ultimo id
    
    $diretorio = "../bd/imagemPerfil/$usuario_id/";//___________________Fazendo caminho comdid
    
    mkdir($diretorio, 0755);//________________________________Fazendo a pasta com permissão
    
    $path =  $diretorio . $novoNomeImg . "." . $extensao;//___Fazendo o caminho
    
    $subindo = move_uploaded_file($img["tmp_name"], $path);//_Colocando o arquivo na pasta
    
    $sqlImg = "INSERT INTO imagem(nm_img, nm_path) 
    VALUES ('$nomeImg', '$path')";
    
    mysqli_query($conexao, $sqlImg);
    
    mysqli_close($conexao);

    $_SESSION['verificarConcluido'] = 1;
    $_SESSION['comandConcluido'] = '<script> cadastroCompleto() </script>';
    
    echo '<script> 
    
    var url = new URLSearchParams(window.location.search);

    window.location.replace(url + \'login.php\'); 
    
    </script>';


  }

  }
?>
</body>
</html>