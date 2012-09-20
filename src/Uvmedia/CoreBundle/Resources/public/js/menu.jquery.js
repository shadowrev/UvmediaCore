

window.onload = function() {
    $("#menu ul li").hover(function() {
        //$(this).children("ul.submenu").css({"display" : "block"});
        $(this).children("ul.submenu").show();
    }, function() {
        //$(this).children("ul.submenu").css({"display" : "none"});
        $(this).children("ul.submenu").hide();
    });
}