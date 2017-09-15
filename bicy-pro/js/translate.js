$(document).ready(function(){
	eventos();	
});


function eventos(){
  $("#en").on("click", function(e){
    e.preventDefault();
    $("#service").text("Services");
    $("#bikes").text("Bikes");
    $("#store").text("Store");
    $("#gallery").text("Gallery");
    $("#contac").text("Contact us");
    $("#world").text("Location");
    $("#dLabel").text(" language");
    $("#dLabel").append( " <span class='caret'></span>" );
    $("#en").text("English");
    $("#es").text("Spanish");

    $("#share").text("Share");

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
    $("#p_bike").text("Bike rental this service includes security equipment.");
    $(".read").text("Read more...");
    $("#accessory").text("Accessories");
    $("#p_gopro").text("Rental of GoPro cameras to make your experience recorded.");
    $("#drinks").text("Drinks");
    $("#p_drink").text("Sale of smoothies, coffee, natural juices, rehydrating and water.");
    $("#food").text("Food");
    $("#p_food").text("Sale of delicious elotes, baleadas, traditional cakes of the region.");
    $("#trail").text("Trails");
    $("#p_trail").text("We take you to trails and places with beautiful landscapes.");
    
    $("#title_bike").text("Bikes");
    $("#catalogue_title").text("Bicycle catalog");
    $("#pag1").text("Page 1");
    $("#pag2").text("Page 2");
    $("#pag3").text("Page 3");

    $("#gallery_label").text("Gallery");
    $("#btn_insta").text("Follow us on");
    $("#btn-instafeed-load").text("Load more");


  })


  $("#es").on("click", function(e){
    e.preventDefault();
    $("#service").text("Servicios");
    $("#bikes").text("Bicicletas");
    $("#store").text("Tienda");
    $("#gallery").text("Galeria");
    $("#contac").text("Contáctanos");
    $("#world").text("Ubicación");
    $("#dLabel").text(" Idioma");
    $("#dLabel").append( " <span class='caret'></span>" );
    $("#en").text("Ingles");
    $("#es").text("Español");

    $("#share").text("Compartir");

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
    $("#p_bike").text("Alquiler de bicicletas este servicio incluye el equipo de seguridad.");
    $(".read").text("Leer mas...");
    $("#accessory").text("Accesorios");
    $("#p_gopro").text("Alquiler de camaras GoPro para que tu experiencia sea grabada.");
    $("#drinks").text("Bebidas");
    $("#p_drink").text("Venta de licuados, cafe, jugos naturales, rehidratantes y agua.");
    $("#food").text("Comida");
    $("#p_food").text("Venta de deliciosos elotes,baleadas,pasteles tradicionales de la región.");
    $("#trail").text("Senderos");
    $("#p_trail").text("Lo llevamos a senderos y lugares con hermosas paisajes.");
    
    $("#title_bike").text("Bicicletas");
    $("#catalogue_title").text("Catalogo de bicicletas");
    $("#pag1").text("Pagina 1");
    $("#pag2").text("Pagina 2");
    $("#pag3").text("Pagina 3");

    $("#gallery_label").text("Galeria");
    $("#btn-instafeed-load").text("Cargar mas");

    $("#btn_insta").text("Siganos en");
  })
}



