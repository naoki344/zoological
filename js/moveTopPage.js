;(function ( $ ) {
    $.fn.moveTopPage = function( options ) {
        // オプション設定（属性: 値）
        var defaults = {
            scrollSpeed: 500
        };
        var settings = $.extend( {}, defaults, options );

        return this.each(function() {
            // メイン処理
            var
                event = "ontouchend" in window ? "touchend" : "click",
                elmMove = $(this);
                //console.log(settings);
            elmMove.on(event, function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, settings.scrollSpeed);
                //return false;
            });
        });
    };
}( jQuery ));