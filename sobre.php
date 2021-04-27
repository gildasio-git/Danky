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
         </div> <!-- center -->
    </section><!-- topo -->

   
    <section class="sobre-equipe"> <!-- Sobre Equipe -->
        <div class="center">
        <div class="w50 equipe-sobre-texto">
            <h2>Uma equipe estratégica para um trabalho incrível</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quas placeat nihil veniam 
                voluptatibus voluptates porro molestias harum maiores perferendis laboriosam veritatis eius
                consequatur corrupti, adipisci non quia voluptas quo?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quas placeat nihil veniam 
                voluptatibus voluptates porro molestias harum maiores perferendis laboriosam veritatis eius
                consequatur corrupti, adipisci non quia voluptas quo?
            </p>
        </div>
       
        <div class="w50">
            <img src="images/foto-equipe.jpg" alt="">
       </div>
       <div class="clear"></div>
        </div>
    </section><!-- END - Sobre Equipe -->

    <section class="sobre-imagens"> 
        <div class="center">
            <div class="img-sobre">
                <img src="images/imagem-sobre.jpg" alt="">
            </div>

            <div class="img-sobre">
                <img src="images/imagem-sobre.jpg" alt="">
            </div>

            <div class="img-sobre">
                <img src="images/imagem-sobre.jpg" alt="">
            </div>

            <div class="img-sobre">
                <img src="images/imagem-sobre.jpg" alt="">
            </div>

        </div>

    </section>

    <!-- Footer (Rodapé) -->
<footer>
    <!-- Seção Metodologia -->
    <section class="metodologia">
        <div class="center">
        <h2>Conheça nossa metodologia</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas veritatis 
               accusamus ex sunt error consequuntur excepturi nostrum quia quod ullam, a quasi
               modi ratione maxime beatae?
            </p>
            <a href="/contato">Entrar em contato</a>
    </div>
</section>
<!-- END Sesção Metodologia -->
        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div>

            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div>

            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div>

            <div style="width:40%; text-align:right;" class="col-footer">
               <img src="images/logo-footer.png" alt="">
            </div>
        </div>
</footer>
<!-- END footer -->

<!-- Menu responsivo -MENU MOBILE -->
<script src="js/jquery.js"></script>
<script>
        $('.menu-mobile i').click(function(){
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
<!-- END responsivo  MENU MOBILE -->

</body>