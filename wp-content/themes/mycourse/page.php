<?php get_header(); ?> 
 
<section class="page-section bg-light pt_60">
<h1 class="text-center bg-primary mb-5 text-white py_40_40 mont_serrat f_30_32"><?php the_title(); ?></h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php 
                if(have_posts()): while(have_posts()): the_post(); 
                the_content(); 
                endwhile; endif; 
                ?>
            </div>
        </div>
    </div>
</section>
      
<?php get_footer();  