<?php get_header(); ?> 
 
<section class="page-section bg-light pt_60">
<h1 class="text-center bg-primary mb-5 text-white py_40_40 mont_serrat f_30_32">Blog Details</h1>
    <div class="container">
        <div class="form-row">
            <div class="col-12 col-sm-4">
                
                <?php get_sidebar(); ?>
            
                <!-- Related Posts -->
                <div class="card mb-4 r_0">
                  <div class="card-header bg-dark r_0">
                    <h4 class="card-title m-0 f_20_22 text-white">Recommended Programs</h4>
                  </div>
                  <div class="card-body"> 
                    <?php   
                    // Post Tags
                    $taxonomies = get_terms( array(
                            'taxonomy' => 'programs-category', 
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
                                $output.= '<a class="badge badge-primary mr-2" href="'.$term_link.'">'. esc_html( $category->name ) .'</a>';
                            }
                        }
                        echo $output; 
                    } 
                    ?> 
                  </div>
                </div>  
 
            </div> 
            <div class="col-12 col-md-8">
                    <div class="left_side">
                        <?php  
                            if(have_posts()): 
                                $count = 0;
                                while(have_posts()): the_post();  
                        ?>
                        <div class="card mb-3 r_0">
                             <div class="card-header r_0 bg-dark "><h3 class="f_20_22 m-0"><a class="tdn text-white d-block" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3></div>

                            <div class="card-body f_14_22">
                                <?php 
                                $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
                                ?>

                                <?php if(has_post_thumbnail()) { ?>
                                    <div class='article-image-wr'>
                                        <img src='<?php echo $image; ?>' alt='<?php the_title(); ?>' />
                                    </div>
                                <?php } ?>
                                <div class="row text-muted f_12_14 mb_20">
                                    <div class="col-12 col-sm-6">
                                        <span><i title="Categories" class="fa fa-bookmark mr_10"></i>  
                                            <?php

                                                $categories = get_the_category();
                                                $separator = ' ';
                                                $output = '';
                                                if ( ! empty( $categories ) ) {
                                                    foreach( $categories as $category ) {
                                                        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                                    }
                                                    echo trim( $output, $separator );
                                                }

                                            ?></span>
                                    </div>
                                    <div class="col-4 d-none">
                                        <span><i title="Tags" class="fas fa-tags mr_10"></i> 
                                            <?php
                                                $tags = get_the_tags();
                                                foreach ( $tags as $tag ) {
                                                    $tag_link = get_tag_link( $tag->term_id );
                                                             
                                                    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                                                    $html .= "{$tag->name}</a>";
                                                }
                                                echo $html;
                                            ?>
                                        </span>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <span><i class="fas fa-clock mr_10"></i>Posted on: <?php echo get_the_date(); ?></span>
                                    </div>
                                </div>
                          
                                <?php the_content(); ?>
                            </div>


                        </div>
                                         
                        <div class="single_posts_nav clearfix">
                             <?php
                            $prev_post = get_previous_post();
                            if (!empty( $prev_post )): ?>
                             <div class='article-prev float-left'>
                                <a class="btn btn-primary rounded-0 px_25 mb-3 d-inline-block" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">Previous: <?php //echo esc_attr( $prev_post->post_title ); ?></a>
                            </div>
                            <?php endif ?>

                            <?php
                            $next_post = get_next_post();
                            if (!empty( $next_post )): ?>
                            <div class='article-nextpost float-right'>
                                <a class="btn btn-primary rounded-0 px_25 mb-3 d-inline-block" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">Next: <?php //echo esc_attr( $next_post->post_title ); ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                        
                        <?php // echo do_shortcode('[starbox id="23"]'); ?>                 
                                
                        <?php  
                            endwhile; 
                            endif; 
                        ?>      
                
                    </div>
                
                <?php  //comment_form(); ?>

            </div>
            
            <?php //get_sidebar(); ?>  
            
          </div>
        </div>
    </div>
</section>
       
<?php get_footer(); 