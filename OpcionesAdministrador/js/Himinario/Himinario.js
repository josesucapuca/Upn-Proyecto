var editor = CKEDITOR.replace('ckeditor', {
    allowedContent: {
        'b i ul ol big small': true,
        'h1 h2 h3 p blockquote li': {
            styles: 'text-align'
        },
        a: {attributes: '!href,target'},
        img: {
            attributes: '!src,alt',
            styles: 'width,height',
            classes: 'left,right'
        }
    }
});
var editor2 = CKEDITOR.replace('ckeditor2', {
    allowedContent: {
        'b i ul ol big small': true,
        'h1 h2 h3 p blockquote li': {
            styles: 'text-align'
        },
        a: {attributes: '!href,target'},
        img: {
            attributes: '!src,alt',
            styles: 'width,height',
            classes: 'left,right'
        }
    }
});

editor.on('change', function (evt) {
    // getData() returns CKEditor's HTML content.
    console.log('Total bytes: ' + evt.editor.getData().length);
    console.log(editor.getData());
});
$("#btn_Modificar").on("click", function () {
    ValidarCamposModificar();
});
$("#btn_Ingresar").on("click", function () {
    ValidarCampos();
});
function ValidarCampos() {
    var Nombre = $("#Nombre").val()
    var Numero = $("#Numero").val()
    var Himinario = $("#Himinario").val()
    var Contenido = editor.getData();
    var URL = $("#URL").val()
    if (Nombre !== "" && Numero !== "" && Himinario !== "" && Contenido !== "") {
        IngresarHimno(Nombre, Numero, Himinario, Contenido, URL);
    } else {
        if (Nombre !== "") {
            $("#Nombre").addClass("is-valid").removeClass("is-invalid");
        } else {
            $("#Nombre").addClass("is-invalid").removeClass("is-valid");
        }
        if (Numero !== "") {
            $("#Numero").addClass("is-valid").removeClass("is-invalid");
        } else {
            $("#Numero").addClass("is-invalid").removeClass("is-valid");
        }
        if (Himinario !== "") {
            $("#Himinario").addClass("is-valid").removeClass("is-invalid");
        } else {
            $("#Himinario").addClass("is-invalid").removeClass("is-valid");
        }
        if (Contenido !== "") {
            $("#Contenido").addClass("is-valid").removeClass("is-invalid");
            $("#contValid").css("display", "block");
            $("#contInValid").css("display", "none");
        } else {
            $("#Contenido").addClass("is-invalid").removeClass("is-valid");
            $("#contInValid").css("display", "block");
            $("#contValid").css("display", "none");
        }
        if (URL !== "") {
            $("#URL").addClass("is-valid").removeClass("is-invalid");
        } else {
            $("#URL").addClass("is-invalid").removeClass("is-valid");
        }
    }
}
function ValidarCamposModificar() {
    var Nombre = $("#NombreM").val()
    var Numero = $("#NumeroM").val()
    var Himinario = $("#HiminarioModificar").val()
    /*document.getElementById("editor1").value = "<p>Some other editor data.</p>"; 
     CKEDITOR.replace("ckeditor2");*/
    var Contenido = editor2.getData();
    var URL = $("#URLM").val()
    if (Nombre !== "" && Numero !== "" && Himinario !== "" && Contenido !== "") {
        ModificarHimno($("#id_Himno").val(),Nombre, Numero, Himinario, Contenido, URL);
    } else {
        if (Nombre !== "") {
            $("#NombreM").addClass("is-valid").removeClass("is-invalid");
        } else {
            $("#NombreM").addClass("is-invalid").removeClass("is-valid");
        }
        if (Numero !== "") {
            $("#NumeroM").addClass("is-valid").removeClass("is-invalid");
        } else {
            $("#NumeroM").addClass("is-invalid").removeClass("is-valid");
        }
        if (Himinario !== "") {
            $("#HiminarioModificar").addClass("is-valid").removeClass("is-invalid");
        } else {
            $("#HiminarioModificar").addClass("is-invalid").removeClass("is-valid");
        }
        if (Contenido !== "") {
            $("#Contenido").addClass("is-valid").removeClass("is-invalid");
            $("#contValid").css("display", "block");
            $("#contInValid").css("display", "none");
        } else {
            $("#Contenido").addClass("is-invalid").removeClass("is-valid");
            $("#contInValid").css("display", "block");
            $("#contValid").css("display", "none");
        }
        if (URL !== "") {
            $("#URLM").addClass("is-valid").removeClass("is-invalid");
        } else {
            $("#URLM").addClass("is-invalid").removeClass("is-valid");
        }
    }
}
function IngresarHimno(n1, n2, n3, n4, n5) {
    RemoverFilas();
    $.ajax({
        type: "POST",
        url: '../Controlador/AdminHiminario.php',
        data: {opc: "IngresarHimno", n1: n1, n2: n2, n3: n3, n4: n4, n5: n5},
        success: function (response)
        {
            if (response) {
                location.href = 'RegistrarHiminario.php';
            }
        }
    });
}
function ModificarHimno(n1, n2, n3, n4, n5, n6) {
    RemoverFilas();
    $.ajax({
        type: "POST",
        url: '../Controlador/AdminHiminario.php',
        data: {opc: "ModificarHimno", n1: n1, n2: n2, n3: n3, n4: n4, n5: n5,n6: n6},
        success: function (response)
        {
            if (response) {
                location.href = 'RegistrarHiminario.php';
            }
        }
    });
}
function LLenarHimno(id) {
    $.ajax({
        type: "POST",
        url: '../Controlador/AdminHiminario.php',
        data: {opc: "LlenarHimno", id: id},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            for (var i = 0; i < jsonData.length; i++) {
                $("#id_Himno").val(jsonData[i].id_Himno)
                $("#NombreM").val(jsonData[i].No_Himno)
                $("#NumeroM").val(jsonData[i].Nu_Himno)
                $("#HiminarioModificar option[value='"+jsonData[i].id_Himinario+"']").attr("selected",true);
                editor2.setData(jsonData[i].Cont_Himno)
                $("#URLM").val(jsonData[i].URL_Himno)
            }
        }
    });
}
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
