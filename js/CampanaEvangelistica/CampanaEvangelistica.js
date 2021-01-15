var Biblia = '0', Himinario = '0', Musica = '0', video = '0', BibliaR = '0', HiminarioR = '0', MusicaR = '0', videoR = '0', BibliaM = '0', HiminarioM = '0', MusicaM = '0', videoM = '0', BibliaRM = '0', HiminarioRM = '0', MusicaRM = '0', videoRM = '0';
Actualizardate();
ListarEstudioBiblico();
ListarEstudioBiblicoModificar();
$("#UrlVideoConferencia").keypress(function (e) {
    var regexp = /(http|https):\/\/meet.sangoma.com\/(\w+:{0,1}\w*@)?/;
    if (regexp.test($("#UrlVideoConferencia").val())) {
        $(".LU").removeClass("state-error").addClass("state-success");
    } else {
        $(".LU").removeClass("state-success").addClass("state-error");
    }
});
$("#AgregarCampana").on("click", function () {
    var validacion = ValidarFormulario();
    if (validacion === 1) {

    } else {
        ValidarCod_Camp(validacion);
    }
});
$("#ModificarCampana").on("click", function () {
    var validacion = ValidarFormularioModificar();
    if (validacion === 1) {
        ModificarCampana();
        ListarCampanas($("#id_Persona").val());
        $("#CancelModificarCampana").click();
    }
});
$("#ModificarReunionEstudio").on("click", function () {
    var validacion = ValidarFormularioEstudioModifcar();
    if (validacion === 1) {
        ModificarEstudio();
        ListarReunionesEstudio($("#id_Persona").val());
        $("#CancelarModificarReunionEstudio").click();
    }
});
$("#AgregarEstudioBiblico").on("click", function () {
    var validacion = ValidarFormularioEstudio();
    if (validacion === 1) {
        IngresarEstudioBiblico();
        ListarReunionesEstudio($("#id_Persona").val());
        $("#cancelIngresarEstudio").click();
        refreshSelectopcEB();
        refreshSelectPlatEB();
    }
});
$("#SuscribirteCampana").on("click", function () {
    SuscribiseCampana($("#id_Persona").val(), $("#Cod_Camp_Eva").val());
});

$("#CancelModificarCampana").on("click", function () {
    refreshSelectopcCE();
    refreshSelectPlatCE();
    LimpiarModificarCE();
});
$("#CancelarModificarReunionEstudio").on("click", function () {
    refreshSelectopcEB();
    refreshSelectPlatEB();
    LimpiarModificarEB();
});

$("#OpcVideo").change(function () {
    refreshSelectPlatCE();
    if ($("#OpcVideo").val() === "C") {
        $("#CampPLat").css("display", "block");
        $("#urlvi").css("display", "none");
        $("#UrlVideoConferencia").val("");
        $("#PlataformaVideoLLamada").removeAttr('disabled');
    } else if ($("#OpcVideo").val() === "S") {
        $("#CampPLat").css("display", "none");
        $("#urlvi").css("display", "none");
        $("#UrlVideoConferencia").val("");
        $("#PlataformaVideoLLamada").attr('disabled', 'disabled');
        $("#UrlVideoConferencia").attr('disabled', 'disabled');
    } else if ($("#OpcVideo").val() === "") {
        $("#CampPLat").css("display", "none");
        $("#urlvi").css("display", "none");
        $("#UrlVideoConferencia").val("");
        $("#PlataformaVideoLLamada").attr('disabled', 'disabled');
        $("#UrlVideoConferencia").attr('disabled', 'disabled');
    }
});
$("#OpcVideoReunion").change(function () {
    refreshSelectPlatEB();
    if ($("#OpcVideoReunion").val() === "C") {
        $("#CampPLatR").css("display", "block");
        $("#urlviR").css("display", "none");
        $("#UrlVideoConferenciaReunion").val("");
        $("#PlataformaVideoLLamadaReunion").removeAttr('disabled');
    } else if ($("#OpcVideoReunion").val() === "S") {
        $("#CampPLatR").css("display", "none");
        $("#urlviR").css("display", "none");
        $("#UrlVideoConferenciaReunion").val("");
        $("#PlataformaVideoLLamadaReunion").attr('disabled', 'disabled');
        $("#UrlVideoConferenciaReunion").attr('disabled', 'disabled');
    } else if ($("#OpcVideoReunion").val() === "") {
        $("#CampPLatR").css("display", "none");
        $("#urlviR").css("display", "none");
        $("#UrlVideoConferenciaReunion").val("");
        $("#PlataformaVideoLLamadaReunion").attr('disabled', 'disabled');
        $("#UrlVideoConferenciaReunion").attr('disabled', 'disabled');
    }
});
$("#PlataformaVideoLLamada").change(function () {
    if ($("#PlataformaVideoLLamada").val() !== "0") {
        $("#UrlVideoConferencia").removeAttr('disabled');
        if ($("#PlataformaVideoLLamada").val() === "J") {
            $("#UrlVideoConferenciaReunion").val("");
            $("#urlvi").css("display", "none");
        } else {
            $("#urlvi").css("display", "block");
        }
    } else if ($("#PlataformaVideoLLamada").val() === "") {
        $("#urlvi").css("display", "none");
        $("#UrlVideoConferencia").val("");
        $("#UrlVideoConferencia").attr('disabled', 'disabled');
    }
});
$("#PlataformaVideoLLamadaReunion").change(function () {
    if ($("#PlataformaVideoLLamadaReunion").val() !== "0") {
        $("#UrlVideoConferenciaReunion").removeAttr('disabled');
        if ($("#PlataformaVideoLLamadaReunion").val() === "J") {
            $("#UrlVideoConferenciaReunion").val("");
            $("#PlataformaVideoLLamadaReunion option[value='0']").attr("selected", true);
            $("#urlviR").css("display", "none");
        } else {
            $("#urlviR").css("display", "block");
        }
    } else if ($("#PlataformaVideoLLamadaReunion").val() === "0") {
        $("#urlviR").css("display", "none");
        $("#UrlVideoConferenciaReunion").val("");
        $("#UrlVideoConferenciaReunion").attr('disabled', 'disabled');
    }
});
$("#OpcVideoM").change(function () {
    refreshSelectPlatCE();
    if ($("#OpcVideoM").val() === "C") {
        $("#CampPLatM").css("display", "block");
        $("#urlviM").css("display", "none");

        $("#UrlVideoConferencia").val("");
        $("#PlataformaVideoLLamada").removeAttr('disabled');
    } else if ($("#OpcVideoM").val() === "S") {
        $("#CampPLatM").css("display", "none");
        $("#urlviM").css("display", "none");
        $("#UrlVideoConferencia").val("");
        $("#PlataformaVideoLLamada").attr('disabled', 'disabled');
        $("#UrlVideoConferencia").attr('disabled', 'disabled');
    } else if ($("#OpcVideoM").val() === "") {
        $("#CampPLatM").css("display", "none");
        $("#urlviM").css("display", "none");
        $("#UrlVideoConferencia").val("");
        $("#PlataformaVideoLLamada").attr('disabled', 'disabled');
        $("#UrlVideoConferencia").attr('disabled', 'disabled');
    }
});
$("#OpcVideoReunionM").change(function () {
    refreshSelectPlatEB();
    if ($("#OpcVideoReunionM").val() === "C") {
        $("#CampPLatRM").css("display", "block");
        $("#urlviRM").css("display", "none");
        $("#UrlVideoConferenciaReunionM").val("");
        $("#PlataformaVideoLLamadaReunionM").removeAttr('disabled');
    } else if ($("#OpcVideoReunionM").val() === "S") {
        $("#CampPLatRM").css("display", "none");
        $("#urlviRM").css("display", "none");
        $("#UrlVideoConferenciaReunionM").val("");
        $("#PlataformaVideoLLamadaReunionM").attr('disabled', 'disabled');
        $("#UrlVideoConferenciaReunionM").attr('disabled', 'disabled');
    } else if ($("#OpcVideoReunionM").val() === "") {
        $("#CampPLatRM").css("display", "none");
        $("#urlviRM").css("display", "none");
        $("#UrlVideoConferenciaReunionM").val("");
        $("#PlataformaVideoLLamadaReunionM").attr('disabled', 'disabled');
        $("#UrlVideoConferenciaReunionM").attr('disabled', 'disabled');
    }
});
$("#PlataformaVideoLLamadaM").change(function () {
    if ($("#PlataformaVideoLLamadaM").val() !== "") {
        $("#UrlVideoConferenciaM").removeAttr('disabled');
        if ($("#PlataformaVideoLLamadaM").val() === "J") {
            $("#UrlVideoConferenciaReunionM").val("");
            $("#urlviM").css("display", "none");
        } else {
            $("#urlviM").css("display", "block");
        }
    } else if ($("#PlataformaVideoLLamadaM").val() === "") {
        $("#urlviM").css("display", "none");
        $("#UrlVideoConferenciaM").val("");
        $("#UrlVideoConferenciaM").attr('disabled', 'disabled');
    }
});
$("#PlataformaVideoLLamadaReunionM").change(function () {
    if ($("#PlataformaVideoLLamadaReunion").val() !== "") {
        $("#UrlVideoConferenciaReunion").removeAttr('disabled');
        if ($("#PlataformaVideoLLamadaReunion").val() === "J") {
            $("#UrlVideoConferenciaReunion").val("");
            $("#urlviR").css("display", "none");
        } else {
            $("#urlviR").css("display", "block");
        }
    } else if ($("#PlataformaVideoLLamadaReunion").val() === "") {
        $("#urlviR").css("display", "none");
        $("#UrlVideoConferenciaReunion").val("");
        $("#UrlVideoConferenciaReunion").attr('disabled', 'disabled');
    }
});

