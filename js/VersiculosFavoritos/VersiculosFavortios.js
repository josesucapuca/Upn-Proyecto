ListaVersiculosFavoritos();
function ListaVersiculosFavoritos() {
    $.ajax({
        type: "POST",
        url: '../Controlador/VersiculoFavortio.php',
        data: {opc: "ListaVersiculoFavorito", p: $("#per").val()},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            html1 = "";
            if (jsonData.length > 0) {
                for (var i = 0; i < jsonData.length; i++) {
                    html1 += '<div class="panel panel-default">' +
                            '<div class="panel-heading">' +
                            '<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-' + i + '" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>' + jsonData[i].Busqueda + '</a></h4>' +
                            '</div>' +
                            '<div id="collapse-' + i + '" class="panel-collapse collapse ">' +
                            '<div class="panel-body">' +
                            '<blockquote>' +
                            '<p>' + jsonData[i].Con_Versiculo + '</p>';
                    
                    if (jsonData[i].Anotacion !== "") {
                        html1 += '<small id="Comen">' + jsonData[i].Anotacion + '</small>';
                    }
                    if (jsonData[i].Anotacion === "") {
                        html1 += '<small id="Comen">Sin Comentario</small>';
                    }

                    html1 += '<textarea class="form-control" id="txtcomen" style="display: none;"></textarea>' +
                            '</blockquote>' +
                            '<button class="btn btn-labeled btn-primary" style="align-items: center;justify-content: center;height: 20px;padding-top: 0px;"> Comentario</button>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                }
            } else {
                html1 += ' <div class="panel panel-default">' +
                        '<div class="panel-heading">' +
                        '<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#" class="collapsed"> <i class="fa fa-fw fa-exclamation txt-color-red"></i> No hay Versiculos Favoritos</a></h4>' +
                        '</div>' +
                        '</div>';
            }
            $("#verFav").empty();
            $("#verFav").append(html1);
        }
    });
}