$(document).ready(function(){

	$("article p").hide();


    $("button").click(function(){

        $(this).prev().toggle(600);
        

    });

});