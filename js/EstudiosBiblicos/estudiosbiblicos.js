$(document).ready(function () {
    $("ul#estudios li a").click(function (e) {
        e.preventDefault();

        $("#estu").attr("src", $(this).attr("href"));
    });
    estudiosppt();

});

function estudiosppt() {
    $("ul#estudiosppt li a").click(function (e) {
        e.preventDefault();

        $("#estuppt").attr("src", $(this).attr("href"));
    });
}

