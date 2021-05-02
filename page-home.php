<?php 
    //Template Name:Home

?>

<?php get_header(); ?>

<div class="clear"></div>
      <br />
        <br />
          <div class="w50 time-descricao">
                <h2><?php the_field('chamada_topo') ?></h2>
                <p>Consultoria especializada em statups, empresas, principalmente, pessoas</p>
                <a target="_blank" href="https://dankicode.com">Ver demonstração</a>
          </div><!--w50 -->
            <div class="w50 time-imagem">
                <img src="<?php get_theme_root_uri();?>/Danky/images/equipe.png">
           </div><!-- w50-2 -->
            <div class="clear"></div>
         </div> <!-- center -->
    </section><!-- topo -->

      <div class="circle"><i class="fas fa-angle-down"></i></div>
        <section class="clientes-slider">   
            
            <div class="center">
                <div style="max-width: 700px; margin:0 auto; overflow: hidden;" class="slider-container">
                <img src="<?php get_theme_root_uri();?>/Danky/images/amazon.jpg"/>
                <img src="<?php get_theme_root_uri();?>/Danky/images/costco.jpg"/>
                <img src="<?php get_theme_root_uri();?>/Danky/images/dominos.jpg"/>
                <img src="<?php get_theme_root_uri();?>/Danky/images/uber.jpg"/>
                <img src="<?php get_theme_root_uri();?>/Danky/images/walmart.jpg"/>
                <img src="<?php the_field('imagem_topo'); ?>" alt="">
                </div>
            </div><!-- center -->
        </section>

<!-- Seção diferenciados-->
    <section class="diferenciais">
        <div class="center">
            <h2>Contribuimos de ponta a ponta</h2>
                <div class="icons-diferenciais">
                    <div class="box-single-diferenciais">
                        <img src="<?php get_theme_root_uri();?>/Danky/images/icon1.png"/>
                        <h3>Ambientes mobile</h3>
                            <p>Lorem ipsum dolor sit amet at eius doloribus dolores </p>
                    </div><!-- box-single-diferenciais -->

                    <div class="box-single-diferenciais">
                        <img src="<?php get_theme_root_uri();?>/Danky/images/icon2.png"/>
                        <h3>Ambientes mobile</h3>
                            <p>Lorem ipsum dolor sit amet at eius doloribus dolores </p>
                    </div><!-- box-single-diferenciais -->

                    <div class="box-single-diferenciais">
                        <img src="<?php get_theme_root_uri();?>/Danky/images/icon3.png"/>
                        <h3>Ambientes mobile</h3>
                            <p>Lorem ipsum dolor sit amet at eius doloribus dolores </p>
                    </div><!-- box-single-diferenciais -->
                </div><!-- icons-diferenciais -->
        </div>
    </section>

    <!-- SEÇÃO time -->
        <section class="sobre-time">
            <div class="center">
                <div class="w50 time-descricao-2">
                    <h2>Um time experiente, <br/>comunicador e coeso</h2>
                    <p> <?php the_field('sobre_home'); ?></p>
                   
                </div>
            <div class="w50 img-time">
                <img src="<?php get_theme_root_uri();?>/Danky/images/time.png"/>
            </div>
            <div class="clear"></div>
            </div>
        </section>
      
<!-- END diferenciados -->

<!-- SEÇÃO Depoimentos-->
<section class="depoimentos">
    <div class="center">
        <h2>Depoimentos</h2>
            <div class="depoimentos-box">
                <div class="depoimentos-single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                       Odit facere voluptatibus, in corrupti ratione odio sunt 
                       consequatur deserunt molestiae esse excepturi, explicabo
                       dolore maxime nemo vel laudantium numquam. Sequi.
                       </p>
                       <p>Gildasio Bizerra Brito</p>
                       <img src="<?php get_theme_root_uri();?>/Danky/images/autor.jpg" /> 
                </div><!-- depoimentos-single (Depoimentos invividual )-->

                <div class="depoimentos-single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                       Odit facere voluptatibus, in corrupti ratione odio sunt 
                       consequatur deserunt molestiae esse excepturi, explicabo
                       dolore maxime nemo vel laudantium numquam. Sequi.
                       </p>
                       <p>Gildasio Bizerra Brito</p>
                       <img src="<?php get_theme_root_uri();?>/Danky/images/autor.jpg" /> 
                </div><!-- depoimentos-single (Depoimentos invividual )-->

                <div class="depoimentos-single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                       Odit facere voluptatibus, in corrupti ratione odio sunt 
                       consequatur deserunt molestiae esse excepturi, explicabo
                       dolore maxime nemo vel laudantium numquam. Sequi.
                       </p>
                       <p>Gildasio Bizerra Brito</p>
                       <img src="<?php get_theme_root_uri();?>/Danky/images/autor.jpg" /> 
                </div><!-- depoimentos-single (Depoimentos invividual )-->

            </div><!--Depoimentos BOX -->
    </div>
</section>

<?php get_footer(); ?>