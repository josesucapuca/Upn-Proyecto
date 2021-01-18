LLenarLibro();
$("#seLibro").change(function () {

    if ($("#seLibro").val() !== "" && $("#seLibro").val() !== "") {
        ListaCapitulos($("#seLibro").val());
    } else {
        html1 = '<li><span class="label label-info" style="text-transform: uppercase;"><i class="fa fa-lg fa-plus-circle"></i> SELECCIONAR LIBRO Y CAPITULO...</span></li>';
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
    $("#Licap").find('>i').removeClass().addClass('fa fa-lg fa-check');
    if ($(".VM").css("display") === "none") {
        $("#Licap").find('i').removeClass().addClass('fa fa-lg fa-plus-circle');
        $(".VM").show(300);
    } else {
        $("#Licap").find('i').removeClass().addClass('fa fa-lg fa-minus-circle');   
        $(".VM").hide(300);
    }
});
function cambiar(i) {
    if (i === "1") {
        $("#Licap").find('i').removeClass().addClass('fa fa-lg fa-plus-circle');
    } else if (i === "2") {
        $("#Licap").find('i').removeClass().addClass('fa fa-lg fa-minus-circle');
    }
}
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
                if (jsonData[i].Testamento === "A") {
                    html1 += '<option value="' + jsonData[i].id_Libro + '">' + jsonData[i].No_Libro + '</option>';
                } else if (jsonData[i].Testamento === "N") {
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
</i> Versiculo ' + jsonData[i].No_Versiculo + '</span><ul><li >';
                if(jsonData[i].id_Persona === ""){
                    html1 += '<a> ' + jsonData[i].Con_Versiculo + '</a><BR>';
                }else{
                    html1 += '<a> <mark>' + jsonData[i].Con_Versiculo + '</mark></a><BR>';
                }
                
                if (jsonData[i].id_Persona === "") {
                    html1 += ' <button onclick="IngresarComentario(' + jsonData[i].id_Versiculo + ',' + $("#id_P").val() + ',\'\',\'i\')" class="btn btn-labeled btn-success stbut"> Marcar</button>';
                }
                if (jsonData[i].Anotacion === "" && jsonData[i].id_Persona === "") {
                    html1 += ' <button onclick="LlenarComentario(' + jsonData[i].id_Versiculo + ',' + $("#id_P").val() + ',\'i\')" class="btn btn-labeled btn-warning stbut" > Agregar Anotacion</button>';
                } else if (jsonData[i].Anotacion === "" && jsonData[i].id_Persona !== "") {
                    html1 += ' <button onclick="LlenarComentario(' + jsonData[i].id_Versiculo + ',' + $("#id_P").val() + ',\'m\')" class="btn btn-labeled btn-warning stbut" > Agregar Anotacion</button>';
                } else if (jsonData[i].Anotacion !== "" && jsonData[i].id_Persona !== "") {
                    html1 += ' <button onclick="LlenarComentario(' + jsonData[i].id_Versiculo + ',' + $("#id_P").val() + ',\'m\')" class="btn btn-labeled btn-primary stbut" > Modificar Anotacion</button>';
                } else if (jsonData[i].Anotacion === "" && jsonData[i].id_Persona === "") {
                    html1 += ' <button onclick="LlenarComentario(' + jsonData[i].id_Versiculo + ',' + $("#id_P").val() + ',\'m\')" class="btn btn-labeled btn-warning stbut" > Agregar Anotacion</button>';
                } else if (jsonData[i].Anotacion === "" && jsonData[i].id_Persona !== "") {
                    html1 += ' <button onclick="LlenarComentario(' + jsonData[i].id_Versiculo + ',' + $("#id_P").val() + ',\'m\')" class="btn btn-labeled btn-warning stbut" > Agregar Anotacion</button>';
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
function LlenarComentario(id_VerFav, id_p, opci) {
    $.ajax({
        type: "POST",
        url: '../Controlador/VersiculoFavortio.php',
        data: {opc: "ListarVF", idVf: id_VerFav, id_Per: id_p},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            var operacion = "";
            if (opci === "i") {
                operacion = "Ingresar";
            } else if (opci === "m") {
                operacion = "Modificar";
            }
            if (jsonData[0].id_Versiculo_Favorito === "0") {
                $.SmartMessageBox({
                    title: operacion + " Comentario",
                    content: "max 150 caracteres",
                    buttons: "[Aceptar][Cancelar]",
                    input: "textarea",
                    inputValue: "",
                    placeholder: "Ingresar un Comentario"
                }, function (ButtonPress) {
                    if (ButtonPress === "Aceptar") {
                        IngresarComentario(id_VerFav, id_p, $("#txtarea1").val(), opci);
                    }
                    if (ButtonPress === "Cancelar") {
                        return 0;
                    }
                });
            } else {
                $.SmartMessageBox({
                    title: operacion + " Comentario",
                    content: "max 150 caracteres",
                    buttons: "[Aceptar][Cancelar]",
                    input: "textarea",
                    inputValue: jsonData[0].Anotacion,
                    placeholder: "Ingresar un Comentario"
                }, function (ButtonPress) {
                    if (ButtonPress === "Aceptar") {
                        IngresarComentario(id_VerFav, id_p, $("#txtarea1").val(), opci);
                    }
                    if (ButtonPress === "Cancelar") {
                        return 0;
                    }
                });
            }
        }

    });
}

function IngresarComentario(id_V, id_p, Comentario, opci) {
    $.ajax({
        type: "POST",
        url: '../Controlador/VersiculoFavortio.php',
        data: {opc: "IngresarVF", idV: id_V, id_Per: id_p, Com: Comentario, opci: opci},
        success: function (response)
        {
            if (response==="true") {
                $.smallBox({
                    title: "Versiculo Favorito Resgistrado!",
                    content: "<i class='fa fa-check'></i> Registrado Correctamente...<i></i>",
                    color: "#659265",
                    iconSmall: "fa fa-check fa-2x fadeInRight animated",
                    timeout: 4000
                });
                $('#frameVer').attr("src", $('#frameVer').attr("src"));
                ListaVersiculos($("#seCapitulo").val(), id_p);
                ListaVersiculosFavoritos();
            } else {
                $.smallBox({
                    title: "Error al Registrar Versiculo Favorito",
                    content: "<i class='fa fa-times'></i> Error al Registrar...<i></i>",
                    color: "#C46A69",
                    iconSmall: "fa fa-times fa-2x fadeInRight animated",
                    timeout: 4000
                });
            }
        }

    });
}
function editar(i){
    $("#Anotacion"+i).prop('disabled', false);
}
function guardar(i){
    $.ajax({
        type: "POST",
        url: '../Controlador/VersiculoFavortio.php',
        data: {opc: "ModificarAnotacion", a:i , b: $("#Anotacion"+i).val()},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            var operacion = "";
            if (opci === "i") {
                operacion = "Ingresar";
            } else if (opci === "m") {
                operacion = "Modificar";
            }
            if (jsonData[0].id_Versiculo_Favorito === "0") {
                $.SmartMessageBox({
                    title: operacion + " Comentario",
                    content: "max 150 caracteres",
                    buttons: "[Aceptar][Cancelar]",
                    input: "textarea",
                    inputValue: "",
                    placeholder: "Ingresar un Comentario"
                }, function (ButtonPress) {
                    if (ButtonPress === "Aceptar") {
                        IngresarComentario(id_VerFav, id_p, $("#txtarea1").val(), opci);
                    }
                    if (ButtonPress === "Cancelar") {
                        return 0;
                    }
                });
            } else {
                $.SmartMessageBox({
                    title: operacion + " Comentario",
                    content: "max 150 caracteres",
                    buttons: "[Aceptar][Cancelar]",
                    input: "textarea",
                    inputValue: jsonData[0].Anotacion,
                    placeholder: "Ingresar un Comentario"
                }, function (ButtonPress) {
                    if (ButtonPress === "Aceptar") {
                        IngresarComentario(id_VerFav, id_p, $("#txtarea1").val(), opci);
                    }
                    if (ButtonPress === "Cancelar") {
                        return 0;
                    }
                });
            }
        }

    });
}