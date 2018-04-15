/*$(function () {
    //console.log($("#graphic"));
    var leng = $("#graphic ul li img").length -1 ;
    var objLi = $("#graphic li");
    //var now = 0;
    //var next = 1;

    $("#pagetop").click(function () {
        $('body,html').animate({scrollTop: 0}, 500);
        return false;
    });
    // objLi.eq(0).show();
    /!*
    function slide(stop, speed) {
        setInterval(function () {
            objLi.eq(now).fadeOut(speed);
            objLi.eq(next).fadeIn(speed);
            if (next > leng) {
                now = next;
                next = 0;
            } else {
                now = next;
                next = now + 1;
            }
        }, stop + speed * 2);
    }
      *!/
    function slide2(stop, speed) {
        var i = 0;
        setInterval(function () {
            objLi.eq(i).fadeOut(speed);
            i++;
            if(i >= leng){
                i = 0;
            }
            objLi.eq(i).fadeIn(speed);
        }, stop + speed * 2);
    }

    //l_stop=画像を静止させる時間　l_speed=アニメーションの速さ　（ミリ秒）
    var l_stop = 2000;
    var l_speed = 1000;

    objLi.eq(0).fadeIn(l_speed);
    //slide(画像を静止させる時間,アニメーションの速さ);
    slide2(l_stop, l_speed);



});*/

"use strict";

/*$(function () {
    var
        objLi = $("#graphic").find("li"),
        len = objLi.length,
        now = 0,
        fadeSpeed = 1000,
        slideSpeed = 4000;

    function slideShow() {
        objLi.eq(now).fadeOut(fadeSpeed);

        now = now + 1;
        if (now >= len) {
            now = 0;
        }
        objLi.eq(now).fadeIn(fadeSpeed);

    }

    objLi.eq(now).show();

    if (len > 1) {
        var setId = setInterval(slideShow, slideSpeed);
    }
});//DOMContentLoaded*/


(function ($) {
    $.fn.SlideShow = function (options) {
        // オプション設定（属性: 値）
        var defaults = {
            now: 0,
            fadeSpeed: 1000,
            slideSpeed: 4000
        };
        var settings = $.extend({}, defaults, options);

        return this.each(function () {
            // メイン処理
            var
                objLi = $(this).find("li"),
                len = objLi.length;

            objLi.hide();
            objLi.eq(settings.now).show();

            if (len > 1) {
                var setId = setInterval(slideShow, settings.slideSpeed, objLi,len);
                console.log(settings.slideSpeed)
            }

        });
        function slideShow(objLi,len) {
            objLi.eq(settings.now).fadeOut(settings.fadeSpeed);
            settings.now = settings.now + 1;
            if (settings.now >= len) {
                settings.now = 0;
            }
            objLi.eq(settings.now).fadeIn(settings.fadeSpeed);

        }
    };
}(jQuery));