function refreshSelectopcCE() {
    var a = '<option value="">Seleccionar opcion de Video Conferencia</option><option value="C">Con Video LLamada</option><option value="S">Sin Video LLamada</option>';
    $("#OpcVideoM").empty();
    $("#OpcVideoM").append(a);
    $("#OpcVideo").empty();
    $("#OpcVideo").append(a);
}
function refreshSelectopcEB() {
    var a = '<option value="">Seleccionar opcion de Video Conferencia</option><option value="C">Con Video LLamada</option><option value="S">Sin Video LLamada</option>';
    $("#OpcVideoReunion").empty();
    $("#OpcVideoReunion").append(a);
    $("#OpcVideoReunionM").empty();
    $("#OpcVideoReunionM").append(a);
}
function refreshSelectPlatCE() {
    var b = '<option value="">Seleccionar La plataforma de Video LLamada</option><option value="J">Jitsi Meet</option><option value="S">Sangoma Meet</option>';
    $("#PlataformaVideoLLamadaM").empty();
    $("#PlataformaVideoLLamadaM").append(b);
    $("#PlataformaVideoLLamada").empty();
    $("#PlataformaVideoLLamada").append(b);
}
function refreshSelectPlatEB() {
    var b = '<option value="">Seleccionar La plataforma de Video LLamada</option><option value="J">Jitsi Meet</option><option value="S">Sangoma Meet</option>';
    $("#PlataformaVideoLLamadaReunionM").empty();
    $("#PlataformaVideoLLamadaReunionM").append(b);
    $("#PlataformaVideoLLamadaReunion").empty();
    $("#PlataformaVideoLLamadaReunion").append(b);
}

