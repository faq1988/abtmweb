<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ABTM Web</title>

 <!-- Custom CSS -->
  
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>sliderstyle/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>sliderstyle/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>sliderstyle/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">      
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>creativetheme/img/logo.png" class="logo" alt=""></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            
           <ul class="nav navbar-nav navbar-center">

               <li>
                        <a href="<?=base_url()?>Principal">Noticias</a>
                    </li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Torneos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?=base_url()?>ComoParticipar">Como participar</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Principal/Calendario">Calendario</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Principal/Fotos">Fotos</a>
                            </li>
                           
                        </ul>
                    </li>
                   
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ranking <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?=base_url()?>Ranking">Super división</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Ranking/rankingprimera">Primera</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Ranking/rankingsegunda">Segunda</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Ranking/rankingtercera">Tercera</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Ranking/rankingcuarta">Cuarta</a>
                            </li>
                           
                        </ul>
                    </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Circuito ABTM <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?=base_url()?>Circuitoabtm/autoridades">Autoridades</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Circuitoabtm">Reglamento</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Principal/Disciplina">Disciplina</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Circuitoabtm/sistemapuntaje">Sistema de puntaje</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Circuitoabtm/dondejugar">Donde jugar</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Contacto">Contáctenos</a>
                            </li>
                           
                        </ul>
                    </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tenis de Mesa <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?=base_url()?>Principal/Reglamentoittf">Reglamento</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Principal/Historia">Historia</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Principal/Enlaces">Enlaces</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Principal/Venta">Venta de productos</a>
                            </li>
                           
                        </ul>
                    </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>   
</nav>


   <!-- Navigation 
    <nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#041365;">
        <div class="container">
           
            <div class="navbar-header">
                
                <div style="margin-top: 2%">
                 <img style="width: 30%; height: 30%;" src="<?=base_url()?>creativetheme/img/logo.png" alt="">
                
                 <a href="index.html">Asociación Bahiense de Tenis de Mesa</a>
                </div>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?=base_url()?>">Inicio</a>
                    </li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Torneos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?=base_url()?>ComoParticipar">Como participar</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Principal/Calendario">Calendario</a>
                            </li>
                            <li>
                                <a href="#">Fotos</a>
                            </li>
                           
                        </ul>
                    </li>
                   
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ranking <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?=base_url()?>Ranking">Super división</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Ranking/rankingprimera">Primera</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Ranking/rankingsegunda">Segunda</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Ranking/rankingtercera">Tercera</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Ranking/rankingcuarta">Cuarta</a>
                            </li>
                           
                        </ul>
                    </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Circuito ABTM <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?=base_url()?>Circuitoabtm/autoridades">Autoridades</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Circuitoabtm">Reglamento</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Principal/Disciplina">Disciplina</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Circuitoabtm/sistemapuntaje">Sistema de puntaje</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Circuitoabtm/dondejugar">Donde jugar</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Contacto">Contáctenos</a>
                            </li>
                           
                        </ul>
                    </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tenis de Mesa <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?=base_url()?>Principal/Reglamentoittf">Reglamento</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Principal/Historia">Historia</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Principal/Enlaces">Enlaces</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Principal/Venta">Venta de productos</a>
                            </li>
                           
                        </ul>
                    </li>
                   
                </ul>
            </div>
           
        </div>
        
    </nav>
-->
  
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?=base_url()?>sliderstyle/img/uno.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?=base_url()?>sliderstyle/img/dos.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?=base_url()?>sliderstyle/img/tres.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
             <div class="item">
                <div class="fill" style="background-image:url('<?=base_url()?>sliderstyle/img/cuatro.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 4</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
