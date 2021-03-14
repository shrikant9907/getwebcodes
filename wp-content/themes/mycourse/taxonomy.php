<?php get_header();  

// Current Term
$quriedObject = get_queried_object();
$term_id = $quriedObject->term_id;
$term_taxonomy = $quriedObject->taxonomy; 
$term = get_term_by('id', $term_id, $term_taxonomy);
$term_name = $term->name; 
$term_slug = $term->slug; 

global $post;
$post_type = $post->post_type;

if ($term_name) {
?>
<h1 class="text-center bg-primary mb_0 text-white ptb_40 mont_serrat f30 lh32"><?php echo $term_name; ?></h1>
<?php } ?>
<div class="single-page bg-light common-section-ui pt_70">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-8">
      <?php
        $args   =   array(
                            'post_type'         =>  $post_type,
                            'posts_per_page'    =>  5, 
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
            while(have_posts()): 
                the_post();
        ?>
        <div class="card cui2 w-100 typography">
          <div class="card-body pri_30 pli_30 pbi_30">
            <h2><a href="<?php the_permalink(); ?>" class="text-primary"><?php the_title(); ?></a></h2>
            <?php if(has_post_thumbnail()) { ?>
            <a href="<?php the_permalink(); ?>" class="d-inline-block hidei"><img class="card-img-top r_0" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" /></a>
            <?php } else { ?>
            <a href="<?php the_permalink(); ?>" class="d-inline-block hidei"><img class="card-img-top r_0" src="https://picsum.photos/300/150" alt=""></a>
            <?php } ?>
            <div class="f16 mb_30">
              <?php echo wp_trim_words(get_the_content(), 50); ?>
            </div>
            <div class="f16">
                <a href="<?php the_permalink(); ?>" class="btn btn-primary btnui3s text-uppercase"><?php _e('Continue Reading '); ?> <i class="ml_5 f18 lh1 fas fa-angle-right"></i></a>
            </div>
          </div>
        </div>     
    <?php
    endwhile; 
    endif; ?>         
                    
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
       
<?php get_footer(); 