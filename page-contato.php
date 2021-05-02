<?php
//Template Name:contato
?>

<?php get_header(); ?>

<!-- Duas linhas baixo inseridas devido a seção do topo e a div center não estarem
fechadas. -->
</div>
</section>
<!-- -->
    
    <!-- Página de contato -->
            <section class="contato">
                <div class="center">
                    <div class="w50 contato-info">
                        <h2>O mais importante, <br/> primeira conversa.</h2>
                        </br>

                         <!-- Funçao para chmar o campo repeater -->
                         <?php 
                            while(have_rows('Nome_tipo_contato')){
                                the_row();
                            ?>
                            <p><b><?php echo get_sub_field('categoria');?>:<b> <?php echo get_sub_field('valor');?> </p>

                          <?php } ?>
                          
            
                        <div class="mapa-container" >
                            <div id="mapa">

                            </div>
                        </div><!---mapa -->
                    </div>

    <!-- Contato -->
            <div class="w50 contato-form">
            
                
                 <?php the_content();?>

                
            </div>


    <!-- END - contato -->
                    <div class="clear"></div>
                </div>
            </section>


    <!-- END - Página de contato -->
<?php get_footer();  ?>

