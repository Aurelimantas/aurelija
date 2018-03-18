<?php get_header(); ?>

<main>
    <section>

        <div class="elipse">
            <div class="heading-container">
                <h1><span>
                    <?php the_field('text_logo',41); ?></span>
                </h1>
                <p>
                    <?php the_field('logo_subtitle',41); ?>
                </p>
                <div id="newpost">
                    <?php the_field('logo_text',41); ?>
                </div>
                <button class="read" type="button" onclick="">Read more</button>
            </div>
            <div class="img">
                <img src=" <?php the_field('img_logo',90); ?>" alt="">
            </div>
        </div>


    </section>


    <?php get_template_part('portfolio'); ?>

    <section id="fullwidth">
        <div class="container">
            <div class="latest_work">
                <div class="work">
                    <h2>
                        <?php the_field('latest_work',90); ?>
                    </h2>
                </div>
                <div class="line"></div>
            </div>


            <?php 
$gallery_arguments=array(
'post_type'=> 'gallery',
'posts_per_page'=> -1,
    'order'=> 'ASC'
);
$gallery = new WP_Query($gallery_arguments);
            
$slide_arguments=array(
'post_type'=> 'slide',
'posts_per_page'=> -1,
'order'=> 'ASC'
);
$slide = new WP_Query($gallery_arguments);
//var_dump($slide);           
//var_dump($gallery);

?>
            <div class="main">
                <?php while($gallery->have_posts()) : $gallery->the_post();
             if($gallery->current_post==4):?>
                <div class="mainitem">
                    <div class="slideshow-container">
                        <?php while($slide->have_posts()) : $slide->the_post(); ?>
                        <div class="mySlides fade">
                            <div class="numbertext">
                                <?php echo $slide->current_post+1 ?> /
                                <?php echo $slide->post_count ?>
                            </div>
                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
                            <div class="text">
                                <?php the_title(); ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <a class="change-slide prev" data-slide="-1">&#10094;</a>
                        <a class="change-slide next" data-slide="1">&#10095;</a>
                        <br>
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="mainitem">
                    <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title(); ?>">
                    <p>
                        <?php the_title(); ?>
                    </p>
                </div>
                <?php  endwhile; ?>
            </div>
        </div>
    </section>
</main>
<!--   </div> antras pabaiga-->
<!--   <div> trecias blokas-->

<section class="foto-section" id="foto">
    <div class="feature-container">
        <ul class="feature-list">
            <li class="feature-items">
                <div class="icon-container">
                    <a href="#"><i class="fas fa-desktop"></i></a>
                </div>
                <div class="heading-container">
                    <h5>
                        <?php the_field('text_title',90); ?>
                    </h5>
                </div>
                <div class="text-container">
                    <h6>
                        <?php the_field('tex_subtitle',90); ?>
                    </h6>
                    <p>
                        <?php the_field('sub_text',90); ?>
                    </p>
                    <h6>
                        <?php the_field('tex_subtitle2',90); ?>
                    </h6>
                </div>
            </li>
            <li class="feature-items">
                <div class="heading-container">
                    <h5>Paslaugos</h5>
                </div>


                <div class="text-border">

                    <?php wp_nav_menu(array(
                    'theme_location'=> 'paslaugos',
                    'menu_class'=> 'text-border',
                    'container'=> false
                    ));
                    ?>


                    <!--
                    <p>Lorem ipsum dolor sit </p>
                    <p>Lorem ipsum dolor sit </p>
                    <p>Lorem ipsum dolor sit </p>
                    <p>Lorem ipsum dolor sit </p>
                    <p>Lorem ipsum dolor sit </p>
                    <p>Lorem ipsum dolor sit </p>
                    <p>Lorem ipsum dolor sit </p>
-->
                </div>
            </li>



            <?php 
$atsiliepimas_arguments=array(
'post_type'=>'atsiliepimas',
'posts_per_page'=> 3,
'orderby'=> 'date',
'order'=>'DESC'
);
$atsiliepimas =new WP_Query($atsiliepimas_arguments);
//            var_dump($atsiliepimas);

?>

            <li class="feature-items">
                <div class="icon-container">
                </div>
                <div class="heading-container">
                    <h5>
                        <?php the_field('text_atsiliepimai',90); ?>
                    </h5>
                </div>
                <div class="text-mail">
                    <?php while($atsiliepimas->have_posts()) : $atsiliepimas->the_post(); ?>
                    <p><span><?php the_title(); ?></span>
                        <?php the_excerpt(); ?>
                    </p>
                    <?php endwhile; ?>
                </div>

            </li>


            <li class="feature-items">
                <div class="icon-container">
                    <a href="#"> <i class="fas fa-cog"></i></a>
                </div>
                <div class="heading-container">
                    <h5>
                        <?php the_field('text_info',90); ?>
                    </h5>
                </div>
                <div class="form-container">

                    <?php echo do_shortcode('[contact-form-7 id="141" title="contact"]'); ?>


                    <!--

                    <form>
                        <div>
                            <input type="text" name="customer-name" placeholder="Name">
                        </div>
                        <div>
                            <input type="text" name="customer-email" placeholder="Email">
                        </div>
                        <div>
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                        <div>
                            <input type="text" name="comment" placeholder="Comment">
                        </div>
                        <button class="button" type="submit">
                        
                SEND MESSAGE
                        
                    </button>
                    </form>
-->
                </div>
            </li>
        </ul>
    </div>
</section>




<!--  </div> trecias pabaiga-->


<!--
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/psdprojektas.js"></script>
-->
<?php get_footer(); ?>
