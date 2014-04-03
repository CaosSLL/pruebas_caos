var numCasillas = 16;
var casillaActual = 0;
var avance = 1;
var dado = $("#dado");
var ficha = $("#ficha");
var datosCasilla = null;

// Información de la partida
var tiradas = 0;
var casillasAvanzadas = 0;
var vueltas = 0;

$(document).ready(function() {

    // Como soy muy vago... añado dinamicamente la clase "casilla" a las celdas que tienen
    // un identificador...
    $("table td").each(function(i) {
//        $(this).attr("id", "casilla" + i);
        if ($(this).attr("id")) {
            $(this).addClass("casilla");
        }
    });

    ficha.css({
        top: $("#casilla0").position().top,
        left: $("#casilla0").position().left
    });

    dado.click(function() {
        avance = Math.floor(Math.random() * (6 - 1 + 1)) + 1;
//        avance = 1;
        dado.text(avance);
        setTimeout(function() {
            avanzar();
            dado.text("Tira!");
        }, 500);
    });

});

function avanzar() {

    var casillaDestino = casillaActual + avance;

    // Avanza de golpe de la casilla actual a la de destino
//    var posicion = $("#casilla" + casillaDestino).position();
//    ficha.animate({top: posicion.top, left: posicion.left});

    // Avanza de la casilla actual a la destino de una en una
    for (var i = (casillaActual+1); i <= casillaDestino; i++) {
        i > (numCasillas-1) ? c = i-numCasillas : c = i;
        var posicion = $("#casilla" + c).position();
        ficha.animate({
            top: posicion.top, 
            left: posicion.left
        },300);
    }
    
    if (casillaDestino > (numCasillas-1)) {
        casillaDestino -= numCasillas;
    }
    casillaActual = casillaDestino;
    obtenerDatosCasilla();
    guardarInfoPartida();

}

function obtenerDatosCasilla() {

    $.getJSON("casillaJSON/" + casillaActual, function(data) {
        datosCasilla = new Tierra();
        datosCasilla.casilla = data.casilla;
        datosCasilla.nombre = data.nombre;
        datosCasilla.mostrar();
    });

}

function guardarInfoPartida() {
    tiradas++;
    casillasAvanzadas += avance;
    vueltas = parseInt(casillasAvanzadas / 16);

    $("#infoPartida").text("Casillas avanzadas: " + casillasAvanzadas + "\nTiradas: " + tiradas + "\nVueltas: " + vueltas);

}