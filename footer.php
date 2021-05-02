<!-- Footer (Rodapé) -->
<?php 
        $title = get_the_title();
?>

<!-- Corrige a margem inferior  do footer-->
<footer <?php if($title == 'contato'){echo 'style="padding:20px 0;"';} ?>>

<?php
    /*Validação pra saber em qual página esta e com base 
    nessa informação remover partes de conteúdo */
    if($title != 'contato' && is_404()==false){
 ?>
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
<?php } ?>

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
               <img src="<?php get_theme_root_uri();?>/Danky/images/logo-footer.png" alt="">
            </div>
        </div>
</footer>

<?php wp_footer(); ?>
<!-- END footer -->
  
<!-- Inclusição dos scripts jquery e slick-->
    <script src="<?php get_theme_root_uri();?>/Danky/js/jquery.js"></script>
    <script src="<?php get_theme_root_uri();?>/Danky/js/slick.min.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
    <script src="<?php get_theme_root_uri();?>/Danky/js/map.js"></script>

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

    /** Slick sliders - Depoimentos-single*/
    $('section.depoimentos .depoimentos-box').slick({  
            dots: true,
            arrows:false,
            infinite: true,
            speed:1000,
            slidesToShow:1,
            centerMode: false        
           
    });
   /** END depoimentos-box */

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