<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php 
    wp_head();
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="https://kit.fontawesome.com/8c9a32e334.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    <link rel="icon" href="https://cursos.dankicode.com/app/Views/public/favicon.ico" type="image/x-icon" />
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php get_theme_root_uri();?>/Danky/style.css">
</head>
<body>
    <section class="topo">
        <div class="center">
            <header> <!-- header -->
                <div class="logo"><a href="<?php echo '/wordpress' ?>">
                    <img src="<?php get_theme_root_uri();?>/Danky/images/logo.png" alt=""></a>
                </div><!--logo -->
            </header><!--END header -->

            <ul class="menu-desktop"><!-- Menu desktop -->
                 <li><a href="/wordpress/">Home</a></li>
                 <li><a href="/wordpress/sobre">Sobre</a></li>
                 <li><a href="/wordpress/contato">Contato</a></li>
            </ul><!-- End menu desktop-->

              
              <div class="menu-mobile">  <!-- menu mobile -->
                <i class="fas fa-align-right"></i>
                  <ul>
                  <li><a href="/wordpress/">Home</a></li>
                 <li><a href="/wordpress/sobre">Sobre</a></li>
                 <li><a href="/wordpress/contato">Contato</a></li>
                  </ul>
             </div> <!-- END menu mobile -->

           