function ValidarFormulario() {
    var regexp = /(http|https):\/\/meet.sangoma.com\/(\w+:{0,1}\w*@)?/;
    var NombreCampana = $("#NombreCampana").val();
    var OpcVideo = $("#OpcVideo").val();
    var Cod_Campana = $("#Cod_Campana").val();
    var Descripcion = $("#Descripcion").val();
    var Fe_Inicio = $("#Fe_Inicio").val();
    var Fe_Fin = $("#Fe_Fin").val();
    if (NombreCampana !== "" && OpcVideo !== "" && Cod_Campana !== "" &&
            Descripcion !== "" && Fe_Inicio !== "" && Fe_Fin !== "" && OpcVideo !== "") {
        if (OpcVideo === "S") {
            $(".LN").removeClass("state-error").addClass("state-success");
            $(".LO").removeClass("state-error").addClass("state-success");
            $(".LP").removeClass("state-error").removeClass("state-success");
            $(".LU").removeClass("state-error").removeClass("state-success");
            $(".LC").removeClass("state-error").addClass("state-success");
            $(".LD").removeClass("state-error").addClass("state-success");
            $(".LIN").removeClass("state-error").addClass("state-success");
            $(".LFI").removeClass("state-error").addClass("state-success");
            return 1;
        } else if (OpcVideo === "C") {
            var PlataformaVideoLLamada = $("#PlataformaVideoLLamada").val();
            if (PlataformaVideoLLamada !== "") {
                if (PlataformaVideoLLamada === "S") {
                    var UrlVideoConferencia = $("#UrlVideoConferencia").val();
                    if (UrlVideoConferencia !== "") {
                        if (regexp.test(UrlVideoConferencia)) {
                            $(".LU").removeClass("state-error").addClass("state-success");
                            $(".LN").removeClass("state-error").addClass("state-success");
                            $(".LO").removeClass("state-error").addClass("state-success");
                            $(".LP").removeClass("state-error").addClass("state-success");
                            $(".LC").removeClass("state-error").addClass("state-success");
                            $(".LD").removeClass("state-error").addClass("state-success");
                            $(".LIN").removeClass("state-error").addClass("state-success");
                            $(".LFI").removeClass("state-error").addClass("state-success");
                            $("#valu").css("display","none");
                            return 1;
                        } else {
                            $(".LU").removeClass("state-success").addClass("state-error");
                            $(".LN").removeClass("state-error").addClass("state-success");
                            $(".LO").removeClass("state-error").addClass("state-success");
                            $(".LP").removeClass("state-error").addClass("state-success");
                            $(".LC").removeClass("state-error").addClass("state-success");
                            $(".LD").removeClass("state-error").addClass("state-success");
                            $(".LIN").removeClass("state-error").addClass("state-success");
                            $(".LFI").removeClass("state-error").addClass("state-success");
                            $("#valu").css("display","block");
                            return 0;
                        }
                    } else {
                        $(".LP").removeClass("state-error").addClass("state-success");
                        $(".LU").removeClass("state-success").addClass("state-error");
                        return 0;
                    }
                } else if (PlataformaVideoLLamada === "J") {
                    return 1;
                }
            } else {
                $(".LP").removeClass("state-success").addClass("state-error");
                $(".LU").removeClass("state-success").addClass("state-error");
                return 0;
            }
        }
    } else {
        if (NombreCampana !== "") {
            $(".LN").removeClass("state-error").addClass("state-success");
        } else {
            $(".LN").removeClass("state-success").addClass("state-error");
        }
        if (OpcVideo !== "") {
            $(".LO").removeClass("state-error").addClass("state-success");
            if (OpcVideo === "S") {
            } else if (OpcVideo === "C") {
                var PlataformaVideoLLamada = $("#PlataformaVideoLLamada").val();
                if (PlataformaVideoLLamada !== "") {
                    $(".LP").removeClass("state-error").addClass("state-success");
                    if (PlataformaVideoLLamada === "J") {
                        var UrlVideoConferencia = $("#UrlVideoConferencia").val();
                        if (UrlVideoConferencia !== "") {
                            if (regexp.test(UrlVideoConferencia)) {
                                $(".LU").removeClass("state-error").addClass("state-success");
                            } else {
                                $("#valu").css("display","none");
                                $(".LU").removeClass("state-success").addClass("state-error");
                            }
                        } else {
                            $(".LU").removeClass("state-success").addClass("state-error");
                        }
                    } else if (PlataformaVideoLLamada === "S") {
                        $(".LU").removeClass("state-error").removeClass("state-success");
                    }
                } else {
                    $(".LU").removeClass("state-error").removeClass("state-success");
                    $(".LP").removeClass("state-success").addClass("state-error");
                }
            }
        } else {
            $(".LP").removeClass("state-error").removeClass("state-success");
            $(".LU").removeClass("state-error").removeClass("state-success");
            $(".LO").removeClass("state-success").addClass("state-error");
        }

        if (Cod_Campana !== "") {
            $(".LC").removeClass("state-error").addClass("state-success");
        } else {
            $(".LC").removeClass("state-success").addClass("state-error");
        }
        if (Descripcion !== "") {
            $(".LD").removeClass("state-error").addClass("state-success");
        } else {
            $(".LD").removeClass("state-success").addClass("state-error");
        }
        if (Fe_Inicio !== "") {
            $(".LIN").removeClass("state-error").addClass("state-success");
        } else {
            $(".LIN").removeClass("state-success").addClass("state-error");
        }
        if (Fe_Fin !== "") {
            $(".LFI").removeClass("state-error").addClass("state-success");
        } else {
            $(".LFI").removeClass("state-success").addClass("state-error");
        }
        return 0;
    }
}
function ValidarFormularioModificar() {

    var NombreCampana = $("#NombreCampanaM").val();
    var OpcVideo = $("#OpcVideoM").val();
    var Cod_Campana = $("#Cod_CampanaM").val();
    var Descripcion = $("#DescripcionM").val();
    var Fe_Inicio = $("#Fe_InicioM").val();
    var Fe_Fin = $("#Fe_FinM").val();
    if (NombreCampana !== "" && OpcVideo !== "" && Cod_Campana !== "" &&
            Descripcion !== "" && Fe_Inicio !== "" && Fe_Fin !== "" && OpcVideo !== "") {
        if (OpcVideo === "S") {
            $(".LNM").removeClass("state-error").addClass("state-success");
            $(".LOM").removeClass("state-error").addClass("state-success");
            $(".LPM").removeClass("state-error").removeClass("state-success");
            $(".LUM").removeClass("state-error").removeClass("state-success");
            $(".LCM").removeClass("state-error").addClass("state-success");
            $(".LDM").removeClass("state-error").addClass("state-success");
            $(".LINM").removeClass("state-error").addClass("state-success");
            $(".LFIM").removeClass("state-error").addClass("state-success");
            return 1;
        } else if (OpcVideo === "C") {
            var PlataformaVideoLLamada = $("#PlataformaVideoLLamadaM").val();
            if (PlataformaVideoLLamada !== "") {
                if (PlataformaVideoLLamada === "S") {
                    var UrlVideoConferencia = $("#UrlVideoConferenciaM").val();
                    if (UrlVideoConferencia !== "") {
                        $(".LNM").removeClass("state-error").addClass("state-success");
                        $(".LOM").removeClass("state-error").addClass("state-success");
                        $(".LPM").removeClass("state-error").addClass("state-success");
                        $(".LUM").removeClass("state-error").addClass("state-success");
                        $(".LCM").removeClass("state-error").addClass("state-success");
                        $(".LDM").removeClass("state-error").addClass("state-success");
                        $(".LINM").removeClass("state-error").addClass("state-success");
                        $(".LFIM").removeClass("state-error").addClass("state-success");
                        return 1;
                    } else {
                        $(".LPM").removeClass("state-error").addClass("state-success");
                        $(".LUM").removeClass("state-success").addClass("state-error");
                        return 0;
                    }
                } else if (PlataformaVideoLLamada === "J") {

                    return 1;
                }
            } else {
                $(".LPM").removeClass("state-success").addClass("state-error");
                $(".LUM").removeClass("state-success").addClass("state-error");
                return 0;
            }
        }
    } else {
        if (NombreCampana !== "") {
            $(".LNM").removeClass("state-error").addClass("state-success");
        } else {
            $(".LNM").removeClass("state-success").addClass("state-error");
        }
        if (OpcVideo !== "") {
            $(".LOM").removeClass("state-error").addClass("state-success");
            if (OpcVideo === "S") {
                var PlataformaVideoLLamada = $("#PlataformaVideoLLamada").val();
                if (PlataformaVideoLLamada !== "") {
                    $(".LPM").removeClass("state-error").addClass("state-success");
                    if (PlataformaVideoLLamada === "J") {
                        var UrlVideoConferencia = $("#UrlVideoConferencia").val();
                        if (UrlVideoConferencia !== "") {
                            $(".LUM").removeClass("state-error").addClass("state-success");
                        } else {
                            $(".LUM").removeClass("state-success").addClass("state-error");
                        }
                    } else if (PlataformaVideoLLamada === "S") {
                        $(".LUM").removeClass("state-error").removeClass("state-success");
                    }
                } else {
                    $(".LUM").removeClass("state-error").removeClass("state-success");
                    $(".LPM").removeClass("state-success").addClass("state-error");
                }
            } else if (OpcVideo === "C") {
                var PlataformaVideoLLamada = $("#PlataformaVideoLLamada").val();
                if (PlataformaVideoLLamada !== "") {
                    $(".LPM").removeClass("state-error").addClass("state-success");
                    if (PlataformaVideoLLamada === "J") {
                        var UrlVideoConferencia = $("#UrlVideoConferencia").val();
                        if (UrlVideoConferencia !== "") {
                            $(".LUM").removeClass("state-error").addClass("state-success");
                        } else {
                            $(".LUM").removeClass("state-success").addClass("state-error");
                        }
                    } else if (PlataformaVideoLLamada === "S") {
                        $(".LUM").removeClass("state-error").removeClass("state-success");
                    }
                } else {
                    $(".LUM").removeClass("state-error").removeClass("state-success");
                    $(".LPM").removeClass("state-success").addClass("state-error");
                }
            }


        } else {
            $(".LPM").removeClass("state-error").removeClass("state-success");
            $(".LUM").removeClass("state-error").removeClass("state-success");
            $(".LOM").removeClass("state-success").addClass("state-error");
        }

        if (Cod_Campana !== "") {
            $(".LCM").removeClass("state-error").addClass("state-success");
        } else {
            $(".LCM").removeClass("state-success").addClass("state-error");
        }
        if (Descripcion !== "") {
            $(".LDM").removeClass("state-error").addClass("state-success");
        } else {
            $(".LDM").removeClass("state-success").addClass("state-error");
        }
        if (Fe_Inicio !== "") {
            $(".LINM").removeClass("state-error").addClass("state-success");
        } else {
            $(".LINM").removeClass("state-success").addClass("state-error");
        }
        if (Fe_Fin !== "") {
            $(".LFIM").removeClass("state-error").addClass("state-success");
        } else {
            $(".LFIM").removeClass("state-success").addClass("state-error");
        }
        return 0;
    }
}
function ValidarFormularioEstudio() {
    var NombreCampana = $("#NombreReunion").val();
    var OpcVideo = $("#OpcVideoReunion").val();
    var Cod_Campana = $("#Cod_Reunion").val();
    var Descripcion = $("#DescripcionReunion").val();
    var Fe_Inicio = $("#Fe_InicioReunion").val();
    var Fe_Fin = $("#Fe_FinReunion").val();
    if (NombreCampana !== "" && OpcVideo !== "" && Cod_Campana !== "" &&
            Descripcion !== "" && Fe_Inicio !== "" && Fe_Fin !== "" && OpcVideo !== "") {
        if (OpcVideo === "S") {
            $(".LNR").removeClass("state-error").addClass("state-success");
            $(".LOR").removeClass("state-error").addClass("state-success");
            $(".LPR").removeClass("state-error").removeClass("state-success");
            $(".LUR").removeClass("state-error").removeClass("state-success");
            $(".LCR").removeClass("state-error").addClass("state-success");
            $(".LDR").removeClass("state-error").addClass("state-success");
            $(".LINR").removeClass("state-error").addClass("state-success");
            $(".LFIR").removeClass("state-error").addClass("state-success");
            return 1;
        } else if (OpcVideo === "C") {

            var PlataformaVideoLLamada = $("#PlataformaVideoLLamadaReunion").val();
            if (PlataformaVideoLLamada !== "") {
                if (PlataformaVideoLLamada === "S") {
                    var UrlVideoConferencia = $("#UrlVideoConferenciaReunion").val();
                    if (UrlVideoConferencia !== "") {
                        $(".LNR").removeClass("state-error").addClass("state-success");
                        $(".LOR").removeClass("state-error").addClass("state-success");
                        $(".LPR").removeClass("state-error").addClass("state-success");
                        $(".LUR").removeClass("state-error").addClass("state-success");
                        $(".LCR").removeClass("state-error").addClass("state-success");
                        $(".LDR").removeClass("state-error").addClass("state-success");
                        $(".LINR").removeClass("state-error").addClass("state-success");
                        $(".LFIR").removeClass("state-error").addClass("state-success");
                        return 1;
                    } else {
                        $(".LPR").removeClass("state-error").addClass("state-success");
                        $(".LUR").removeClass("state-success").addClass("state-error");

                        return 0;
                    }
                } else if (PlataformaVideoLLamada === "J") {
                    return 1;
                }
            } else {
                $(".LPR").removeClass("state-success").addClass("state-error");
                $(".LUR").removeClass("state-success").addClass("state-error");
                return 0;
            }
        }
    } else {
        if (NombreCampana !== "") {
            $(".LNR").removeClass("state-error").addClass("state-success");
        } else {
            $(".LNR").removeClass("state-success").addClass("state-error");
        }
        if (OpcVideo !== "") {
            $(".LOR").removeClass("state-error").addClass("state-success");
            if (OpcVideo === "S") {
                var PlataformaVideoLLamada = $("#PlataformaVideoLLamadaReunion").val();
                if (PlataformaVideoLLamada !== "") {
                    $(".LPR").removeClass("state-error").addClass("state-success");
                    if (PlataformaVideoLLamada === "J") {
                        var UrlVideoConferencia = $("#UrlVideoConferenciaReunion").val();
                        if (UrlVideoConferencia !== "") {
                            $(".LUR").removeClass("state-error").addClass("state-success");
                        } else {
                            $(".LUR").removeClass("state-success").addClass("state-error");
                        }
                    } else if (PlataformaVideoLLamada === "S") {
                        $(".LUR").removeClass("state-error").removeClass("state-success");
                    }
                } else {
                    $(".LUR").removeClass("state-error").removeClass("state-success");
                    $(".LPR").removeClass("state-success").addClass("state-error");
                }
            } else if (OpcVideo === "C") {
                var PlataformaVideoLLamada = $("#PlataformaVideoLLamadaReunion").val();
                if (PlataformaVideoLLamada !== "") {
                    $(".LPR").removeClass("state-error").addClass("state-success");
                    if (PlataformaVideoLLamada === "J") {
                        var UrlVideoConferencia = $("#UrlVideoConferenciaReunion").val();
                        if (UrlVideoConferencia !== "") {
                            $(".LUR").removeClass("state-error").addClass("state-success");
                        } else {
                            $(".LUR").removeClass("state-success").addClass("state-error");
                        }
                    } else if (PlataformaVideoLLamada === "S") {
                        $(".LUR").removeClass("state-error").removeClass("state-success");
                    }
                } else {
                    $(".LUR").removeClass("state-error").removeClass("state-success");
                    $(".LPR").removeClass("state-success").addClass("state-error");
                }
            }


        } else {
            $(".LPR").removeClass("state-error").removeClass("state-success");
            $(".LUR").removeClass("state-error").removeClass("state-success");
            $(".LOR").removeClass("state-success").addClass("state-error");
        }

        if (Cod_Campana !== "") {
            $(".LCR").removeClass("state-error").addClass("state-success");
        } else {
            $(".LCR").removeClass("state-success").addClass("state-error");
        }
        if (Descripcion !== "") {
            $(".LDR").removeClass("state-error").addClass("state-success");
        } else {
            $(".LDR").removeClass("state-success").addClass("state-error");
        }
        if (Fe_Inicio !== "") {
            $(".LINR").removeClass("state-error").addClass("state-success");
        } else {
            $(".LINR").removeClass("state-success").addClass("state-error");
        }
        if (Fe_Fin !== "") {
            $(".LFIR").removeClass("state-error").addClass("state-success");
        } else {
            $(".LFIR").removeClass("state-success").addClass("state-error");
        }
        return 0;
    }
}
function ValidarFormularioEstudioModifcar() {
    var NombreCampana = $("#NombreReunionM").val();
    var OpcVideo = $("#OpcVideoReunionM").val();
    var Cod_Campana = $("#Cod_ReunionM").val();
    var Descripcion = $("#DescripcionReunionM").val();
    var Fe_Inicio = $("#Fe_InicioReunionM").val();
    var Fe_Fin = $("#Fe_FinReunionM").val();
    if (NombreCampana !== "" && OpcVideo !== "" && Cod_Campana !== "" &&
            Descripcion !== "" && Fe_Inicio !== "" && Fe_Fin !== "" && OpcVideo !== "") {
        if (OpcVideo === "S") {
            $(".LNRM").removeClass("state-error").addClass("state-success");
            $(".LORM").removeClass("state-error").addClass("state-success");
            $(".LPRM").removeClass("state-error").removeClass("state-success");
            $(".LURM").removeClass("state-error").removeClass("state-success");
            $(".LCRM").removeClass("state-error").addClass("state-success");
            $(".LDRM").removeClass("state-error").addClass("state-success");
            $(".LINRM").removeClass("state-error").addClass("state-success");
            $(".LFIRM").removeClass("state-error").addClass("state-success");
            return 1;
        } else if (OpcVideo === "C") {

            var PlataformaVideoLLamada = $("#PlataformaVideoLLamadaReunionM").val();
            if (PlataformaVideoLLamada !== "") {
                if (PlataformaVideoLLamada === "S") {
                    var UrlVideoConferencia = $("#UrlVideoConferenciaReunionM").val();
                    if (UrlVideoConferencia !== "") {
                        $(".LNRM").removeClass("state-error").addClass("state-success");
                        $(".LORM").removeClass("state-error").addClass("state-success");
                        $(".LPRM").removeClass("state-error").addClass("state-success");
                        $(".LUR").removeClass("state-error").addClass("state-success");
                        $(".LCRM").removeClass("state-error").addClass("state-success");
                        $(".LDRM").removeClass("state-error").addClass("state-success");
                        $(".LINRM").removeClass("state-error").addClass("state-success");
                        $(".LFIRM").removeClass("state-error").addClass("state-success");
                        return 1;
                    } else {
                        $(".LPRM").removeClass("state-error").addClass("state-success");
                        $(".LURM").removeClass("state-success").addClass("state-error");

                        return 0;
                    }
                } else if (PlataformaVideoLLamada === "J") {
                    return 1;
                }
            } else {
                $(".LPRM").removeClass("state-success").addClass("state-error");
                $(".LURM").removeClass("state-success").addClass("state-error");
                return 0;
            }
        }
    } else {
        if (NombreCampana !== "") {
            $(".LNRM").removeClass("state-error").addClass("state-success");
        } else {
            $(".LNRM").removeClass("state-success").addClass("state-error");
        }
        if (OpcVideo !== "") {
            $(".LORM").removeClass("state-error").addClass("state-success");
            if (OpcVideo === "S") {
                var PlataformaVideoLLamada = $("#PlataformaVideoLLamadaReunionM").val();
                if (PlataformaVideoLLamada !== "") {
                    $(".LPRM").removeClass("state-error").addClass("state-success");
                    if (PlataformaVideoLLamada === "J") {
                        var UrlVideoConferencia = $("#UrlVideoConferenciaReunionM").val();
                        if (UrlVideoConferencia !== "") {
                            $(".LURM").removeClass("state-error").addClass("state-success");
                        } else {
                            $(".LURM").removeClass("state-success").addClass("state-error");
                        }
                    } else if (PlataformaVideoLLamada === "S") {
                        $(".LURM").removeClass("state-error").removeClass("state-success");
                    }
                } else {
                    $(".LURM").removeClass("state-error").removeClass("state-success");
                    $(".LPRM").removeClass("state-success").addClass("state-error");
                }
            } else if (OpcVideo === "C") {
                var PlataformaVideoLLamada = $("#PlataformaVideoLLamadaReunion").val();
                if (PlataformaVideoLLamada !== "") {
                    $(".LPRM").removeClass("state-error").addClass("state-success");
                    if (PlataformaVideoLLamada === "J") {
                        var UrlVideoConferencia = $("#UrlVideoConferenciaReunion").val();
                        if (UrlVideoConferencia !== "") {
                            $(".LURM").removeClass("state-error").addClass("state-success");
                        } else {
                            $(".LURM").removeClass("state-success").addClass("state-error");
                        }
                    } else if (PlataformaVideoLLamada === "S") {
                        $(".LURM").removeClass("state-error").removeClass("state-success");
                    }
                } else {
                    $(".LURM").removeClass("state-error").removeClass("state-success");
                    $(".LPRM").removeClass("state-success").addClass("state-error");
                }
            }
        } else {
            $(".LPRM").removeClass("state-error").removeClass("state-success");
            $(".LURM").removeClass("state-error").removeClass("state-success");
            $(".LORM").removeClass("state-success").addClass("state-error");
        }
        if (Cod_Campana !== "") {
            $(".LCRM").removeClass("state-error").addClass("state-success");
        } else {
            $(".LCRM").removeClass("state-success").addClass("state-error");
        }
        if (Descripcion !== "") {
            $(".LDRM").removeClass("state-error").addClass("state-success");
        } else {
            $(".LDRM").removeClass("state-success").addClass("state-error");
        }
        if (Fe_Inicio !== "") {
            $(".LINRM").removeClass("state-error").addClass("state-success");
        } else {
            $(".LINRM").removeClass("state-success").addClass("state-error");
        }
        if (Fe_Fin !== "") {
            $(".LFIRM").removeClass("state-error").addClass("state-success");
        } else {
            $(".LFIRM").removeClass("state-success").addClass("state-error");
        }
        return 0;
    }
}
function ListarCampanas(id_Per) {
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "ListarCampanaByPersona", id_p: id_Per},
        success: function (response)
        {
            var jsonData = JSON.parse(response);

            if (jsonData.length > 0) {
                html = "";
                for (var i = 0; i < jsonData.length; i++) {
                    html += '<li class="list-unstyled lipri">';
                    if (jsonData[i].Es_Video_Conferencia === "C") {
                        html += '<i class="fa fa-video-camera text-success"></i> ';
                    } else {
                        html += '<i class="fa fa-check text-success"></i> ';
                    }
                    html += '<a href="Campana_Evangelistica.php?id=' + jsonData[i].id_Campana_Evangelistica + '">' + jsonData[i].No_Campana_Evangelistica + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a ><a onclick="LLenarModificar(' + jsonData[i].id_Campana_Evangelistica + ')" data-toggle="modal" data-target="#ModalModificarCampana"><i class="fa fa-edit text-success" style="font-size:18px"></i></a></li>'
                }
                $("#Encargado").empty();
                $("#Encargado").append(html);
            } else {
                html = "";
                html += '<li class="list-unstyled lipri"><i class="fa fa-fw fa-exclamation text-danger"></i> <a >No hay Campañas Registradas! </a></li>';
                $("#Encargado").empty();
                $("#Encargado").append(html);
            }


        }
    });
}
function ListarReunionesEstudio(id_Per) {
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "ListarReunionesByPersona", id_p: id_Per},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            if (jsonData.length > 0) {
                html = "";
                for (var i = 0; i < jsonData.length; i++) {
                    html += '<li class="list-unstyled lipri">';
                    if (jsonData[i].Es_Video_Conferencia === "C") {
                        html += '<i class="fa fa-video-camera text-success"></i> ';
                    } else {
                        html += '<i class="fa fa-check text-success"></i> ';
                    }
                    html += '<a href="EstudioBiblico.php?id=' + jsonData[i].id_Campana_Evangelistica + '">' + jsonData[i].No_Campana_Evangelistica + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a ><a onclick="LLenarModificarReunionEstudio(' + jsonData[i].id_Campana_Evangelistica + ')" data-toggle="modal" data-target="#ModalModifcarEstudioBiblico"><i class="fa fa-edit text-success" style="font-size:18px"></i></a></li>'
                }
                $("#EncargadoReunion").empty();
                $("#EncargadoReunion").append(html);
            } else {
                html = "";
                html += '<li class="list-unstyled lipri"><i class="fa fa-fw fa-exclamation text-danger"></i> <a >No hay Campañas Registradas! </a></li>';
                $("#EncargadoReunion").empty();
                $("#EncargadoReunion").append(html);
            }


        }
    });
}
function ListarCampanaParticipante(id_Per) {
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "ListarParticipanteCampana", id_p: id_Per},
        success: function (response)
        {
            var jsonData = JSON.parse(response);

            if (jsonData.length > 0) {
                html = "";
                for (var i = 0; i < jsonData.length; i++) {
                    html += '<li class="list-unstyled lipri">';
                    if (jsonData[i].Es_Video_Conferencia === "C") {
                        html += '<i class="fa fa-video-camera text-success"></i> ';
                    } else {
                        html += '<i class="fa fa-check text-success"></i> ';
                    }
                    html += '<a href="Campana_Evangelistica.php?id=' + jsonData[i].id_Campana_Evangelistica + '">' + jsonData[i].No_Campana_Evangelistica + '</a></li>'
                }
                $("#Participando").empty();
                $("#Participando").append(html);
            } else {
                html = "";
                html += '<li class="list-unstyled lipri"><i class="fa fa-fw fa-exclamation text-danger"></i> <a >No Participan en Ninguna Campaña! </a></li>';
                $("#Participando").empty();
                $("#Participando").append(html);
            }
        }
    });
}
function ListarReunionesParticipantes(id_Per) {
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "ListarReunionesParticipante", id_p: id_Per},
        success: function (response)
        {
            var jsonData = JSON.parse(response);

            if (jsonData.length > 0) {
                html = "";
                for (var i = 0; i < jsonData.length; i++) {
                    html += '<li class="list-unstyled lipri">';
                    if (jsonData[i].Es_Video_Conferencia === "C") {
                        html += '<i class="fa fa-video-camera text-success"></i> ';
                    } else {
                        html += '<i class="fa fa-check text-success"></i> ';
                    }
                    html += '<a href="Campana_Evangelistica.php?id=' + jsonData[i].id_Campana_Evangelistica + '">' + jsonData[i].No_Campana_Evangelistica + '</a></li>'
                }
                $("#ParticipandoReunion").empty();
                $("#ParticipandoReunion").append(html);
            } else {
                html = "";
                html += '<li class="list-unstyled lipri"><i class="fa fa-fw fa-exclamation text-danger"></i> <a >No Participan en Ninguna Campaña! </a></li>';
                $("#ParticipandoReunion").empty();
                $("#ParticipandoReunion").append(html);
            }
        }
    });
}
function ListarEstudioBiblico() {
    $.ajax({
        type: "POST",
        url: '../Controlador/EstudioBiblico.php',
        data: {opc: "ListarEstudioBiblico"},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            if (jsonData.length > 0) {
                html = "";
                html += '<option value="">Seleccionar Estudio Biblico</option>';
                for (var i = 0; i < jsonData.length; i++) {

                    html += '<option value="' + jsonData[i].id_Estudio_Biblico + '">' + jsonData[i].No_Estudio_Biblico + '</option>';
                }
                $("#EstudioBiblicoReunion").empty();
                $("#EstudioBiblicoReunion").append(html);
            } else {
                html = "";
                html += '<option value="">No Hay Estudios</option>';
                $("#EstudioBiblicoReunion").empty();
                $("#EstudioBiblicoReunion").append(html);
            }
        }
    });
}
function ListarEstudioBiblicoModificar() {
    $.ajax({
        type: "POST",
        url: '../Controlador/EstudioBiblico.php',
        data: {opc: "ListarEstudioBiblico"},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            if (jsonData.length > 0) {
                html = "";
                html += '<option value="">Seleccionar Estudio Biblico</option>';
                for (var i = 0; i < jsonData.length; i++) {

                    html += '<option value="' + jsonData[i].id_Estudio_Biblico + '">' + jsonData[i].No_Estudio_Biblico + '</option>';
                }
                $("#EstudioBiblicoReunionM").empty();
                $("#EstudioBiblicoReunionM").append(html);
            } else {
                html = "";
                html += '<option value="">No Hay Estudios</option>';
                $("#EstudioBiblicoReunionM").empty();
                $("#EstudioBiblicoReunionM").append(html);
            }
        }
    });
}
function IngresarCampana() {
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "IngresarCampanaEvangelistica", NombreCampana: $("#NombreCampana").val(),
            id_peC: $("#id_peC").val(), OpcVideo: $("#OpcVideo").val(), PlataformaVideoLLamada: $("#PlataformaVideoLLamada").val(),
            UrlVideoConferencia: $("#UrlVideoConferencia").val(), Cod_Campana: $("#Cod_Campana").val(),
            Descripcion: $("#Descripcion").val(), Fe_Inicio: $("#Fe_Inicio").val(),
            Fe_Fin: $("#Fe_Fin").val(), Biblia: Biblia,
            Himinario: Himinario, Musica: Musica, video: video
        },
        success: function (response)
        {
            if (response === "true") {
                $.smallBox({
                    title: "Campaña Resgistrado Correctamente!",
                    content: "<i class='fa fa-check'></i> Registrado Correctamente...<i></i>",
                    color: "#659265",
                    iconSmall: "fa fa-check fa-2x fadeInRight animated",
                    timeout: 2000
                });
            } else {
                $.smallBox({
                    title: "Error al Registrar Campaña Evangelistica",
                    content: "<i class='fa fa-times'></i> Error al Registrar...<i></i>",
                    color: "#C46A69",
                    iconSmall: "fa fa-times fa-2x fadeInRight animated",
                    timeout: 2000
                });
            }
        }
    });
}
function IngresarEstudioBiblico() {
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "IngresarEstudioBiblico", NombreCampana: $("#NombreReunion").val(),
            id_peR: $("#id_peR").val(), OpcVideo: $("#OpcVideoReunion").val(), PlataformaVideoLLamada: $("#PlataformaVideoLLamadaReunion").val(),
            UrlVideoConferencia: $("#UrlVideoConferenciaReunion").val(), Cod_Campana: $("#Cod_Reunion").val(),
            Descripcion: $("#DescripcionReunion").val(), Fe_Inicio: $("#Fe_InicioReunion").val(),
            Fe_Fin: $("#Fe_FinReunion").val(), Biblia: BibliaR,
            Himinario: HiminarioR, Musica: MusicaR, video: videoR, id_Estudio: $("#EstudioBiblicoReunion").val()
        },
        success: function (response)
        {
            if (response === "true") {
                $.smallBox({
                    title: "Reunion de Estudio Biblico Resgistrado Correctamente!",
                    content: "<i class='fa fa-check'></i> Registrado Correctamente...<i></i>",
                    color: "#659265",
                    iconSmall: "fa fa-check fa-2x fadeInRight animated",
                    timeout: 2000
                });
                //setTimeout(location.reload(), 3000);
            } else {
                $.smallBox({
                    title: "Error al Registrar Reunion de Estudio Biblico",
                    content: "<i class='fa fa-times'></i> Error al Registrar...<i></i>",
                    color: "#C46A69",
                    iconSmall: "fa fa-times fa-2x fadeInRight animated",
                    timeout: 2000
                });
            }
        }
    });
}
function ModificarCampana() {
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "ModificarCampanaEvangelistica", NombreCampana: $("#NombreCampanaM").val(),
            id_peC: $("#id_peCM").val(), OpcVideo: $("#OpcVideoM").val(), PlataformaVideoLLamada: $("#PlataformaVideoLLamadaM").val(),
            UrlVideoConferencia: $("#UrlVideoConferenciaM").val(), Cod_Campana: $("#Cod_CampanaM").val(),
            Descripcion: $("#DescripcionM").val(), Fe_Inicio: $("#Fe_InicioM").val(),
            Fe_Fin: $("#Fe_FinM").val(), Biblia: BibliaM,
            Himinario: HiminarioM, Musica: MusicaM, video: videoM, id_Camp: $("#id_Camp").val()
        },
        success: function (response)
        {
            if (response === "true") {
                $.smallBox({
                    title: "Campaña Modificado Correctamente!",
                    content: "<i class='fa fa-check'></i> Registrado Correctamente...<i></i>",
                    color: "#659265",
                    iconSmall: "fa fa-check fa-2x fadeInRight animated",
                    timeout: 2000
                });
            } else {
                $.smallBox({
                    title: "Error al Modificar Campaña Evangelistica",
                    content: "<i class='fa fa-times'></i> Error al Registrar...<i></i>",
                    color: "#C46A69",
                    iconSmall: "fa fa-times fa-2x fadeInRight animated",
                    timeout: 2000
                });
            }
        }
    });
}
function ModificarEstudio() {
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "ModificarEstudioBiblico", NombreCampana: $("#NombreReunionM").val(),
            id_peC: $("#id_peRM").val(), OpcVideo: $("#OpcVideoReunionM").val(), PlataformaVideoLLamada: $("#PlataformaVideoLLamadaReunionM").val(),
            UrlVideoConferencia: $("#UrlVideoConferenciaReunionM").val(), Cod_Campana: $("#Cod_ReunionM").val(),
            Descripcion: $("#DescripcionReunionM").val(), Fe_Inicio: $("#Fe_InicioReunionM").val(),
            Fe_Fin: $("#Fe_FinReunionM").val(), Biblia: BibliaRM,
            Himinario: HiminarioRM, Musica: MusicaRM, video: videoRM, id_Camp: $("#id_Est").val(), id_Estb: $("#EstudioBiblicoReunionM").val()
        },
        success: function (response)
        {
            if (response === "true") {
                $.smallBox({
                    title: "Reunión Estudio Biblico Modificado Correctamente!",
                    content: "<i class='fa fa-check'></i> Modificado Correctamente...<i></i>",
                    color: "#659265",
                    iconSmall: "fa fa-check fa-2x fadeInRight animated",
                    timeout: 2000
                });
            } else {
                $.smallBox({
                    title: "Error al Modificar Reunión de Estudio Bíblico",
                    content: "<i class='fa fa-times'></i> Error al Modificar...<i></i>",
                    color: "#C46A69",
                    iconSmall: "fa fa-times fa-2x fadeInRight animated",
                    timeout: 2000
                });
            }
        }
    });
}
function SuscribiseCampana(id_Per, Cod) {
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "SuscribirteCampana", id_p: id_Per, cod: Cod},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            if (jsonData[0].res === "1") {
                $.smallBox({
                    title: "Ya Estas Suscrito!",
                    content: "<i class='fa fa-times'></i> Error al Registrar...<i></i>",
                    color: "#C46A69",
                    iconSmall: "fa fa-times fa-2x fadeInRight animated",
                    timeout: 2000
                });

                setTimeout(location.reload(), 3000);
            } else if (jsonData[0].res === "2") {
                $.smallBox({
                    title: "Eres Encargado de la Campaña Evangelistica",
                    content: "<i class='fa fa-times'></i> Error al Registrar...<i></i>",
                    color: "#C46A69",
                    iconSmall: "fa fa-times fa-2x fadeInRight animated",
                    timeout: 2000
                });
            } else if (jsonData[0].res === "3") {
                $.smallBox({
                    title: "La Campana no esta Activo o No existe",
                    content: "<i class='fa fa-times'></i> Error al Registrar...<i></i>",
                    color: "#C46A69",
                    iconSmall: "fa fa-times fa-2x fadeInRight animated",
                    timeout: 2000
                });
            } else if (jsonData[0].res === "true") {
                $.smallBox({
                    title: "Suscrito Correctamente!",
                    content: "<i class='fa fa-check'></i> Registrado Correctamente...<i></i>",
                    color: "#659265",
                    iconSmall: "fa fa-check fa-2x fadeInRight animated",
                    timeout: 2000
                });
            }
        }
    });
}
function SelectHerramienta(id_camp) {
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "LLenarHerramienta", idc: id_camp},
        success: function (response)
        {
            var jsonData = JSON.parse(response);

            if (jsonData.length > 0) {
                for (var i = 0; i < jsonData.length; i++) {
                    if (jsonData[i].Es_Biblia === "1") {
                        $("#EsBibliaM").prop("checked", true);
                        BibliaM = '1';
                    } else {
                        $("#EsBibliaM").prop("checked", false);
                        BibliaM = '0';
                    }
                    if (jsonData[i].Es_Videos === "1") {
                        $("#EsVideoM").prop("checked", true);
                        videoM = '1';
                    } else {
                        $("#EsVideoM").prop("checked", false);
                        videoM = '0';
                    }
                    if (jsonData[i].Es_Musica === "1") {
                        $("#EsMusicaM").prop("checked", true);
                        MusicaM = '1';
                    } else {
                        $("#EsMusicaM").prop("checked", false);
                        MusicaM = '0';
                    }
                    if (jsonData[i].Es_Himinario === "1") {
                        $("#EsHiminarioM").prop("checked", true);
                        HiminarioM = '1';
                    } else {
                        $("#EsHiminarioM").prop("checked", false);
                        HiminarioM = '0';
                    }
                }
            } else {
            }
        }
    });
}
function SelectHerramientaReunion(id_camp) {
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "LLenarHerramienta", idc: id_camp},
        success: function (response)
        {
            var jsonData = JSON.parse(response);

            if (jsonData.length > 0) {
                for (var i = 0; i < jsonData.length; i++) {
                    if (jsonData[i].Es_Biblia === "1") {
                        $("#EsBibliaRM").prop("checked", true);
                        BibliaRM = '1';
                    } else {
                        $("#EsBibliaRM").prop("checked", false);
                        BibliaRM = '0';
                    }
                    if (jsonData[i].Es_Videos === "1") {
                        $("#EsVideoRM").prop("checked", true);
                        videoRM = '1';
                    } else {
                        $("#EsVideoRM").prop("checked", false);
                        videoRM = '0';
                    }
                    if (jsonData[i].Es_Musica === "1") {
                        $("#EsMusicaRM").prop("checked", true);
                        MusicaRM = '1';
                    } else {
                        $("#EsMusicaRM").prop("checked", false);
                        MusicaRM = '0';
                    }
                    if (jsonData[i].Es_Himinario === "1") {
                        $("#EsHiminarioRM").prop("checked", true);
                        HiminarioRM = '1';
                    } else {
                        $("#EsHiminarioRM").prop("checked", false);
                        HiminarioRM = '0';
                    }
                    SelectReEstBiblico(jsonData[i].id_Herramienta_Campana);
                }
            } else {

            }

        }
    });
}
function SelectReEstBiblico(a) {
    ListarEstudioBiblicoModificar()
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "LLenarEstudio", idc: a},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            if (jsonData.length > 0) {
                for (var i = 0; i < jsonData.length; i++) {
                    $("#EstudioBiblicoReunionM option[value='" + jsonData[i].id_Estudio_Biblico + "']").attr("selected", true);
                }
            } else {
            }
        }
    });
}

