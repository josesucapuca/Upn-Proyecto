$("#cadena").keypress(function (e) {
    if (e.which === 13) {
        alert();
        RemoverFilas();
    }
});
function RemoverFilas() {
    var t = $("#dt_basic").DataTable();
    var a = t.rows().data();
    var e = a.rows().count();
    var i = 0;
    while (i < e) {
        t.row(':eq(0)').remove().draw(false);
        i++;
    }
}

function ListarHiminario() {
    RemoverFilas();
    $.ajax({
        type: "POST",
        url: '../Controlador/Himinario.php',
        data: {opc: "ListarHiminarioByCadena", c: $("#cadena").val()},
        success: function (response)
        {
            var t = $('#tablaHiminario').DataTable();
            var jsonData = JSON.parse(response);
            for (var i = 0; i < jsonData.length; i++) {
                t.row.add([
                    "<a><strong> Himno N° " + jsonData[i].Nu_Himno + " :" + jsonData[i].No_Himno + "</strong></a>",
                    (jsonData[i].Cont_Himno).substr(1, 20),
                    '<button class="btn btn-outline btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-music"></i> Audio</button>',
                    '<button class="btn btn-outline btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-film"></i> Video</button>'
                ]).draw(false);
            }
        }
    });
}