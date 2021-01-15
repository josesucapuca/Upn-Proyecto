var c = $("#cadena");
var d = $("#id_Per");
$("#cadena").keypress(function (e) {
    if (e.which === 13) {
        LHMBC(c.val(), d.val());
    }

});
$("#BuscarHimno").on("click", function () {
    LHMBC(c.val(), d.val());
});
function LHMBC(a, p) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Himinario.php',
        data: {opc: "ListarHiminarioByCadena", c: a, i: p},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            var html = "";
            for (var i = 0; i < jsonData.length; i++) {
                html += '<div class="row" style="border-top: solid 1px #9e9c9c;border-bottom: solid 1px #9e9c9c;padding-bottom: 10px;">';
                html += '<div id="tithim" class="col-xs-12 col-sm-12 col-md-3 col-lg-2" style="display: flex;align-items: center;min-height: 60px;">';
                html += '<div><strong  style="font-size:16px">N° ' + jsonData[i].Nu_Himno + ' ' + jsonData[i].No_Himno + '</strong></div>';
                html += '</div>';
                html += '<div class="col-xs-12 col-sm-12 col-md-5 col-lg-6"> ';
                html += '<style>';
                html += '.minHeight' + i + '.collapse' + i + ' { clear: both; height: 0; display: block; min-height: 80px; overflow: hidden;}';
                html += '.minHeight' + i + '.collapsing' + i + ' {clear: both;min-height: 80px;}';
                html += '.minHeight' + i + '.collapse' + i + '.in {height: auto;}';
                html += '.collapse {display: block; visibility: visible;}';
                html += '</style>';
                html += '<div>';
                html += '<div class="minHeight' + i + ' collapse' + i + '" id="collapseExample' + i + '" style="height: 50px">';
                html += '<h3 style="text-align: center;margin: 5px">Letra</h3> ' + jsonData[i].Cont_Himno + '</div>';
                html += '<button id="masTexto" class="btn btn-link"  style="border-top:1px solid #bdc3c7;width:100%;" title="Ver más" data-toggle="collapse" data-target="#collapseExample' + i + '" aria-expanded="false" aria-controls="collapseExample">';
                html += '<i class="fa fa-chevron-down" id="mas">Expande</i>';
                html += '</button>';
                html += '</div>';
                if (jsonData[i].id_Himno_Favorito !== "") {
                    html += '<div style="text-align: center;color: grey;font-size: 25px;"><a onclick="CMG(' + jsonData[i].id_Himno_Favorito + ')" class="btn btn-labeled btn-danger"> <span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Me Gusta</a></div>';
                } else {
                    html += '<div style="text-align: center;color: #0081c2;font-size: 25px;"><a onclick="MG(' + jsonData[i].id_Himno + ',' + d.val() + ')" class="btn btn-labeled btn-success"> <span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Me Gusta</a></div>';
                }
                html += '</div>';
                html += '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding-bottom: 20px"> ';
                html += '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;padding-top: 20px;">';
                html += '<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Sonido <i class="fa fa-music"></i></button>';
                html += '<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Video <i class="fa fa-music"></i></button>';
                html += '<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Video <i class="fa fa-music"></i></button></div>';
                html += '</div>';
                html += '</div>';
            }
            $("#Himnos").empty();
            $("#Himnos").append(html);
        }
    });
}
function MG(id, id_P) {
    $.SmartMessageBox({
        title: "Ingresar Me Gusta",
        content: "Por Favor Ingresar una Categoria",
        buttons: "[Cancelar][Acceptar]",
        input: "text",
        placeholder: "Ingrese Categoria",
        inputValue: ""
    }, function (ButtonPress, Value) {
        if (ButtonPress === "Cancelar") {

        } else {
            IMG(id, id_P, Value);
        }
    });
}
function IMG(i, pr, C) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Himinario.php',
        data: {opc: "IHFP", i: i, p: pr, c: C},
        success: function (response)
        {

            if (response === "true") {
                $.smallBox({
                    title: "Himno Favorito Ingresado!",
                    content: "<i class='fa fa-check'></i> Ingresado Correctamente...<i></i>",
                    color: "#659265",
                    iconSmall: "fa fa-check fa-2x fadeInRight animated",
                    timeout: 2000
                });
                LHMBC(c.val(), d.val());
            } else {
                $.smallBox({
                    title: "Error Al Ingresar Himno Favorito",
                    content: "<i class='fa fa-times'></i> Error al Ingresar...<i></i>",
                    color: "#C46A69",
                    iconSmall: "fa fa-times fa-2x fadeInRight animated",
                    timeout: 2000
                });
            }
        }
    });
}
function CMG(id) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Himinario.php',
        data: {opc: "CMGH", i: id},
        success: function (response)
        {
            if (response === "true") {
                $.smallBox({
                    title: "Me Gusta Cancelado!",
                    content: "<i class='fa fa-check'></i> Cancelado Correctamente...<i></i>",
                    color: "#659265",
                    iconSmall: "fa fa-check fa-2x fadeInRight animated",
                    timeout: 2000
                });
                LHMBC(c.val(), d.val());
            } else {
                $.smallBox({
                    title: "Error Al Cancelar Me Gusta",
                    content: "<i class='fa fa-times'></i> Error al Cancelar Me Gusta...<i></i>",
                    color: "#C46A69",
                    iconSmall: "fa fa-times fa-2x fadeInRight animated",
                    timeout: 2000
                });
            }
        }
    });
}
function MVH(id) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Himinario.php',
        data: {opc: "LHBI", i: id},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            var html = "";
            for (var i = 0; i < jsonData.length; i++) {
                html += '<iframe src="' + jsonData[i].URL_Himno + '" style="width: 100%;min-height: 300px;"></iframe>';
            }
            $("#VideoHim").empty();
            $("#VideoHim").append(html);
        }
    });
}
function MLH(id) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Himinario.php',
        data: {opc: "LHBI", i: id},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            for (var i = 0; i < jsonData.length; i++) {
                $(".TitLe").empty();
                $(".TitLe").append('N° ' + jsonData[i].Nu_Himno + " " + jsonData[i].No_Himno);
                $("#Cont").empty();
                $("#Cont").append(jsonData[i].Cont_Himno);
            }
        }
    });
}
function LimpiarVideo() {
    $("#VideoHim").empty();
}
