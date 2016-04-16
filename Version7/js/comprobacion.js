$(document).ready(function(){

    var consulta;

    //hacemos focus
    $("#correoUsuario").focus();

    //comprobamos si se pulsa una tecla
    $("#correoUsuario").keyup(function(e){
        //obtenemos el texto introducido en el campo
        consulta = $("#usuario").val();

        //hace la búsqueda
        $("#correoUsuario").delay(1000).queue(function(n) {
            $.ajax({
                type: "POST",
                url: "comprobar.php",
                data: "b="+consulta,
                dataType: "html",
                error: function(){
                    alert("error petición ajax");
                },
                success: function(data){
                    alert("Registro exitoso");
                    n();
                }
            });

        });

    });

});