function ListarParticipantesEB(id) {
    $.ajax({
        type: "POST",
        url: '../Controlador/EstudioBiblico.php',
        data: {opc: "ListarParticipantes", id: id},
        success: function (response)
        {
            var jsonData = JSON.parse(response);

            if (jsonData.length > 0) {
                var por;
                html = "";
                html += '<div class="col-sm-12" style="background: white">';
                html2 = "";
                for (var i = 0; i < jsonData.length; i++) {
                    html += '<div class="row" style="border-top: solid 1px #9e9c9c;border-bottom: solid 1px #9e9c9c;display: flex;align-items: center;">',
                            html += '<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="display: flex;align-items: center;min-height: 60px;">',
                            html += '<div><strong>' + jsonData[i].Nombre + '</strong></div>',
                            por = (jsonData[i].PD * 100) / jsonData[i].PT;
                    html += '</div>',
                            html += '<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-bottom: 10px"> ',
                            html += '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;padding-top: 20px;">',
                            html += '<div class="easy-pie-chart txt-color-blue easyPieChart" data-percent="' + por + '" data-pie-size="50">',
                            html += '<span class="percent percent-sign txt-color-greenLight font-xs "></span>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>';
                }
                html += '</div>';
                $("#ListaPart").empty();
                $("#ListaPart").append(html);
            } else {
                html = '<div class="col-sm-12" style="background: white">';
                html += '<div class="row" style="border-top: solid 1px #9e9c9c;border-bottom: solid 1px #9e9c9c;display: flex;align-items: center;">';
                html += '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex;align-items: center;min-height: 60px;">';
                html += '<div><strong> Nombre Musica</strong></div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                $("#ListaPart").empty();
                $("#ListaPart").append(html);
            }
        }
    });
     var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
                _gaq.push(['_trackPageview']);

                (function () {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();
}
