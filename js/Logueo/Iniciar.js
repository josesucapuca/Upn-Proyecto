$(document).ready(function (){
        $('#login').click(function (){
//            alert("entrooo c:");

            var Usuario = $('#Usuario').val();
            var Password = $('#Password').val();           
            if($.trim(Usuario).length > 0 && $.trim(Password).length > 0){
                alert();
//                alert(Usuario);
//                alert(Password);
                $.ajax({                   
                    url:"Controlador/Sesion.php",
                    method:"POST",
                    data:{Usuario:Usuario, Password:Password},
                    cache:"false",
                    beforeSend:function() {
//                        alert("conectando");
                        $('#login').val(".....");
                    },
                    success: function (data) {
//                        alert(data);
                        $('#login').val("Ingresar");
                        if (data !== '0'){
//                            console.log(data);
//                            alert(data);
//                            alert("si");
                            $(location).attr('href', 'welcome.php');
                        } else{
                            alert("No");
                            $("#result").html("<div class='alert .alert-dismissable alert-danger'><button type='button'\n\
                                               class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong>Las \n\
                                               credenciales son incorrecto</div>");
                        }
                    }
                });
            };
        });
    });