function LLenarModificar(id_Camp) {
    refreshSelectopcCE();
    refreshSelectPlatCE();
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "ListarCampanaById", idc: id_Camp},
        success: function (response)
        {
            var jsonData = JSON.parse(response);
            if (jsonData.length > 0) {
                for (var i = 0; i < jsonData.length; i++) {
                    $("#id_Camp").val(jsonData[i].id_Campana_Evangelistica);
                    $("#NombreCampanaM").val(jsonData[i].No_Campana_Evangelistica);
                    $("#OpcVideoM option[value='" + jsonData[i].Es_Video_Conferencia + "']").attr("selected", true);
                    if (jsonData[i].Es_Video_Conferencia === "C") {
                        $("#CampPLatM").css("display", "block");
                        $("#PlataformaVideoLLamadaM option[value='" + jsonData[i].Plataforma + "']").attr("selected", true);
                        if (jsonData[i].Plataforma === "J") {
                            $("#urlviM").css("display", "none");
                        } else if (jsonData[i].Plataforma === "S") {
                            $("#urlviM").css("display", "block");
                            $("#UrlVideoConferenciaM").val(jsonData[i].URL_Campana_Evangelistica);
                        }
                    } else if (jsonData[i].Es_Video_Conferencia === "S") {
                        $("#CampPLatM").css("display", "none");
                        $("#urlviM").css("display", "none");
                    }
                    $("#Cod_CampanaM").val(jsonData[i].Cod_Campana_Evangelistica);
                    $("#DescripcionM").val(jsonData[i].Des_Campana_Evangelistica);
                    $("#Fe_InicioM").val(jsonData[i].Fe_Inicio);
                    $("#Fe_FinM").val(jsonData[i].Fe_Final);
                }
            }
        }
    });
    SelectHerramienta(id_Camp);
}
function LLenarModificarReunionEstudio(id_Camp) {
    refreshSelectopcEB();
    refreshSelectPlatEB();
    $.ajax({
        type: "POST",
        url: '../Controlador/CampanaEvangelistica.php',
        data: {opc: "ListarCampanaById", idc: id_Camp},
        success: function (response)
        {
            ListarEstudioBiblico();
            var jsonData = JSON.parse(response);
            if (jsonData.length > 0) {
                for (var i = 0; i < jsonData.length; i++) {
                    $("#id_Est").val(jsonData[i].id_Campana_Evangelistica);
                    $("#NombreReunionM").val(jsonData[i].No_Campana_Evangelistica);
                    $("#OpcVideoReunionM option[value='" + jsonData[i].Es_Video_Conferencia + "']").attr("selected", true);
                    if (jsonData[i].Es_Video_Conferencia === "C") {
                        $("#CampPLatRM").css("display", "block");
                        $("#PlataformaVideoLLamadaReunionM option[value='" + jsonData[i].Plataforma + "']").attr("selected", true);
                        if (jsonData[i].Plataforma === "J") {
                            $("#urlviRM").css("display", "none");
                        } else if (jsonData[i].Plataforma === "S") {
                            $("#urlviRM").css("display", "block");
                            $("#UrlVideoConferenciaReunionM").val(jsonData[i].URL_Campana_Evangelistica);
                        }
                    } else if (jsonData[i].Es_Video_Conferencia === "S") {
                        $("#CampPLatRM").css("display", "none");
                        $("#urlviRM").css("display", "none");
                    }
                    $("#Cod_ReunionM").val(jsonData[i].Cod_Campana_Evangelistica);
                    $("#DescripcionReunionM").val(jsonData[i].Des_Campana_Evangelistica);
                    $("#Fe_InicioReunionM").val(jsonData[i].Fe_Inicio);
                    $("#Fe_FinReunionM").val(jsonData[i].Fe_Final);

                }
            }
        }
    });
    SelectHerramientaReunion(id_Camp);
    SelectReEstBiblico();
}
function Actualizardate() {
    var d = new Date();
    var dia;
    var mes;
    if (d.getDate() > 9) {
        dia = d.getDate();
    } else {
        dia = '0' + d.getDate();
    }
    if ((d.getMonth() + 1) > 9) {
        mes = (d.getMonth() + 1);
    } else {
        mes = '0' + (d.getMonth() + 1);
    }
    var ano = d.getFullYear();
    var strDate = ano + "-" + mes + "-" + dia;
    $("#Fe_InicioM").attr("min", strDate);
    $("#Fe_Inicio").attr("min", strDate);
    $("#Fe_FinM").attr("min", strDate);
    $("#Fe_Fin").attr("min", strDate);
    $("#Fe_InicioReunion").attr("min", strDate);
    $("#Fe_InicioReunionM").attr("min", strDate);
    $("#Fe_FinReunion").attr("min", strDate);
    $("#Fe_FinReunionM").attr("min", strDate);
}
$("#Fe_Inicio").on("change", function () {
    $("#Fe_Fin").attr("min", $("#Fe_Inicio").val());
});
$("#Fe_InicioM").on("change", function () {
    $("#Fe_Fin").attr("min", $("#Fe_Inicio").val());
});
$("#Fe_Fin").on("change", function () {
    $("#Fe_Inicio").attr("max", $("#Fe_Fin").val());
});
$("#Fe_FinM").on("change", function () {
    $("#Fe_InicioM").attr("max", $("#Fe_FinM").val());
});
$("#Fe_InicioReunion").on("change", function () {
    $("#Fe_FinReunion").attr("min", $("#Fe_InicioReunion").val());
});
$("#Fe_InicioReunionM").on("change", function () {
    $("#Fe_FinReunionM").attr("min", $("#Fe_InicioReunionM").val());
});
$("#Fe_FinReunion").on("change", function () {
    $("#Fe_InicioReunion").attr("max", $("#Fe_FinReunion").val());
});
$("#Fe_FinReunionM").on("change", function () {
    $("#Fe_InicioReunionM").attr("max", $("#Fe_FinReunionM").val());
});
$("#panHeadEsp").on("click", function () {
    if ($(".pan-bod-esPer").css("display") === "none") {
        $(".pan-bod-esPer").show("slow");
        $(".pan-bod-esBi").hide("slow");
        $(".pan-bod-cam").hide("slow");
        $(".pan-bod-escu").hide("slow");
        $("#panHeadEsp").css("border-radius", "10px 10px 0px 0px ");
        $("#panHeadEsBi").css("border-radius", "10px 10px 10px 10px ");
        $("#panHeadCamEva").css("border-radius", "10px 10px 10px 10px ");
        $("#panHeadEsSab").css("border-radius", "10px 10px 10px 10px ");
    } else {
        $("#panHeadEsp").css("border-radius", "10px 10px 10px 10px ");
        $(".pan-bod-esPer").hide("slow");
    }
});
$("#panHeadEsBi").on("click", function () {
    //alert();
    if ($(".pan-bod-esBi").css("display") === "none") {
        $("#panHeadEsBi").css("border-radius", "10px 10px 0px 0px ");
        $("#panHeadEsp").css("border-radius", "10px 10px 10px 10px ");
        $("#panHeadCamEva").css("border-radius", "10px 10px 10px 10px ");
        $("#panHeadEsSab").css("border-radius", "10px 10px 10px 10px ");
        $(".pan-bod-esPer").hide("slow");
        $(".pan-bod-esBi").show("slow");
        $(".pan-bod-cam").hide("slow");
        $(".pan-bod-escu").hide("slow");
    } else {
        $("#panHeadEsBi").css("border-radius", "10px 10px 10px 10px ");
        $(".pan-bod-esBi").hide("slow");
    }
});
$("#panHeadCamEva").on("click", function () {
    //alert();
    if ($(".pan-bod-cam").css("display") === "none") {
        $("#panHeadCamEva").css("border-radius", "10px 10px 0px 0px ");
        $("#panHeadEsp").css("border-radius", "10px 10px 10px 10px ");
        $("#panHeadEsBi").css("border-radius", "10px 10px 10px 10px ");
        $("#panHeadEsSab").css("border-radius", "10px 10px 10px 10px ");
        $(".pan-bod-esPer").hide("slow");
        $(".pan-bod-esBi").hide("slow");
        $(".pan-bod-cam").show("slow");
        $(".pan-bod-escu").hide("slow");
    } else {
        $("#panHeadCamEva").css("border-radius", "10px 10px 10px 10px ");
        $(".pan-bod-cam").hide("slow");
    }
});
$("#panHeadEsSab").on("click", function () {
    //alert();
    if ($(".pan-bod-escu").css("display") === "none") {
        $("#panHeadEsSab").css("border-radius", "10px 10px 0px 0px ");
        $("#panHeadEsp").css("border-radius", "10px 10px 10px 10px ");
        $("#panHeadEsBi").css("border-radius", "10px 10px 10px 10px ");
        $("#panHeadCamEva").css("border-radius", "10px 10px 10px 10px ");
        $(".pan-bod-esPer").hide("slow");
        $(".pan-bod-esBi").hide("slow");
        $(".pan-bod-cam").hide("slow");
        $(".pan-bod-escu").show("slow");
    } else {
        $("#panHeadEsSab").css("border-radius", "10px 10px 10px 10px ");
        $(".pan-bod-escu").hide("slow");
    }
});
$(".liespe").on("click", function () {
    if ($("#EsPersonal").css("display") === "none") {
        $("#EsPersonal").show("slow");
        $("#MusicaPe").hide("slow");
        $("#VideoPe").hide("slow");
        $(".icEsp").removeClass("fa-plus").addClass("fa-minus");
        $(".icvi").removeClass("fa-minus").addClass("fa-plus");
        $(".ismu").removeClass("fa-minus").addClass("fa-plus");
    } else {
        $("#EsPersonal").hide("slow");
        $(".icEsp").removeClass("fa-minus").addClass("fa-plus");
    }
});
$(".limu").on("click", function () {
    if ($("#MusicaPe").css("display") === "none") {
        $("#MusicaPe").show("slow");
        $("#EsPersonal").hide("slow");
        $("#VideoPe").hide("slow");
        $(".ismu").removeClass("fa-plus").addClass("fa-minus");
        $(".icEsp").removeClass("fa-minus").addClass("fa-plus");
        $(".icvi").removeClass("fa-minus").addClass("fa-plus");
    } else {
        $("#MusicaPe").hide("slow");
        $(".ismu").removeClass("fa-minus").addClass("fa-plus");
    }
});
$(".livi").on("click", function () {
    if ($("#VideoPe").css("display") === "none") {
        $("#VideoPe").show("slow");
        $("#EsPersonal").hide("slow");
        $("#MusicaPe").hide("slow");
        $(".icvi").removeClass("fa-plus").addClass("fa-minus");
        $(".ismu").removeClass("fa-minus").addClass("fa-plus");
        $(".icEsp").removeClass("fa-minus").addClass("fa-plus");
    } else {
        $("#VideoPe").hide("slow");
        $(".icvi").removeClass("fa-minus").addClass("fa-plus");
    }
});
$(".lienca").on("click", function () {
    if ($("#Encargado").css("display") === "none") {
        $("#Encargado").show("slow");
        $("#Participando").hide("slow");
        $(".icEnc").removeClass("fa-plus").addClass("fa-minus");
        $(".icPart").removeClass("fa-minus").addClass("fa-plus");
    } else {
        $("#Encargado").hide("slow");
        $(".icEnc").removeClass("fa-minus").addClass("fa-plus");
    }
});
$(".lipart").on("click", function () {
    if ($("#Participando").css("display") === "none") {
        $("#Participando").show("slow");
        $("#Encargado").hide("slow");
        $(".icPart").removeClass("fa-plus").addClass("fa-minus");
        $(".icEnc").removeClass("fa-minus").addClass("fa-plus");
    } else {
        $("#Participando").hide("slow");
        $(".icPart").removeClass("fa-minus").addClass("fa-plus");
    }
});
$(".liencaRe").on("click", function () {
    if ($("#EncargadoReunion").css("display") === "none") {
        $("#EncargadoReunion").show("slow");
        $("#ParticipandoReunion").hide("slow");
        $(".icEncR").removeClass("fa-plus").addClass("fa-minus");
        $(".icPartR").removeClass("fa-minus").addClass("fa-plus");
    } else {
        $("#EncargadoReunion").hide("slow");
        $(".icEncR").removeClass("fa-minus").addClass("fa-plus");
    }
});
$(".lipartRe").on("click", function () {
    if ($("#ParticipandoReunion").css("display") === "none") {
        $("#ParticipandoReunion").show("slow");
        $("#EncargadoReunion").hide("slow");
        $(".icPartR").removeClass("fa-plus").addClass("fa-minus");
        $(".icEncR").removeClass("fa-minus").addClass("fa-plus");
    } else {
        $("#ParticipandoReunion").hide("slow");
        $(".icPartR").removeClass("fa-minus").addClass("fa-plus");
    }
});

