<?php 
$portfolio_arguments=array(
'post_type'=> 'portfolio',
'post_per_page'=> -1,
    'order'=> 'ASC'
);
$portfolio = new WP_Query($portfolio_arguments);
//var_dump($portfolio);

?>






<section class="about-section" id="about">
    <div class="container">
        <div class="people">
            <?php if($portfolio->have_posts()): while($portfolio->have_posts()) : $portfolio->the_post();
            ?>
            <div class="man">
                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
                <h3>
                    <?php the_title(); ?>
                </h3>
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
            <?php  endwhile;endif; ?>
        </div>
        <!--
            <div class="man">
                <img src="http://localhost/WPprojektas/wp-content/themes/psdprojektas/assets/images/svetaine.jpg" alt="">
                <h3>Svetainės baldai</h3>
                <p>Some textSome textSome textSome textSome text</p>
            </div>
            <div class="man">
                <img src="http://localhost/WPprojektas/wp-content/themes/psdprojektas/assets/images/spinta1.jpg" alt="">
                <h3>Drabužinės</h3>
                <p>Some textSome textSome textSome textSome text</p>
            </div>
            <div class="man">
                <img src="http://localhost/WPprojektas/wp-content/themes/psdprojektas/assets/images/vonia2.jpg" alt="">
                <h3>Vonios baldai</h3>
                <p>Some textSome textSome textSome textSome text</p>
            </div>
-->
    </div>
</section>
