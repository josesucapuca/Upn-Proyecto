var c = $("#cadena");
var d = $("#id_Per");
$("#cadena").keypress(function (e) {
    if (e.which === 13) {
        LMBC(c.val(), d.val());
    }
});
$("#BuscarMusica").on("click", function () {
    LMBC(c.val(), d.val());
});
function LMBC(a, p) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Musica.php',
        data: {opc: "LMBC", c: a, i: p},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            var html = "";
            if (jsonData.length > 0) {
                for (var i = 0; i < jsonData.length; i++) {
                    html += '<div class="row" style="border-top: solid 1px #9e9c9c;border-bottom: solid 1px #9e9c9c;padding-bottom: 10px;">';
                    html += '<div id="tithim" class="col-xs-12 col-sm-12 col-md-3 col-lg-2" style="display: flex;align-items: center;min-height: 60px;">';
                    html += '<div><strong  style="font-size:16px">' + jsonData[i].No_Musica + ' </strong></div>';
                    html += '</div>';
                    html += '<div class="col-xs-12 col-sm-12 col-md-5 col-lg-6"> ';
                    html += '<div>';
                    html += '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="height: auto">';
                    html += '<h3 style="text-align: center;margin: 5px;font-size: 14px;font-family: ">Descripción</h3> ';
                    html += '<div style="text-align: center">' + jsonData[i].Des_Musica + '</div>';
                    html += '<div style="text-align: center"> Por <strong>' + jsonData[i].persona + '</strong></div>';
                    html += '</div>';
                    if (jsonData[i].id_Musicas_Anotadas !== "") {
                        html += '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="text-align: center;color: #0081c2;font-size: 25px;align-items: center;">';
                        html += '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h3 style="text-align: center;margin: 5px;font-size: 14px;font-family: ">Opción</h3></div><br>';
                        html += '<div>';
                        html += '<a onclick="CMGM(' + jsonData[i].id_Musicas_Anotadas + ')" class="btn btn-labeled btn-danger"> <span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Me Gusta (' + jsonData[i].count + ')</a>';
                        html += '</div>';
                        html += '</div>';
                    } else {
                        html += '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="text-align: center;color: #0081c2;font-size: 25px;align-items: center;">';
                        html += '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h3 style="text-align: center;margin: 5px;font-size: 14px;font-family: ">Opción</h3></div><br>';
                        html += '<div>';
                        html += '<a onclick="MGM(' + jsonData[i].id_Musica + ',' + p + ')" class="btn btn-labeled btn-success"> <span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Me Gusta (' + jsonData[i].count + ')</a>';
                        html += '</div>';
                        html += '</div>';
                    }
                    html += '</div>';
                    html += '</div>';
                    html += '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding-bottom: 20px">';
                    html += '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;padding-top: 20px;">';
                    html += '<button onclick="MostrarMusica(' + jsonData[i].id_Musica + ')" class="btn btn-info" data-toggle="modal" data-target="#myModal">Sonido <i class="fa fa-music"></i></button>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                }
            } else {
                html += '<div id="tithim" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex;align-items: center;min-height: 60px;justify-content: center">';
                html += '<div><strong  style="font-size:16px">No hay Musicas Ingresadas</strong></div>';
                html += '</div>';
            }
            $("#Musica").empty();
            $("#Musica").append(html);
        }
    });
}
function MGM(id, id_P) {
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
            IMGM(id, id_P, Value);
        }
    });
}
function IMGM(i, pr, C) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Musica.php',
        data: {opc: "IMGM", i: i, p: pr, c: C},
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
                LMBC(c.val(), d.val());
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
function CMGM(id) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Musica.php',
        data: {opc: "CMGM", i: id},
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
                LMBC(c.val(), d.val());
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
















