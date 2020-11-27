LLenarLibro();
$("#seLibro").change(function () {
    
    if ($("#seLibro").val() !== "" && $("#seLibro").val() !== "") {
        ListaCapitulos($("#seLibro").val());
    } else {
        html1 = '<li><span class="label label-info"><i class="fa fa-lg fa-plus-circle"></i> SELECCIONAR LIBRO Y CAPITULO...</span></li>';
        html2 = '<strong>SELECCIONAR LIBRO Y CAPITULO ...</strong>';
        $("#versiculos").empty();
        $("#versiculos").append(html1);
        $("#cabecera").empty();
        $("#cabecera").append(html2);
        ListaCapitulos($("#seLibro").val());
    }
});
$("#seCapitulo").change(function () {
    if ($("#seLibro").val() !== "" && $("#seLibro").val() !== "") {
        ListaLibroxCapitulo($("#seCapitulo").val());
        ListaVersiculos($("#seCapitulo").val(), $("#id_P").val());
    } else {
        html1 = '<li><span class="label label-info"><i class="fa fa-lg fa-plus-circle"></i> SELECCIONAR LIBRO Y CAPITULO...</span></li>';
        $("#versiculos").empty();
        $("#versiculos").append(html1);
    }
});
$("#Licap").click(function () {
    if ($(".VM").css("display") === "none") {
        $(".VM").show(300);
    } else {
        $(".VM").hide(300);
    }
});
function LLenarLibro() {
    $.ajax({
        type: "POST",
        url: '../Controlador/Biblia.php',
        data: {opc: "ListarLibro"},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            html1 = "";
            html2 = "";
            for (var i = 0; i < jsonData.length; i++) {
                if (jsonData[i].Testamento === "1") {
                    html1 += '<option value="' + jsonData[i].id_Libro + '">' + jsonData[i].No_Libro + '</option>';
                } else if (jsonData[i].Testamento === "2") {
                    html2 += '<option value="' + jsonData[i].id_Libro + '">' + jsonData[i].No_Libro + '</option>';
                }
            }
            $("#AntTes").empty();
            $("#AntTes").append(html1);
            $("#NueTes").empty();
            $("#NueTes").append(html2);
        }
    });
}
function ListaCapitulos(idLibro) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Biblia.php',
        data: {opc: "ListarCapitulo", idL: idLibro},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            html1 = "";
            html1 += '<option value=""> SELECCIONE</option>';
            for (var i = 0; i < jsonData.length; i++) {
                html1 += '<option value="' + jsonData[i].id_Capitulo + '">CAPITULO ' + jsonData[i].No_Capitulo + '</option>';
            }
            $("#seCapitulo").empty();
            $("#seCapitulo").append(html1);

        }
    });
}
function ListaVersiculos(idCapitulo, id_p) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Biblia.php',
        data: {opc: "ListarVersiculo", idC: idCapitulo, idP: id_p},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            html1 = '';
            $("#versiculos").empty();
            for (var i = 0; i < jsonData.length; i++) {

                html1 += '<li class="VM"><span class="label label-info"><i class="fa fa-lg fa-plus-circle">\n\
</i> Versiculo ' + jsonData[i].No_Versiculo + '</span><ul><li><a> ' + jsonData[i].Con_Versiculo + '</a>';
                if (jsonData[i].id_persona === null) {
                    html1 += ' <button href="javascript:void(0);" class="btn btn-labeled btn-success stbut"> Marcar</button>';
                } else {
                    html1 += ' <button href="javascript:void(0);" class="btn btn-labeled btn-danger stbut"> Desmarcar</button>';
                }
                if (jsonData[i].Anotacion === null) {
                    html1 += ' <button href="javascript:void(0);" class="btn btn-labeled btn-warning stbut" > Agregar Anotacion</button>';
                } else {
                    html1 += ' <button href="javascript:void(0);" class="btn btn-labeled btn-primary stbut" > Modificar Anotacion</button>';
                }
                html1 += ' </li></ul></li>';
            }
            $("#versiculos").append(html1);
            $('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
            $('.tree > ul').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function () {
                var children = $(this).parent('li.parent_li').find(' > ul > li');
                if (children.is(':visible')) {
                    children.hide('fast');
                    $(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
                } else {
                    children.show('fast');
                    $(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
                }
            });
            $("#licab").removeClass("parent_li");

        }
    });
}
function ListaLibroxCapitulo(idCapitulo) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Biblia.php',
        data: {opc: "LibroxCapitulo", idC: idCapitulo},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            $("#cabecera").empty();
            $("#cabecera").append("<strong>" + jsonData[0].Busqueda + "</strong>");
            $("#Licap").empty();
            $("#Licap").append("<i class='fa fa-lg fa-book'></i> " + jsonData[0].Busqueda + "");
        }
    });
}