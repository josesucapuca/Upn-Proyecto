LLenarLibro();
$("#seLibro").change(function () {
    ListaCapitulos($("#seLibro").val());

});
$("#seCapitulo").change(function () {
    ListaCapitulos($("#seLibro").val());
 $("#cabecera").empty();
            $("#cabecera").append("<strong>"+$("#seLibro").text()+" "+$("#seCapitulo").select().text()+"</strong>");
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
function ListaVersiculos(idCapitulo) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Biblia.php',
        data: {opc: "ListarVersiculo", idC: idCapitulo},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            html1 = "";
            html1 += "<strong>"+$("#seLibro").text()+" "+$("#seCapitulo").text()+"</strong>";
            for (var i = 0; i < jsonData.length; i++) {
                
                html1 += '<option value="' + jsonData[i].id_Capitulo + '">CAPITULO ' + jsonData[i].No_Capitulo + '</option>';
            }
            $("#seCapitulo").empty();
            $("#seCapitulo").append(html1);
        }
    });
}