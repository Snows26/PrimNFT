function menu() {
    var menu = document.getElementById('menu');
    menu.classList.remove('side-nav-close');
    menu.classList.add('side-nav');
    }

    function menuClose() {
        var menu = document.getElementById('menu');
        menu.classList.remove('side-nav');
        menu.classList.add('side-nav-close');

        }