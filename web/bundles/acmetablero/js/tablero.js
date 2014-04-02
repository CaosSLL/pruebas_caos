var casillaActual = 0;
var avance = 1;
var dado = $("#dado");
var ficha = $("#ficha");
var datosCasilla = null;

$(document).ready(function() {

    $("table td").each(function(i) {
        $(this).attr("id", "casilla" + i);
    });

    ficha.css({
        top: $("#casilla0").position().top,
        left: $("#casilla0").position().left
    });

    dado.click(function() {
//        avance = Math.floor(Math.random() * (6 - 1 + 1)) + 1;
        avance = 1;
        dado.text(avance);
        setTimeout(function() {
            avanzar();
            dado.text("Tira!");
        }, 500);
    });

});

function avanzar() {

    var casillaDestino = casillaActual + avance;

    if (casillaDestino > 24) {
        casillaDestino -= 24;
    }

    var posicion = $("#casilla" + casillaDestino).position();
    ficha.animate({top: posicion.top, left: posicion.left});

    casillaActual = casillaDestino;
    
    obtenerDatosCasilla();

}

function obtenerDatosCasilla(){
    
    $.getJSON("casillaJSON/" + casillaActual, function(data) {
        datosCasilla = new Tierra();
        datosCasilla.casilla = data.casilla;
        datosCasilla.nombre = data.nombre;
        datosCasilla.mostrar();
    });
    
}