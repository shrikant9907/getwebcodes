<?php get_header(); ?>  
           
<section class="page-section bg-light">
<h1 class="text-center bg-primary mb-5 text-white ptb_40 mont_serrat f20 lh22"><?php the_title(); ?></h1>
    <div class="container">
        <div class="form-row">
             <div class="col-12 col-md-6">
               
                <?php
                $args   =   array(
                                    'post_type'         =>  'page',
                                    'posts_per_page'    =>  -1, 
                                    'orderby'           =>  'title', 
                                    'order'             =>  'asc', 
                                );  
                query_posts($args);
                $count = 1;
                if(have_posts()):
                ?>
                <div class="card mb-4 r_0">
                  <div class="card-header r_0 bg-dark text-white">
                    <h4 class="card-title m-0 f20 lh22">Pages</h4>
                  </div>
                  <div class="card-body p-0"> 
                    <ul class='list-group list-group-flush'> 
                        <?php   
                            while(have_posts()): the_post();  
                            $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
                        ?>
                            <li class="list-group-item">
                            <span class="text-primary"><?php echo $count; ?>)</span> <a class="text-dark tdn" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="post-date pull-right"></span>
                            </li> 
                        <?php 
                            $count++;
                            endwhile; 
                            wp_reset_query();
                        ?>
                    </ul> 
                  </div>
                </div>   
                <?php endif; ?>

                  <?php
                $args   =   array(
                                    'post_type'         =>  'post',
                                    'posts_per_page'    =>  -1, 
                                    'orderby'           =>  'title', 
                                    'order'             =>  'asc', 
                                );  
                query_posts($args);
                $count = 1;
                if(have_posts()):
                ?>
                <div class="card mb-4 r_0">
                  <div class="card-header r_0 bg-dark text-white">
                    <h4 class="card-title m-0 f20 lh22">Posts</h4>
                  </div>
                  <div class="card-body p-0"> 
                    <ul class='list-group list-group-flush'> 
                        <?php   
                            while(have_posts()): the_post();  
                            $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
                        ?>
                            <li class="list-group-item">
                            <span class="text-primary"><?php echo $count; ?>)</span> <a class="text-dark tdn" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="post-date pull-right"></span>
                            </li> 
                        <?php 
                            $count++;
                            endwhile; 
                            wp_reset_query();
                        ?>
                    </ul> 
                  </div>
                </div>   
                <?php endif; ?>


                <?php
                $args   =   array(
                                    'post_type'         =>  'tutorial',
                                    'posts_per_page'    =>  -1, 
                                    'orderby'           =>  'title', 
                                    'order'             =>  'asc', 
                                );  
                query_posts($args);
                $count = 1;
                if(have_posts()):
                ?>
                <div class="card mb-4 r_0">
                  <div class="card-header r_0 bg-dark text-white">
                    <h4 class="card-title m-0 f20 lh22">Tutorials: HTML and CSS, PHP, Python</h4>
                  </div>
                  <div class="card-body p-0"> 
                    <ul class='list-group list-group-flush'> 
                        <?php   
                            while(have_posts()): the_post();  
                            $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
                        ?>
                            <li class="list-group-item">
                            <span class="text-primary"><?php echo $count; ?>)</span> <a class="text-dark tdn" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="post-date pull-right"></span>
                            </li> 
                        <?php 
                            $count++;
                            endwhile; 
                            wp_reset_query();
                        ?>
                    </ul> 
                  </div>
                </div>   
                <?php endif; ?>
            </div>   
           
                <!-- Tutorials List -->
                <?php
                $args   =   array(
                                    'post_type'         =>  'programs',
                                    'posts_per_page'    =>  -1, 
                                    'orderby'           =>  'title', 
                                    'order'             =>  'asc', 
                                );  
                query_posts($args);
                $count = 1;
                if(have_posts()):
                ?>
             <div class="col-12 col-md-6">
                <div class="card mb-4 r_0">
                  <div class="card-header r_0 bg-dark text-white">
                    <h4 class="card-title m-0 f20 lh22">Programs: HTML and CSS, PHP, Python, Bootstrap, Angular and WordPress</h4>
                  </div>
                  <div class="card-body p-0"> 
                    <ul class='list-group list-group-flush'> 
                        <?php   
                            while(have_posts()): the_post();  
                            $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
                        ?>
                            <li class="list-group-item">
                            <span class="text-primary"><?php echo $count; ?>)</span> <a class="text-dark tdn" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="post-date pull-right"></span>
                            </li> 
                        <?php 
                            $count++;
                            endwhile; 
                            wp_reset_query();
                        ?>
                    </ul> 
                  </div>
                </div>   
                </div>   
                <?php endif; ?>     
          </div>
        </div>
    </div>
</section>
      
<?php get_footer(); ?> 



