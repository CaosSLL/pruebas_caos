$(document).ready(function() {

//  Panel de información del usuario
    ocultar();
    $(".panel_usuario").hover(function() {
        $(".nombre_usuario").show();
        $(".boton_salir").show();
        $(this).animate({
            width: "160px"
        });
        $(".plegar").remove();
    }, ocultar);
    
//  Efecto visual para las opciones del menu principal
    $(".opcion").hover(function() {
        $(this).animate({width: "100%"});
    }, function() {
        $(this).animate({width: "50%"});
    });
    
//  Dialog para logearse
    $(".dialog_logearse").dialog({
        autoOpen: false,
        modal: true,
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        },
        buttons: {
            "Aceptar": function() {
                $("form[name='formulario_login']").submit();
                $(this).dialog("close");
            },
            Cancel: function() {
                $(this).dialog("close");
            }
        }
    });
    $("#logearse").click(function() {
        $(".dialog_logearse").dialog("open");
    });
    
});

function ocultar() {
    $(".nombre_usuario").hide();
    $(".boton_salir").hide();
    $(".panel_usuario").animate({
        width: "3px"
    });
    $(".panel_usuario   ").append("<span class='plegar'><</span>");
}