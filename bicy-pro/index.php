<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BICY-PRO</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 

   

    


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">


    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/design.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/magnific.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height:40rem;
        
      }
      /* Optional: Makes the sample page fill the window. */
     /* html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }*/
      .logo{
         padding-top: 0; padding-right: 30px;
      }




      
    </style>
    
    

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                  </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img class="img-rounded" src="img/bicy-pro/logobicy-pro.jpg" style="width:100px; height:50px;  left:0px; position: absolute; top: 13px;" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a id="service" class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a id="bikes" class="page-scroll" href="#portfolio">Bicicletas</a>
                    </li>
                    <li>
                        <!-- <a id="store" class="page-scroll" href="#about">Tienda</a> -->
                    </li>
                    <li>
                        <a id="gallery" class="page-scroll" href="#team">Galeria</a>
                    </li>
                    <li>
                        <a id="contac" class="page-scroll" href="#contact">Contáctanos</a>
                    </li>
                    <li>
                        <a id="world" class="page-scroll" href="#location">Ubicación</a>
                    </li>
                    <li>
                        <div style="top: 14px;" class="dropdown">
                          <i class="glyphicon glyphicon-globe fa-inverse"></i><a style="text-decoration:none;" id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Idioma
                            <span id="down" class="caret"></span>
                          </a>
                          <br><br>
                          <ul style="border:0.5px solid #ccc; background-color:black;" class="dropdown-menu" aria-labelledby="dLabel">
                            <li>
                                <span><img src="img/icons/gb.png" class="col-md-4 img-circle" alt=""><a id="en" style="text-decoration:none;"class="dropdown-item" href="#">Ingles</a></span>
                            </li>
                            <hr>
                            <li>
                                <span><img src="img/icons/es.png" class="col-md-4 img-circle" alt=""><a id="es" style="text-decoration:none;"class="dropdown-item" href="#">Español</a></span>
                            </li>
                          </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
    <div id="container-floating">

     
      <a href=""><div class="nd4 nds" data-toggle="tooltip" data-placement="left" data-original-title="contract@gmail.com"><img class="reminder"></a>
       
      </div>
      <div class="nd3 nds" data-toggle="tooltip" data-placement="left" data-original-title="Reminder"><img class="reminder" /></div>
      <div id="bshare_fb" class="btn nd1 nds" ></div>

      <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
        <p  style="font-size: x-small" class="plus"><b id="share">Compartir</b></p>
        <img class="edit" src="img/icons/share.png">
      </div>

    </div>

      <!--   <br><br><br><br><br><br>
        <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a> -->
    <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- Third Slide -->
            <div class="item active">

                <!-- Slide Background -->
                <img src="img/head/1.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>

                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_left">
                            <br><br><br>
                            <h1 id="title1" data-animation="animated zoomInRight">bicicletas de montaña</h1>
                            <p id="description1" data-animation="animated fadeInLeft">Alquiler de bicicletas profesionales.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">

                <!-- Slide Background -->
                <img src="img/head/2.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <h1 id="brand" data-animation="animated flipInX">Variedad de marcas</h1>
                    <p id="style" data-animation="animated lightSpeedIn">Estilos y diseños.</p>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Four Slide -->
            <div class="item">

                <!-- Slide Background -->
                <img src="img/head/3.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_left">
                    <h1 id="enjoy" data-animation="animated zoomInRight">Disfruta</h1>
                    <p id="explore" data-animation="animated fadeInLeft">Explora Valle de Angeles en bicicletas profesionales.</p>
                </div>

            </div>





            <!-- Five Slide -->
            <div class="item active">

                <!-- Slide Background -->
                <img src="img/head/4.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>

                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_left">
                            <br><br><br>
                            <h1 id="ride" data-animation="animated zoomInRight">Pasea</h1>
                            <p id="fun" data-animation="animated fadeInLeft">Diviertete en familia.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Slide -->
            <!-- End of Slide -->


        </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div> <!-- End  bootstrap-touch-slider Slider -->
    
          
            
        

    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 id="service_page1" class="section-heading">Servicios</h2>
                    <h3 id="service_page2" class="section-subheading text-muted">Servicios que brinda BICY-PRO al publico.</h3>
                    
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-offset-1 col-md-2">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa-stack-1x fa-inverse"><img src="img/icons/bikehelmet.png" style="width:65px;" alt=""></i>
                    </span>
                    <h4 id="service_bikes" class="service-heading">Bicicletas</h4>
                    <p id="p_bike" class="text-muted">Alquiler de bicicletas este servicio incluye el equipo de seguridad.</p>
                    <button  href="#mservice_bike" data-toggle="modal" style="width:45%;" class="read portfolio-link btn btn-danger btn-xs col-md-offset-3 col-md-2 form-control">
                    Leer mas...</button> 
                </div>
                <div class="col-md-2">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa-stack-1x fa-inverse"><img src="img/icons/gopro.png" style="width:65px;" alt=""></i>
                    </span>
                    <h4 id="accessory" class="service-heading">Accesorios</h4>
                    <p id="p_gopro" class="text-muted">Alquiler de camaras GoPro para que tu experiencia sea grabada. </p>
                    
                    <button  href="#mservice_bike" data-toggle="modal" style="width:45%;" class="read portfolio-link btn btn-danger btn-xs col-md-offset-3 col-md-2 form-control">
                    Leer mas...</button>
                </div>
                <div class="col-md-2">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa-stack-1x  fa-inverse"><img src="img/icons/smoothie.png" style="width:65px;" alt=""></i>
                    </span>
                    <h4 id="drinks" class="service-heading">Bebidas</h4>
                    <p id="p_drink" class="text-muted">Venta de licuados, cafe, jugos naturales, rehidratantes y agua.
                    </p>
                    <button  href="#mservice_bike" data-toggle="modal" style="width:45%;" class="read portfolio-link btn btn-danger btn-xs col-md-offset-3 col-md-2 form-control">
                    Leer mas...</button>
                </div>
                <div class="col-md-2">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="glyphicon glyphicon-cutlery fa-stack-1x  fa-inverse"></i>
                    </span>
                    <h4 id="food" class="service-heading">Comida</h4>
                    <p id="p_food" class="text-muted">Venta de deliciosos elotes,baleadas,pasteles tradicionales de la región.
                    </p>
                    <button  href="#mservice_bike" data-toggle="modal" style="width:45%;" class="read portfolio-link btn btn-danger btn-xs col-md-offset-3 col-md-2 form-control">
                    Leer mas...</button>
                    
                </div>
                <div class="col-md-2">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa-stack-1x  fa-inverse"><img src="img/icons/trail.png" style="width:70px;"  alt=""><br><br></i>
                    </span>
                    <h4 id="trail" class="service-heading">Senderos</h4>
                    <p id="p_trail" class="text-muted">Lo llevamos a senderos y lugares con hermosas paisajes.
                    </p>
                    <button  href="#mservice_bike" data-toggle="modal" style="width:45%;" class="read portfolio-link btn btn-danger btn-xs col-md-offset-3 col-md-2 form-control">
                    Leer mas...</button>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" id="title_bike" style="color:#FFD700">Bicicletas</h2>
                    <h3 id="catalogue_title" class="section-subheading text-muted">Catalogo de bicicletas</h3>
                </div>
                <div>

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a id="pag1" style="color:black;" href="#page1" aria-controls="page1" role="tab" data-toggle="tab">Pagina 1</a></li>
                    <li role="presentation"><a  id="pag2" href="#page2" style="color:black;" aria-controls="page2" role="tab" data-toggle="tab">Pagina 2</a></li>
                    <li role="presentation"><a  id="pag3" href="#page3" style="color:black;" aria-controls="page3" role="tab" data-toggle="tab">Pagina 3</a></li>
                   <!--  <li role="presentation"><a href="#page4" aria-controls="page4" role="tab" data-toggle="tab">Pagina 4</a></li>
                    <li role="presentation"><a href="#page5" aria-controls="page5" role="tab" data-toggle="tab">Pagina 5</a></li>
                    <li role="presentation"><a href="#page6" aria-controls="page6" role="tab" data-toggle="tab">Pagina 6</a></li> -->
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="page1">
                        <div class="well">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/1.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                       <h4 class="">Specialized</h4>
                                        <p class="text-muted">Bicicleta de montaña</p> 
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/2.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Cannondale</h4>
                                        <p class="text-muted">Bicicleta de montaña</p>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/3.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Mongoose</h4>
                                        <p class="text-muted">Fat Tires</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/4.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Mongoose</h4>
                                        <p class="text-muted">Clasica</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/5.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Mongoose</h4>
                                        <p class="text-muted">Bicicleta de montaña</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/6.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Specialized</h4>
                                        <p class="text-muted">Bicicleta de montaña</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="page2">
                       <div class="well">
                           <div class="row">
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/7.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Giant</h4>
                                        <p class="text-muted">Bicicleta de montaña</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/8.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Trek</h4>
                                        <p class="text-muted">Bicileta de montaña</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/9.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Specialized</h4>
                                        <p class="text-muted">Para senderos</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal10" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/10.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Cannondale</h4>
                                        <p class="text-muted">Downhill</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal11" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/11.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Jamis</h4>
                                        <p class="text-muted">Para senderos</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal12" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/12.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Specialized</h4>
                                        <p class="text-muted">Para senderos</p>
                                    </div>
                                </div>

                           </div> 
                       </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="page3">
                        <div class="well">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal13" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/13.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Specialized</h4>
                                        <p class="text-muted">Bicleta para montaña</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal14" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/14.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4 class="">Specialized</h4>
                                        <p class="text-muted">Downhill</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/14.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Treehouse</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/10.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Golden</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/11.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Escape</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/catalogue/9.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Dreams</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>

                            </div>  
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="page4">
                        <div class="well">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Round Icons</h4>
                                        <p class="text-muted">Graphic Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa-3x"><img class="logo" src="img/bicy-pro/logobicy-pro.png" alt=""></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Startup Framework</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Treehouse</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Golden</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Escape</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Dreams</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="page5">
                        <div class="well">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Round Icons</h4>
                                        <p class="text-muted">Graphic Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Startup Framework</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Treehouse</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Golden</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Escape</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Dreams</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="page6">
                        <div class="well">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Round Icons</h4>
                                        <p class="text-muted">Graphic Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Startup Framework</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Treehouse</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Golden</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Escape</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-bicycle fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>Dreams</h4>
                                        <p class="text-muted">Website Design</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                  </div>

                </div>
            </div>
         


        </div>
    </section>
        
     <!-- Clients Aside -->
    <aside class="clients" style="background-color:#A9A9A9;">
        <div class="container">
            <div class="row">
                <h4 >Nuestras marcas</h4>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <img src="img/marcs/specialized.png" class="col-md-9 img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-2">
                    <br>
                    <img src="img/marcs/cannondale.png" class="img-responsive img-centered" alt="">
                </div>
                <div class="col-md-2 col-sm-2">
                    
                        <img src="img/marcs/mongoose.png" style="width:200px" class="col-md-7 img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-md-2 col-sm-2">
                    
                        <br>
                        <img src="img/marcs/trek.png" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-md-2 col-sm-2">
                    
                        <br><br>
                        <img src="img/marcs/giant.png" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-md-2 col-sm-2">
                    
                        <br><br>
                        <img src="img/marcs/jamis.png" class="img-responsive img-centered" alt="">
                   
                </div>
                
                
                
            </div>
        </div>
    </aside>       
    

  

    <!-- About Section -->
  <!--   <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tienda</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 id="gallery_label" style="color:#FFD700" class="section-heading">Galeria</h2>
                    <br>
                    <button onclick="window.open(href='https://www.instagram.com/bicypro/')"  id="" class="btn_insta" style="font-size:20px; font-family: 'Lobster', cursive;" ><label for="" id="btn_insta">Siguenos en </label> <img  style=" margin-left: 10px; position:relative; width:40px;" src="img/icons/Instagram.png" alt=""></button>
                </div>
            </div>
            
        </div>
        <br>
        <div>
            <div class="container" >
                <div id="instafeed-gallery-feed" class="gallery row no-gutter">


            </div>

            <button id="btn-instafeed-load"  class="btn">Cargar mas</button>
            
        </div>
    </section>

  

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- map -->   
    <section id="location" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="">asdasdasd</label>
                </div>
                <div class="col-md-6 well">
                    <div id="map"></div>
                </div>
            </div>
            
        </div>
    </section>
        

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->



    <!-- Portfolio Modal service -->
    <div class="portfolio-modal modal fade" id="mservice_bike" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            
                <!-- <i style="left:0px;" class="fa-stack-2x fa-inverse glyphicon glyphicon-remove-sign"  data-dismiss="modal"></i> -->
                 <!-- <button type="button" class="fa-inverse fa-stack-2x close" data-dismiss="modal">&times;</button> -->
                <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider1" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider1" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider1" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider1" data-slide-to="2"></li>
                            
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/1.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/2.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/3.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider1" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider1" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                       
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider2" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider2" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider2" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider2" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/2.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/3.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/4.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider2" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider2" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider3" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider3" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider3" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider3" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/3.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/4.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/5.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider3" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider3" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider4" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider4" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider4" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider4" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/4.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/5.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/6.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider4" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider4" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider5" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider5" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider5" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider5" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/5.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/6.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/7.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider5" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider5" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider6" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider6" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider6" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider6" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/6.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/7.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/8.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider6" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider6" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 7 -->
    <div class="modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider7" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider7" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider7" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider7" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/7.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/8.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/9.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider7" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider7" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 8 -->
    <div class="modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider8" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider8" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider8" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider8" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/8.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/9.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/10.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider8" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider8" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 9 -->
    <div class="modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider9" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider9" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider9" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider9" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/9.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/10.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/11.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider9" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider9" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 10 -->
    <div class="modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider10" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider10" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider10" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider10" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/10.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/11.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/12.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider10" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider10" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 11 -->
    <div class="modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider11" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider11" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider11" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider11" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/11.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/12.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/13.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider11" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider11" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 12 -->
    <div class="modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider12" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider12" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider12" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider12" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/12.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/13.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/14.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider12" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider12" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 13 -->
    <div class="modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider13" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider13" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider13" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider13" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/13.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/14.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/1.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider13" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider13" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

    <!-- Portfolio Modal 14 -->
    <div class="modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="content">
            <img style="width:40px;" data-dismiss="modal" class="close" src="img/icons/x.png" alt="">
            <div class="container">
                <div class="col-lg-11">
                        
                    <div id="bootstrap-touch-slider14" style="position: absolute;left:10rem; top:5rem;" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider14" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider14" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider14" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper For Slides -->
                        <div class="carousel-inner" role="listbox">

                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="img/catalogue/14.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/1.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                            <!-- End of Slide -->

                            <!-- Four Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="img/catalogue/2.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                            </div>
                        </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                        <a class="left carousel-control" href="#bootstrap-touch-slider14" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- Right Control -->
                        <a class="right carousel-control" href="#bootstrap-touch-slider14" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!-- End  bootstrap-touch-slider Slider -->
                        
                </div>
           </div>
        </div>
    </div>

   

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
   



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
     <script>
      // The following example creates a marker in Stockholm, Sweden using a DROP
        // animation. Clicking on the marker will toggle the animation between a BOUNCE
        // animation and no animation.

        var marker;

        function initMap() {
          var bicy_pro =  {lat: 14.147945, lng: -87.051856}
          var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: bicy_pro
          });

        var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">BICY-PRO</h1>'+
        '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });


          marker = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position: bicy_pro,
            title: 'BICY-PRO'

          });
           marker.addListener('click', function() {
          infowindow.open(map, marker);
        });

        }

        function toggleBounce() {
          if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
          } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
          }
        }

    </script>
    <script src="js/translate.js"></script>

 <script src='http://connect.facebook.net/en_US/all.js'></script>

    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJJakQIAxdU-sAGgmFAzB692VAqhWj5AQ &callback=initMap">
    </script>
    <script src="js/effect.js"></script>
    <script>
        $('#myDropdown').on('show.bs.dropdown', function () {
        // do something…
        })
    </script>

    <script>
    document.getElementById('bshare_fb').onclick = function() {
      FB.ui({
  method: 'share',
  href: 'https://www.specialized.com/hn/ea',
}, function(response){});
    }
    </script>

    
    

     <!-- Intafeed JS -->
    <script src="js/instafeed.min.js"></script>
    <script src="js/magnific.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
