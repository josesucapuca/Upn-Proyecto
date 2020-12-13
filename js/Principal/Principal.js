function ValidarLider(id){
    $.ajax({
        type: "POST",
        url: '../Controlador/Principal.php',
        data: {opc: "ValidarLider",id:id},
        success: function (response)
        {
            /*var jsonData = JSON.parse(response);
            if(jsonData[0].tipo==="distrito"){
                $(".LiReporte2").show();
                $("#Reporte2").attr("href","ReporteDistrito.php?id="+jsonData[0].id);
                $(".LiReporte").show();
                $("#Reporte").attr("href","ReporteDistrito.php?id="+jsonData[0].id);
            }else if(jsonData[0].tipo==="mision"){
                $(".LiReporte2").show();
                $("#Reporte2").attr("href","ReporteMision.php?id="+jsonData[0].id);
                $(".LiReporte").show();
                $("#Reporte").attr("href","ReporteMision.php?id="+jsonData[0].id);
            }else if(jsonData[0].tipo==="union"){
                $(".LiReporte").show();
                $(".LiReporte2").show();
                $("#Reporte2").attr("href","ReporteUnion.php?id="+jsonData[0].id);
                $("#Reporte").attr("href","ReporteUnion.php?id="+jsonData[0].id);
                
            }else if(jsonData[0].tipo==="division"){
                $(".LiReporte2").show();
                $("#Reporte2").attr("href","ReporteDivision.php?id="+jsonData[0].id);
                $(".LiReporte").show();
                $("#Reporte").attr("href","ReporteDivision.php?id="+jsonData[0].id);
            }else if(jsonData[0].tipo==="SN"){
                $(".LiReporte").hide();
                $(".LiReporte2").hide();
            }*/
        }
    });
}