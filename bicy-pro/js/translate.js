$(document).ready(function(){
	eventos();	
});


function eventos(){
  $("#en").on("click", function(e){
    e.preventDefault();
    $("#service").text("Services");
    $("#bikes").text("Bikes");
    $("#world").text("Location");
    $("#dLabel").text(" language");
    $("#dLabel").append( " <span class='caret'></span>" );
    $("#en").text("English");
    $("#es").text("Spanish");
    $("#title1").text("Mountain bikes");
    $("#description1").text("Professional bicycle rental");
    $("#brand").text("Variety of brands");
    $("#style").text("Styles and designs");
    $("#enjoy").text("Enjoy");
    $("#explore").text("Explore Valle de Angeles on professional bikes.");
    $("#ride").text("Ride");
    $("#fun").text("Have fun with family");
    $("#service_page1").text("Services");
    $("#service_page2").text("Services provided by BICI-PRO to the public.");
    $("#service_bikes").text("Bike");
    $("#accessory").text("Accessory");
    $("#drinks").text("Drinks");
    $("#food").text("Food");
    // $('#down').addClass('glyphicon glyphicon-triangle-bottom');
    $("#title_bike").text("Bikes");
    $("#catalogue_title").text("Bicycle catalog");
    $("#pag1").text("Page 1");
    $("#pag2").text("Page 2");
    $("#pag3").text("Page 3");
  })


  $("#es").on("click", function(e){
    e.preventDefault();
    $("#service").text("Servicios");
    $("#bikes").text("Bicicletas");
    $("#world").text("Ubicación");
    $("#dLabel").text(" Idioma");
    $("#dLabel").append( " <span class='caret'></span>" );
    $("#en").text("Ingles");
    $("#es").text("Español");
    $("#title1").text("Bicicletas de montaña");
    $("#description1").text("Alquiler de bicicletas profesionales");
    $("#brand").text("Variedad de marcas");
    $("#style").text("Estilos y diseños");
    $("#enjoy").text("Disfruta");
    $("#explore").text("Explora Valle de Angeles en bicicletas profesionales.");
    $("#ride").text("Pasea");
    $("#fun").text("Diviertete en familia.");
    $("#service_page1").text("Servicios");
    $("#service_page2").text("Servicios que brinda BICY-PRO al publico.");
    $("#service_bikes").text("Bicicleta");
    $("#accessory").text("Accesorios");
    $("#drinks").text("Bebidas");
    $("#food").text("Comida");
    // $("#down").addClass("glyphicon glyphicon-triangle-bottom");
    $("#title_bike").text("Bicicletas");
    $("#catalogue_title").text("Catalogo de bicicletas");
    $("#pag1").text("Pagina 1");
    $("#pag2").text("Pagina 2");
    $("#pag3").text("Pagina 3");
  })
}



