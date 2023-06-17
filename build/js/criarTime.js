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

function validarInputNameTeam(){ // NAME TEAM
  var valNameTeam = document.getElementById('alert-name-team');

  valNameTeam.classList.remove('correct');
  valNameTeam.classList.add('alert');
}

function validarInputDescription(){ // DESCRIPTION
  var valDescription = document.getElementById('alert-description');

  valDescription.classList.remove('correct');
  valDescription.classList.add('alert');
}

function validarInputGame(){ // GAME
  var valGame = document.getElementById('alert-game');

  valGame.classList.remove('correct');
  valGame.classList.add('alert');
}

function validarInputNumberPlayer(){ // NUMBER PLAYER
  var valNumberPlayer = document.getElementById('alert-number-player');

  valNumberPlayer.classList.remove('correct');
  valNumberPlayer.classList.add('alert');
}

function validarInputExpiry(){ // EXPIRY
  var valExpiry = document.getElementById('alert-expiry');

  valExpiry.classList.remove('correct');
  valExpiry.classList.add('alert');
}

function validarInputGoal(){ // GOAL
  var valGoal = document.getElementById('alert-goal');

  valGoal.classList.remove('correct');
  valGoal.classList.add('alert');
}

function validarInputExperience(){ // EXPERIENCE
  var valExperience = document.getElementById('alert-experience');

  valExperience.classList.remove('correct');
  valExperience.classList.add('alert');
}

function validarInputFile(){ // FILE
  var valFile = document.getElementById('alert-file');

  valFile.classList.remove('correct');
  valFile.classList.add('alert');
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