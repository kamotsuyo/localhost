(function () {
    "use strict";


    function init() {
        console.log('DOMContentLoaded');
        fuck(callback_func);

    }
    document.addEventListener('DOMContentLoaded', init, false);

    document.addEventListener('readystatechange', function (ev) {
        console.log(document.readyState);
    }, false);

    function fuck(callback) {
        console.log(callback());
    }

    function callback_func() {
        return 'hoge';
    }

}());
