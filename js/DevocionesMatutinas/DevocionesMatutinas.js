ListaDevocionales();
function ListaDevocionales() {
    $.ajax({
        type: "POST",
        url: '../Controlador/DevocionMatutina.php',
        data: {opc: "ListarDevocionMatutina"},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            html1 = "";
            if (jsonData.length > 0) {
                for (var i = 0; i < jsonData.length; i++) {
                    html1 += '<div class="panel panel-default">' +
                            '<div class="panel-heading">' +
                            '<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-'+i+'" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>'+jsonData[i].No_Matutina+'</a></h4>' +
                            '</div>' +
                            '<div id="collapse-'+i+'" class="panel-collapse collapse ">' +
                            '<div class="panel-body">' +
                            '<a href="'+jsonData[i].URL_Matutina+'" target="myframe">'+jsonData[i].No_Matutina+' <i class="fa fa-file"></i></a>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                }
            } else {
                html1 += '<div class="panel panel-default">' +
                        '<div class="panel-heading">' +
                        '<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-1" class="collapsed"> <i class="fa fa-fw fa-exclamation txt-color-red"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Devocion Matutina Para Jovenes </a></h4>' +
                        '</div>' +
                        '</div>';
            }
            $("#matutina").empty();
            $("#matutina").append(html1);
        }
    });
}