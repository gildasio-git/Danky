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

    <!-- Página de contato -->
            <section class="contato">
                <div class="center">
                    <div class="w50 contato-info">
                        <h2>O mais importante, <br/> primeira conversa.</h2>
                        <br>
                        <p><b>Telefone:<b> (69) 99012-0000 </p>
                        <p><b>Telefone:<b> (69) 99012-0000 </p>
                        <p><b>Telefone:<b> (69) 99012-0000 </p>
               
                        <div class="mapa-container" >
                            <div id="mapa">

                            </div>
                        </div><!---mapa -->
                    </div>

    <!-- Contato -->
            <div class="w50 contato-form">
                <form action="">
                    <input placeholder="Nome" type="text">
                    <input placeholder="email" type="text">
                    <input placeholder="Telefone" type="text">
                    <select>
                        <option>Geral</option>
                        <option>Suporte</option>
                    </select>                  
                    <textarea placeholder="Mesnagem"></textarea>
                    <input type="submit" value="Enviar">

                </form>
            </div>


    <!-- END - contato -->
                    <div class="clear"></div>
                </div>
            </section>


    <!-- END - Página de contato -->

<!-- Footer (Rodapé) -->
<footer style="padding:60px 0;">
   
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
  
<!-- Inclusição dos scripts jquery e slick-->
    <script src="js/jquery.js"></script>
<!-- Script Inclusão do mapa -->
   
   <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
   <script src="js/map.js"></script>  

<!-- Menu responsivo -MENU MOBILE -->
    <script>
        $('.menu-mobile i').click(function(){
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
<!-- END responsivo  MENU MOBILE -->

</body>
</html>

