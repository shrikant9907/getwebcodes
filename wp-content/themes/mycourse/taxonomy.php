<?php get_header(); ?> 

<?php
// Current Term
$quriedObject = get_queried_object();
$term_id = $quriedObject->term_id;
$term_taxonomy = $quriedObject->taxonomy; 
$term = get_term_by('id', $term_id, $term_taxonomy);
$term_name = $term->name; 
$term_slug = $term->slug; 

global $post;
$post_type = $post->post_type;
?>

<section class="page-section bg-light pt_60">
    <h1 class="text-center bg-primary mb-5 text-white ptb_40 mont_serrat f20 lh22">Category: <?php echo $term_name; ?></h1>
    <div class="container">
        <div class="form-row">
            <div class="col-12 col-sm-4">
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
                
                <!-- Related Posts -->
                <div class="card mb-4 r_0">
                  <div class="card-header r_0 text-white bg-dark">
                    <h4 class="card-title m-0 f20 lh22">Recommended Programs</h4>
                  </div>
                  <div class="card-body"> 
                    <?php   
                    // Post Tags
                    $taxonomies = get_terms( array(
                            'taxonomy' => $term_taxonomy, 
                            'hide_empty' => true,
                            'parent'=>0,
                            'order' => 'asc',
                            'orderby' => 'name'
                        )
                    );

                    if ( !empty($taxonomies) ) { 
                        foreach( $taxonomies as $category ) { 
                        $term_link = get_term_link( $category );
                            if($category->parent == 0) {
                                $output.= '<a class="badge badge-primary" href="'.$term_link.'">'. esc_html( $category->name ) .'</a> </li> ';
                            }
                        }
                        echo $output; 
                    } 
                    ?> 
                  </div>
                </div>  
                 
                 
                <?php //get_sidebar(); ?>
            </div>
            <div class="col-12 col-sm-8">
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
        </div>
    </div>
</section>
      
<?php get_footer(); 