window.onload = function () {

    scroll_effect();

    $(window).scroll(function () {
        scroll_effect();
    });

    function scroll_effect() {
        var element = document.getElementsByClassName('effect-fade');
        if (!element) return; // 要素がなかったら処理をキャンセル

        var showTiming = window.innerHeight > 768 ? 200 : 40; // 要素が出てくるタイミングはここで調整
        var scrollY = window.pageYOffset;
        var windowH = window.innerHeight;

        for (var i = 0; i < element.length; i++) {
            var elemClientRect = element[i].getBoundingClientRect(); var elemY = scrollY + elemClientRect.top; if (scrollY + windowH - showTiming > elemY) {
                element[i].classList.add('effect-scroll');
            }
        }
    }
};