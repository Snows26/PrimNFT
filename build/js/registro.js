  // VALIDAÇÃO DE SENHA . . . . .

function validarSizeAndLetter(){
	var senha = document.getElementById('password').value;
  var size = document.getElementById('verificacao-size');
  var letter = document.getElementById('verificacao-letter');

	if(senha.length < 8){
		size.style.color = "red";
	}
    if(senha.length > 7){
		size.style.color = "green";
	}

  if(senha = senha.match(/[A-Z]+/)){
		letter.style.color = "green";
  }
  else{
		letter.style.color = "red";
	}
}

function validarChar(){
	var senha = document.getElementById('password').value;
  var char = document.getElementById('verificacao-char');

  if(senha = senha.match(/[@#$%&]+/)){
		char.style.color = "green";
    
  }
  else{
		char.style.color = "red";
  }
}

function validarNumber(){
	var senha = document.getElementById('password').value;
  var number = document.getElementById('verificacao-number');

  if(senha = senha.match(/[0-9]+/)){
		number.style.color = "green";
  }
  else{
		number.style.color = "red";
	}
}



// SELECT CHECKBOX . . . . . .
function selectAll(){
  var select3 = document.getElementById('select3');

  if(select3 = true){
    var select2 = document.getElementById('select2');
    var select1 = document.getElementById('select1');

   select1.checked = true;
   select2.checked = true;
  }
}



// VISUZALIZAR SENHA . . . . . . 
function togglePassword() {
  var verSenha = document.getElementById('password');
  var imgVerSenha = document.getElementById('img-ver-senha');

    if (password.type == "password") {
      verSenha.type = "text";
      imgVerSenha.src = "image/olho (1).png";
    } else {
      verSenha.type = "password";
      imgVerSenha.src = "image/olho.png";
    }
  
}


// PREVIEW IMG . . . . . . . . . 
  let inputFile = document.querySelector('#image');

  inputFile.addEventListener('change', function(e){
    let inputTarget = e.target;
    let file = inputTarget.files[0];
    let img = document.getElementById('img');

    if(file){

      let reader = new FileReader();

      reader.addEventListener('load', function(e) {
        
        let thisReader = e.target;
        img.src = thisReader.result;

      })

      reader.readAsDataURL(file);

    }
})


// VALIDAÇÃO DE FORMULARIO . . . . . . .

function validarInputImg(){ // IMAGEM
  var valImg = document.getElementById('alert-img');

  valImg.classList.remove('correct');
  valImg.classList.add('alert');
}

function validarInputName(){ // NAME
  var valName = document.getElementById('alert-name');

  valName.classList.remove('correct');
  valName.classList.add('alert');
}

function validarInputUserName(){ // USERNAME
  var valUser = document.getElementById('alert-username');

  valUser.classList.remove('correct');
  valUser.classList.add('alert');
}

function validarInputBirth(){ // BIRTH
  var valBirth = document.getElementById('alert-birth');

  valBirth.classList.remove('correct');
  valBirth.classList.add('alert');
}

function validarInputPhone(){ // PHONE
  var valPhone = document.getElementById('alert-phone');

  valPhone.classList.remove('correct');
  valPhone.classList.add('alert');
}

function validarInputEmail(){ // EMAIL
  var valEmail = document.getElementById('alert-email');

  valEmail.classList.remove('correct');
  valEmail.classList.add('alert');
}

function validarInputPassword(){ // PASSWORD - input
  var valPw = document.getElementById('alert-pw');
  var imgVerSenha = document.getElementById('img-ver-senha');

  valPw.classList.remove('correct');
  valPw.classList.add('alert');

  imgVerSenha.classList.remove('img-ver-senha');
  imgVerSenha.classList.add('img-ver-senha-fail');
}

function validarInputPasswordAgain(){ // PASSWORD AGAIN - input
  var valPwg = document.getElementById('alert-pwg');

  valPwg.classList.remove('correct');
  valPwg.classList.add('alert');
}

function validarInputPasswordForca(){ // PASSWORD - forca . . . . . . 
  var valPwf = document.getElementById('alert-pwf'); 

  valPwf.classList.remove('correct');
  valPwf.classList.add('alert');
}

function validarInputPasswordAgain(){ // PASSWORD AGAIN - input
  var valPwg = document.getElementById('alert-pwg');

  valPwg.classList.remove('correct');
  valPwg.classList.add('alert');
}

function validarInputPasswordAgainComparacao(){ // PASSWORD AGAIN - comparacao . . . . .
  var valPwgc = document.getElementById('alert-pwgc');

  valPwgc.classList.remove('correct');
  valPwgc.classList.add('alert');

}

function validarInputPerfil(){ // PERFIL . . . . .
  var valPerfil = document.getElementById('alert-perfil');

  valPerfil.classList.remove('correct');
  valPerfil.classList.add('alert');

}

function validarInputCheckbox(){ // CHECKBOX
  iziToast.error({
    position: 'bottomCenter',
    progressBarColor: 'black',
    zindex: '6',
    title: 'Não é possivel se cadastrar!',
    message: 'As politicas da nossa empresa não foram aceitas.',
})
}

function erro(){
  iziToast.error({
    position: 'bottomCenter',
    progressBarColor: 'black',
    zindex: '6',
    title: 'Não foi possivel se cadastrar',
    message: 'Revise os dados!',
})
}
