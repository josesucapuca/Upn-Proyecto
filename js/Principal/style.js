
$(document).ready(function ()
{
    $("#panHeadEsp").on("click",function () {
        $(".pan-bod-esPer").show("slow");
        $(".imgEs").attr("src","../images/iconos/icon-Biblia-personal-hover.png");
    });

    $("#texto2").blur(function () {
        $(".pan-bod-esPer").show("slow");
    });

});