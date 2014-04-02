function Tierra() {
    
    this.casilla = 0;
    this.nombre = "";
    
    this.mostrar = function() {
        $("#casilla"+this.casilla).html("<h3>"+this.nombre+"</h3>");
    };
    
}

function Propiedad() {
    
    this.casilla = 0;
    this.nombre = "";
    
    this.mostrar = function() {
        $("#casilla"+this.casilla).html("<h3>"+this.nombre+"</h3>");
    };
    
}