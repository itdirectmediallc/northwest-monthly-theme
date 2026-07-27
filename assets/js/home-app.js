(function () {
    'use strict';

    var body = document.body;
    var button = document.getElementById('nwmt-enter-app');
    var menu = document.getElementById('nwmt-app-menu');
    var timer = null;

    function enterApp() {
        if (body.classList.contains('nwmt-app-ready')) {
            return;
        }

        body.classList.add('nwmt-app-ready');

        window.setTimeout(function () {
            if (menu) {
                menu.focus({
                    preventScroll: true
                });
            }
        }, 500);
    }

    timer = window.setTimeout(enterApp, 3000);

    if (button) {
        button.addEventListener('click', function () {
            window.clearTimeout(timer);
            enterApp();
        });
    }
}());