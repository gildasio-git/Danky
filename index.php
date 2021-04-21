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

    <section class="clientes-slider">
        <div class="circle"><i class="fas fa-angle-down"></i></div>
        <div class="center">

        </div><!-- center -->

    </section>

<!-- Inclusição dos scripts jquery e slick-->
<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>

<!-- SCRIPT SLICK SLIDER-->
    <script type="text/javascript">
    $('.container-slider').slick({
    dots: true,
    arrows:false,
    infinite: true,
    centerMode: true,
    centerPadding:0,
    speed:1000,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover:false
    });
</script>
<!--END  SLICK SLIDER -->

</body>
</html>

