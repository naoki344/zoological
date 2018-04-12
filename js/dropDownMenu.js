
;(function ( $ ) {
    $.fn.dropDownMenu = function( options ) {
        // オプション設定（属性: 値）
        var defaults = {
            dropSpeed: 1000
        };
        var settings = $.extend({}, defaults, options);

        return this.each(function () {
            // メイン処理
            var firstObjLi = $(this).find("li"),
                secondObjLi = $(this).find("ul").find("li");

            secondObjLi.hide();
           // firstObjLi.hover(function(){
            firstObjLi.on("mouseover",function(){
                secondObjLi.not(":animated").slideToggle(settings.dropSpeed);
                //secondObjLi.slideToggle(settings.dropSpeed);
            });

            // $(this).find("li").hover(function(){
            //    // alert("aa");
            //    // $("ul:not(:animated)", this).slideDown();
            // }, function(){
            //    // $("ul.child",this).slideUp();
            // });


        });
    };
}( jQuery ));