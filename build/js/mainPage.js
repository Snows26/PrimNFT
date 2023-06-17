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