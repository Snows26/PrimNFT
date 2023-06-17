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

// SELECT PAYMENT . . . . . . . . . 

function selectPaymentCard1() {
    var imgCard1 = document.getElementById('card-credit-img1');
    var imgCard2 = document.getElementById('card-credit-img2');
    var imgBoleto = document.getElementById('boleto-img');
    var imgPix = document.getElementById('pix-img');

    imgCard1.setAttribute('src', 'image/check.png');
    imgBoleto.setAttribute('src', 'image/boleto.png');
    imgPix.setAttribute('src', 'image/pix.png');
    imgCard2.setAttribute('src', 'image/card credit.png');
}
function selectPaymentCard2() {
    var imgCard1 = document.getElementById('card-credit-img1');
    var imgCard2 = document.getElementById('card-credit-img2');
    var imgBoleto = document.getElementById('boleto-img');
    var imgPix = document.getElementById('pix-img');

    imgCard2.setAttribute('src', 'image/check.png');
    imgBoleto.setAttribute('src', 'image/boleto.png');
    imgPix.setAttribute('src', 'image/pix.png');
    imgCard1.setAttribute('src', 'image/card credit.png');
}
function selectPaymentBoleto() {
    var imgCard1 = document.getElementById('card-credit-img1');
    var imgCard2 = document.getElementById('card-credit-img2');
    var imgBoleto = document.getElementById('boleto-img');
    var imgPix = document.getElementById('pix-img');

    imgBoleto.setAttribute('src', 'image/check.png');
    imgPix.setAttribute('src', 'image/pix.png');
    imgCard1.setAttribute('src', 'image/card credit.png');
    imgCard2.setAttribute('src', 'image/card credit.png');
}
function selectPaymentPix() {
    var imgCard1 = document.getElementById('card-credit-img1');
    var imgCard2 = document.getElementById('card-credit-img2');
    var imgBoleto = document.getElementById('boleto-img');
    var imgPix = document.getElementById('pix-img');

    imgPix.setAttribute('src', 'image/check.png');
    imgBoleto.setAttribute('src', 'image/boleto.png');
    imgCard1.setAttribute('src', 'image/card credit.png');
    imgCard2.setAttribute('src', 'image/card credit.png');
}
