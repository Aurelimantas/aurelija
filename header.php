<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETTING STARTED WITH BRACKETS</title>
    <!--    <link href="https://fonts.google.com/selection?selection.family=Merriweather:400,700,900iPT+Sans" rel="stylesheet">-->
    <!--
<link rel="stylesheet" href="assets/psdprojektas.css/psdprojektas.css">
<link rel="stylesheet" href="assets/psdprojektas.css/reset.css">
-->

    <?php wp_head();?>

</head>

<body>

    <header>
        <div class="container flex-container">
            <div class="logo">
                <p><strong><?php the_field('nav_title',41); ?></strong></p>
            </div>
            <nav>

                <?php
            wp_nav_menu(array(
             'theme_location' => 'meniu',
             'container' => false,
             'menu_class' => 'navigation'
            ));
            
            ?>

                    <!--
                <ul class="navigation">
                    <button class="burger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>

                    <li id="home"><a href="#">HOME</a></li>
                    <li><a href="#about" class="portfolio">Portfolio</a></li>
                    <li><a href="#fullwidth" class="gallery">Gallery</a></li>
                    <li><a href="#foto" class="dropdown">Dropdown</a></li>
-->

                    <!--                </ul>-->
            </nav>
        </div>
    </header>
