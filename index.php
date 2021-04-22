<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="https://kit.fontawesome.com/8c9a32e334.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    <title>Tema - DK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo">
                    <img src="images/logo.png" alt="">
                </div><!--logo -->
            </header><!--header -->
            <ul class="menu-desktop">
                 <li><a href="">Home</a></li>
                 <li><a href="">Sobre</a></li>
                 <li><a href="">Contato</a></li>
            </ul><!-- menu -->

              
              <div class="menu-mobile">  <!-- menu mobile -->
                <i class="fas fa-align-right"></i>
                  <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                  </ul>
             </div> <!-- END menu mobile -->
                   

            <div class="clear"></div>
            <br />
            <br />
            <div class="w50 time-descricao">
                <h2>Melhore a comunicação com seu cliente e time</h2>
                <p>Consultoria especializada em statups, empresas, principalmente, pessoas</p>
                <a target="_blank" href="https://dankicode.com">Ver demonstração</a>
            </div><!--w50 -->
            <div class="w50 time-imagem">
                <img src="images/equipe.png">
            </div><!-- w50-2 -->
            <div class="clear"></div>
         </div> <!-- center -->
    </section><!-- topo -->
      <div class="circle"><i class="fas fa-angle-down"></i></div>
        <section class="clientes-slider">   
            
            <div class="center">
                <div style="max-width: 700px; margin:0 auto; overflow: hidden;" class="slider-container">
                <img src="images/amazon.jpg"/>
                <img src="images/costco.jpg"/>
                <img src="images/dominos.jpg"/>
                <img src="images/uber.jpg"/>
                <img src="images/walmart.jpg"/>
                </div>
            </div><!-- center -->
        </section>

<!-- Seção diferenciados-->
    <section class="diferenciais">
        <div class="center">
            <h2>Contribuimos de ponta a ponta</h2>
                <div class="icons-diferenciais">
                    <div class="box-single-diferenciais">
                        <img src="images/icon1.png"/>
                        <h3>Ambientes mobile</h3>
                            <p>Lorem ipsum dolor sit amet at eius doloribus dolores </p>
                    </div><!-- box-single-diferenciais -->

                    <div class="box-single-diferenciais">
                        <img src="images/icon2.png"/>
                        <h3>Ambientes mobile</h3>
                            <p>Lorem ipsum dolor sit amet at eius doloribus dolores </p>
                    </div><!-- box-single-diferenciais -->

                    <div class="box-single-diferenciais">
                        <img src="images/icon3.png"/>
                        <h3>Ambientes mobile</h3>
                            <p>Lorem ipsum dolor sit amet at eius doloribus dolores </p>
                    </div><!-- box-single-diferenciais -->
                </div><!-- icons-diferenciais -->
        </div>
    </section>

    <!-- SEÇÃO time -->
        <section class="sobre-time">
            <div class="center">
                
            </div>
        </section>


<!-- END diferenciados -->

<!-- Inclusição dos scripts jquery e slick-->
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script type="text/javascript">
            $('section.clientes-slider .slider-container').slick({  
            dots: true,
            arrows:false,
            infinite: false,
            centerMode: false,
            /**centerPadding:0,**/
            speed:1000,
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover:false,
            responsive:[
                {
                    breakpoint:768,
                    settings:{
                        slidesToShow: 2
                    }
                },
            ]
    });
</script>

<!-- Menu responsivo -MENU MOBILE -->
    <script>
        $('.menu-mobile i').click(function(){
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
<!--END  SLICK SLIDER -->

</body>
</html>

