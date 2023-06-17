// NOTIFICAÇÃO . . . . . . . . . . . 

function telaNotificacao() {
    var navPrimaria = document.getElementById('nav-primaria');
    var navNotif = document.getElementById('nav-modo-notificacao');

    navPrimaria.classList.remove('nav-primaria');
    navPrimaria.classList.add('nav-primaria-close');
    
    navNotif.classList.remove('nav-modo-notificacao-close');
    navNotif.classList.add('nav-modo-notificacao');
}
function voltarNotif() {
    var navPrimaria = document.getElementById('nav-primaria');
    var navNotif = document.getElementById('nav-modo-notificacao');

    navPrimaria.classList.remove('nav-primaria-close');
    navPrimaria.classList.add('nav-primaria');

    navNotif.classList.remove('nav-modo-notificacao');
    navNotif.classList.add('nav-modo-notificacao-close');
}


// VALIDAÇÃO DE FORMULARIO . . . . . . .

function validarInputNumberCard(){ // NUMBER CARD
    var valNumberCard= document.getElementById('alert-number-card');
  
    valNumberCard.classList.remove('correct');
    valNumberCard.classList.add('alert');
}
function validarInputNameCard(){ // NAME CARD
    var valNameCard = document.getElementById('alert-name-card');
  
    valNameCard.classList.remove('correct');
    valNameCard.classList.add('alert');
}
  function validarInputDateExpiryCard(){ // DATE EXPIRY
    var valExpiryCard = document.getElementById('alert-expiry-card');
  
    valExpiryCard.classList.remove('correct');
    valExpiryCard.classList.add('alert');
  }
  function validarInputCvcCard(){ // CVC
    var valCVC = document.getElementById('alert-cvc');
  
    valCVC.classList.remove('correct');
    valCVC.classList.add('alert');
  }