$(document).on('change', 'input[type="checkbox"]', function (e) {
    if ($('#EsBiblia').prop('checked') === true) {
        Biblia = '1';
    } else {
        Biblia = '0';
    }
    if ($('#EsHiminario').prop('checked') === true) {
        Himinario = '1';
    } else {
        Himinario = '0';
    }
    if ($('#EsMusica').prop('checked') === true) {
        Musica = '1';
    } else {
        Musica = '0';
    }
    if ($('#EsVideo').prop('checked') === true) {
        video = '1';
    } else {
        video = '0';
    }
    if ($('#EsBibliaR').prop('checked') === true) {
        BibliaR = '1';
    } else {
        BibliaR = '0';
    }
    if ($('#EsHiminarioR').prop('checked') === true) {
        HiminarioR = '1';
    } else {
        HiminarioR = '0';
    }
    if ($('#EsMusicaR').prop('checked') === true) {
        MusicaR = '1';
    } else {
        MusicaR = '0';
    }
    if ($('#EsVideoR').prop('checked') === true) {
        videoR = '1';
    } else {
        videoR = '0';
    }
    if ($('#EsBibliaM').prop('checked') === true) {
        BibliaM = '1';
    } else {
        BibliaM = '0';
    }
    if ($('#EsHiminarioM').prop('checked') === true) {
        HiminarioM = '1';
    } else {
        HiminarioM = '0';
    }
    if ($('#EsMusicaM').prop('checked') === true) {
        MusicaM = '1';
    } else {
        MusicaM = '0';
    }
    if ($('#EsVideoM').prop('checked') === true) {
        videoM = '1';
    } else {
        videoM = '0';
    }
    if ($('#EsBibliaRM').prop('checked') === true) {
        BibliaRM = '1';
    } else {
        BibliaRM = '0';
    }
    if ($('#EsHiminarioRM').prop('checked') === true) {
        HiminarioRM = '1';
    } else {
        HiminarioRM = '0';
    }
    if ($('#EsMusicaRM').prop('checked') === true) {
        MusicaRM = '1';
    } else {
        MusicaRM = '0';
    }
    if ($('#EsVideoRM').prop('checked') === true) {
        videoRM = '1';
    } else {
        videoRM = '0';
    }
});
function LimpiarIngresarCE() {
    $("#NombreCampana").val("");
    $("#UrlVideoConferencia").val("");
    $("#Cod_Campana").val("");
    $("#Descripcion").val("");
    $("#Fe_Inicio").val("");
    $("#Fe_Fin").val("");
    $("#EsBiblia").prop("checked", false);
    $("#EsHiminario").prop("checked", false);
    $("#EsMusica").prop("checked", false);
    $("#EsVideo").prop("checked", false);
    $(".LN").removeClass("state-error state-success");
    $(".LO").removeClass("state-error state-success");
    $(".LP").removeClass("state-error state-success");
    $(".LU").removeClass("state-error state-success");
    $(".LC").removeClass("state-error state-success");
    $(".LD").removeClass("state-error state-success");
    $(".LIN").removeClass("state-error state-success");
    $(".LFI").removeClass("state-error state-success");
}
function LimpiarModificarCE() {
    $("#NombreCampanaM").val("");
    $("#UrlVideoConferenciaM").val("");
    $("#Cod_CampanaM").val("");
    $("#DescripcionM").val("");
    $("#Fe_InicioM").val("");
    $("#Fe_FinM").val("");
    $("#EsBibliaM").prop("checked", false);
    $("#EsHiminarioM").prop("checked", false);
    $("#EsMusicaM").prop("checked", false);
    $("#EsVideoM").prop("checked", false);
    $(".LNM").removeClass("state-error state-success");
    $(".LOM").removeClass("state-error state-success");
    $(".LPM").removeClass("state-error state-success");
    $(".LUM").removeClass("state-error state-success");
    $(".LCM").removeClass("state-error state-success");
    $(".LDM").removeClass("state-error state-success");
    $(".LINM").removeClass("state-error state-success");
    $(".LFIM").removeClass("state-error state-success");
}
function LimpiaIngresarEB() {
    $("#NombreReunion").val("");
    $("#UrlVideoConferenciaReunion").val("");
    $("#Cod_Reunion").val("");
    $("#DescripcionReunion").val("");
    $("#Fe_InicioReunion").val("");
    $("#Fe_FinReunion").val("");
    $("#EsBibliaR").prop("checked", false);
    $("#EsHiminarioR").prop("checked", false);
    $("#EsMusicaR").prop("checked", false);
    $("#EsVideoR").prop("checked", false);
    $(".LNR").removeClass("state-error state-success");
    $(".LOR").removeClass("state-error state-success");
    $(".LPR").removeClass("state-error state-success");
    $(".LUR").removeClass("state-error state-success");
    $(".LCR").removeClass("state-error state-success");
    $(".LDR").removeClass("state-error state-success");
    $(".LER").removeClass("state-error state-success");
    $(".LINR").removeClass("state-error state-success");
    $(".LFIR").removeClass("state-error state-success");
    ListarEstudioBiblico();
}
function LimpiarModificarEB() {
    $("#NombreReunionM").val("");
    $("#UrlVideoConferenciaReunionM").val("");
    $("#Cod_ReunionM").val("");
    $("#DescripcionReunionM").val("");
    $("#Fe_InicioReunionM").val("");
    $("#Fe_FinReunionM").val("");
    $("#EsBibliaRM").prop("checked", false);
    $("#EsHiminarioRM").prop("checked", false);
    $("#EsMusicaRM").prop("checked", false);
    $("#EsVideoRM").prop("checked", false);
    $(".LNRM").removeClass("state-error state-success");
    $(".LORM").removeClass("state-error state-success");
    $(".LPRM").removeClass("state-error state-success");
    $(".LURM").removeClass("state-error state-success");
    $(".LCRM").removeClass("state-error state-success");
    $(".LDRM").removeClass("state-error state-success");
    $(".LCRM").removeClass("state-error state-success");
    $(".LINRM").removeClass("state-error state-success");
    $(".LFIRM").removeClass("state-error state-success");
    ListarEstudioBiblicoModificar();
}
function ValidarCod_Camp(a) {
    if ($("#Cod_Campana").val() === "") {
        return "0";
    } else {
        $.ajax({
            type: "POST",
            url: '../Controlador/CampanaEvangelistica.php',
            data: {opc: "ValidarCod_Camp", c: $("#Cod_Campana").val()},
            success: function (response)
            {
                var jsonData = JSON.parse(response);
                if (jsonData.length > 0) {
                    for (var i = 0; i < jsonData.length; i++) {
                        if (jsonData[i].cant !== "0") {
                            $(".LC").removeClass("state-success").addClass("state-error");
                            $("#valcod").css("display", "block");
                        } else {
                            if (a === 1) {
                                IngresarCampana();
                                ListarCampanas($("#id_Persona").val());
                                $("#CancelarAgreegCamp").click();
                                refreshSelectopcCE();
                                refreshSelectPlatCE();
                            } else {
                                $("#valcod").css("display", "none");
                            }
                        }
                    }
                }
            }
        });
    }

}