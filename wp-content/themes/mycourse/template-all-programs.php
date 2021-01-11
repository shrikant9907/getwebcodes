<?php 
/*
* Template Name: All Programs Template
*/
get_header(); ?> 

<?php
global $post;
$post_type = $post->post_type;
?>

<section class="page-section bg-light pt_60">
    <h1 class="text-center bg-primary mb-5 text-white ptb_40 mont_serrat f30 lh32"><?php the_title(); ?></h1>
    <div class="container">
        <div class="form-row">
            <div class="col-12 col-sm-7">
                <div class="right_side">
                    <?php 
                        if(have_posts()): 
                            $count = 1;
                            while(have_posts()): the_post();  
                            if ($count <= 5) {
                    ?>
                    <div class="card mb-4 r_0">
                        <div class="card-header r_0 bg-dark">
                            <h3 class="m-0 f20 lh22"><a class="d-block text-white tdn" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
                        </div>
                        <div class="card-body">
                            <?php 
                                $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
                                if(has_post_thumbnail()) { ?>
                                <div class='card-image-top'>
                                    <img src='<?php echo $image; ?>' alt='<?php the_title(); ?>' />
                                </div>
                            <?php } ?>
                            <?php $shortcontent = get_the_content(); ?>
                            <div class="card-text">
                                <?php echo wp_trim_words(get_the_content(), 100); ?>
                                   
                                <div class="article_buttons">   
                                    <?php if($download_url!='') { ?>
                                        <a href="<?php echo $download_url; ?>" class="btn btn-primary" download>Download</a>      
                                    <?php } ?>
                                    <?php if($demo_url!='') { ?>
                                        <!-- <a href="<?php echo $demo_url; ?>" target="_blank" class="btn btn-primary">View Demo</a>       -->
                                    <?php } ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <?php
                        $count++;  
                        } 
                        endwhile; 
                        wp_reset_query();
                        endif; 
                    ?>      
                    <?php // echo do_shortcode('[starbox id="23"]'); ?>       
            </div>
            <div class="programs_list">
            <?php
                $args   =   array(
                                    'post_type'         =>  $post_type,
                                    'posts_per_page'    =>  -1, 
                                    'orderby'           =>  'date', 
                                    'order'             =>  'asc', 
                                    'tax_query'         =>  array(
                                                                array(
                                                                        'taxonomy' => $term_taxonomy,
                                                                        'field' => 'id',
                                                                        'terms' => $term_id, 
                                                                        'include_children' => false
                                                                    )
                                                                )
                                );  
                query_posts($args);
                $count = 1;
                if(have_posts()):
                ?>
                <div class="card mb-4 r_0">
                  <div class="card-header r_0 text-white bg-dark">
                    <h4 class="card-title m-0 f20 lh22"><?php echo $term_name; ?></h4>
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
                        ?>
                    </ul> 
                  </div>
                </div>  
                <?php endif; ?>   
                
            </div>
    </div>
</section>
      
<?php get_footer(); 