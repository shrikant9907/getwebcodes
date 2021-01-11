<?php get_header();

define('CODEPATH', get_template_directory().'/tutscodes/');
$term_taxonomy = 'tutorial_cat';
$term_obj_list = get_the_terms( $post->ID, $term_taxonomy );
$term_id = $term_obj_list['0']->term_id;
$term_name = $term_obj_list['0']->name;
?> 
           
<section class="page-section bg-light pt_60">
<h1 class="text-center bg-primary mb-5 text-white ptb_40 mont_serrat f20 lh22">Tutorial: <?php the_title(); ?></h1>
    <div class="container">
        <div class="form-row">
            <div class="col-12 col-sm-4">
                <?php
                $args   =   array(
                                    'post_type'         =>  'tutorial',
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
                <div class="card r_0 mb-4">
                  <div class="card-header r_0 bg-dark text-white">
                    <h4 class="card-title m-0 f20 lh22"><?php echo $term_name; ?></h4>
                  </div>
                  <div class="card-body p-0"> 
                    <ul class='list-group list-group-flush'> 
                        <?php   
                            while(have_posts()): the_post();  
                            $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
                        ?>
                            <li class="list-group-item">
                            <span class="text-primary"><?php echo $count; ?>)</span> <a class="tdn text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="post-date pull-right"></span>
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

                <!-- Related Posts -->
                <div class="card r_0 mb-4">
                  <div class="card-header r_0 bg-dark text-white">
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
                                $output.= '<a class="badge badge-primary mr-2" href="'.$term_link.'">'. esc_html( $category->name ) .'</a>';
                            }
                        }
                        echo $output; 
                    } 
                    ?> 
                  </div>
                </div>  
            

            <?php //get_sidebar(); ?>
            </div>
            <div class="col-12 col-md-8">
                    <div class="left_side">
                        <?php 
                            if(have_posts()):   
                                $count = 0;
                                while(have_posts()): the_post();  
                        ?>
                        <div class="card r_0 mb-3">
                            
                            <div class="card-header text-white bg-dark"><h3 class="f20 lh22 m-0"><?php the_title(); ?></h3></div>
                            
                            <div class="card-body f_14_22">
                                <?php 
                                $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
                                ?>

                                <?php if(has_post_thumbnail()) { ?>
                                    <div class='article-image-wr'>
                                        <img src='<?php echo $image; ?>' alt='<?php the_title(); ?>' />
                                    </div> 
                                <?php } ?>
                                <!-- <div class='mb-2'><?php //istl_theme_entry_meta(); ?></div> -->
                   
                                <div class="article-content">
                                    <?php the_content(); ?>
                                    <div class="tutorials_article">
                                    <?php 
                                    $tutorials = $cfs->get('tutorials_loops'); 
                                    if($tutorials){ ?>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/xml.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/javascript.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/css.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/clike.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/php.js"></script> 
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/python.js"></script> 
                                        <?php 
                                        $count = 1;
                                        foreach($tutorials as $tutorial){
                                            
                                            $title = $tutorial['title'];
                                            $text = $tutorial['_text'];
                                            $image = $tutorial['_image'];
                                            $mode = $tutorial['mode'];
                                            $note = $tutorial['note'];
                                                
                                            if (!$mode) {
                                                $mode = 'php';
                                            }
                                            $code = htmlspecialchars($tutorial['_code']);
                                            $code2 = htmlspecialchars($tutorial['_code2']);
                                              
                                            if ($title) {
                                                echo "<h4 class='m-0 mb-3 f20 lh22 text-primary'>$title</h4>";
                                            }
                                            
                                            echo $text;
                                            if($code2!=''){   
                                                 echo "<textarea id='showcode_1$count'>$code2</textarea>";
                                                 ?>
                                            <script>

                                            //  Editor 1  
                                              var editor = CodeMirror.fromTextArea(document.getElementById("showcode_1<?php echo $count; ?>"), {
                                                lineNumbers: true,
                                                styleActiveLine: true,
                                                matchBrackets: true,
                                                mode: "<?php echo $mode; ?>",
                                                readOnly: true
                                            });

                                            </script> 
                                                 <?php
                                            }
                                            if($code!=''){   
                                                // Get File 
                                                $headerfile = CODEPATH.$code;    
                                                $headercode = htmlspecialchars(file_get_contents($headerfile));  
                
                                                echo "<textarea id='showcode_2$count'>$headercode</textarea>";
                                                     ?>
                                            <script>

                                            //  Editor 2  
                                              var editor = CodeMirror.fromTextArea(document.getElementById("showcode_2<?php echo $count; ?>"), {
                                                lineNumbers: true,
                                                styleActiveLine: true,
                                                matchBrackets: true,
                                                mode: "<?php echo $mode; ?>",
                                                readOnly: true
                                            });

                                            </script> 
                                             
                                                <?php
   
                                            }
                                            
                                            if ($note){
                                                echo '<div class="alert alert-info">'.$note.'</div>';
                                            }
                                             
                                            if($image!='') {    
                                                ?>
                                                <img class="img-fluid tutorials_image" src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
                                                <?php 
                                            } 
                                            
                                            $count++;
                                        }
                                    }?>
                                                
                                    </div>    
                                </div>
                            </div> 
                        </div>
                        <div class="single_posts_nav d-flex justify-content-between">
                             <?php
                            $prev_post = get_previous_post();
                            if (!empty( $prev_post )): ?>
                             <div class='article-prev'>
                                <a class="btn btn-primary rounded-0 px_25 mb-3 d-inline-block" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">Previous: <?php //echo esc_attr( $prev_post->post_title ); ?></a>
                            </div>
                            <?php endif ?>

                            <?php
                            $next_post = get_next_post();
                            if (!empty( $next_post )): ?>
                            <div class='article-nextpost'>
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
                
                <!--Related Posts-->
                <?php istl_related_posts(); ?>
                
                <?php comment_form(); ?>

            </div>
          </div>
        </div>
    </div>
</section>
      
<?php get_footer(); ?> 



