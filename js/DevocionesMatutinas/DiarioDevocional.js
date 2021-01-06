$(document).ready(function () {
                $('#CalendarioWeb').fullCalendar({
                    header: {
                        left: 'today prev,next',
                        center: 'title',
                        right: 'month,basicweek, basicDay, agendaWeek, agendaDay'
                    },
                    dayClick: function (date, jsEvent, view) {
                        $('#btnAgregar').prop("disabled",false);
                        $('#btnModificar').prop("disabled",true);
                        $('#btnEliminar').prop("disabled",true);
                        
                        limpiar();
                        $('#txtFecha').val(date.format());
                        $("#ModalEventos").modal();

                    },
                    events: 'http://localhost/calendario/eventos.php',
                    eventClick: function (calEvent, jsEvent, view) {
                        
                        $('#btnAgregar').prop("disabled",true);
                        $('#btnModificar').prop("disabled",false);
                        $('#btnEliminar').prop("disabled",false);
                        
                        $('#tituloEvento').html(calEvent.title);
                        //Mostrar información de los eventos
                        $('#txtDescripcion').val(calEvent.descripcion);
                        $('#txtID').val(calEvent.ideventos);
                        $('#txtTitulo').val(calEvent.title);
                        $('#txtColor').val(calEvent.color);
                        FechaHora = calEvent.start._i.split(" ");
                        $('#txtFecha').val(FechaHora[0]);
                        $('#txtHora').val(FechaHora[1]);

                        $("#ModalEventos").modal();

                    },
                    editable: true,
                    eventDrop: function (calEvent) {
                        $('#txtID').val(calEvent.ideventos);
                        $('#txtTitulo').val(calEvent.title);
                        $('#txtColor').val(calEvent.color);
                        $('#txtDescripcion').val(calEvent.descripcion);

                        var fechaHora = calEvent.start.format().split("T");
                        $('#txtFecha').val(fechaHora[0]);
                        $('#txtHora').val(fechaHora[1]);

                        RecolectarDatos();
                        EnviarInformacion('modificar', NuevoEvento, true);
                    }

                });
            });
 
var NuevoEvento;
            $('#btnAgregar').click(function () {
                RecolectarDatos();
                EnviarInformacion('agregar', NuevoEvento);
            });

            $('#btnEliminar').click(function () {
                RecolectarDatos();
                EnviarInformacion('eliminar', NuevoEvento);
            });

            $('#btnModificar').click(function () {
                RecolectarDatos();
                EnviarInformacion('modificar', NuevoEvento);
            });
            function RecolectarDatos() {
                NuevoEvento = {
                    ideventos: $('#txtID').val(),
                    title: $('#txtTitulo').val(),
                    start: $('#txtFecha').val() + " " + $('#txtHora').val(),
                    color: $('#txtColor').val(),
                    descripcion: $('#txtDescripcion').val(),
                    textColor: "#FFFFFF",
                    end: $('#txtFecha').val() + " " + $('#txtHora').val()
                };
            }
            function EnviarInformacion(accion, objEvento, modal) {
                $.ajax({
                    type: 'POST',
                    url: 'eventos.php?accion=' + accion,
                    data: objEvento,
                    success: function (msg) {
                        if (msg) {
                            $('#CalendarioWeb').fullCalendar('refetchEvents');
                            if (!modal) {
                                $("#ModalEventos").modal('toggle');
                            }

                        }
                    },
                    error: function () {
                        alert("Hay un error...");
                    }
                });
            }

            function limpiar() {
                $('#txtID').val('');
                $('#txtTitulo').val('');
                $('#txtColor').val('');
                $('#txtDescripcion').val('');
            }




