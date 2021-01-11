<?php get_header(); ?> 
<div class="single-page bg-light common-section-ui pt_70">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-8">
        <div class="card cui2 noshadow r_0 w-100 typography">
          <div class="card-body pri_30 pli_30 pbi_30">
            <h1 class='text-primary'><?php the_title(); ?></h1>
              <?php if(has_post_thumbnail()) { ?>
                <a href="#" class="d-inline-block hidei"><img class="card-img-top r_0" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" /></a>
              <?php } else { ?>
                <a href="#" class="d-inline-block hidei"><img class="card-img-top r_0" src="https://picsum.photos/300/150" alt=""></a>
              <?php } ?>
            <div class="text-dark px_5 py_5 mb_10 f14 d-flex justify-content-between">
              <span><i class="fa fa-user mr_5 text-primary" aria-hidden="true"></i> <?php the_author(); ?></span>
              <span><i class="fa fa-tag mr_5 text-primary" aria-hidden="true"></i> 
              <?php
              $categories = get_the_category();
              $separator = ' ';
              $output = '';
              if ( ! empty( $categories ) ) {
                  foreach( $categories as $category ) {
                      $output .= '<a class="text-dark" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'mycourse' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                  }
                  echo trim( $output, $separator );
              }

              ?></span> 
              <span><i class="fa fa-clock mr_5 text-primary" aria-hidden="true"></i> <?php //echo get_the_date(); ?> <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' ); ?></span>
            </div>
            <div class="f16">
              <?php the_content(); ?>
              <div class="tutorials_article">
                <?php 
                  $tutorials = $cfs->get('tutorials_loops'); 
                  if($tutorials) { ?>
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
                              echo '<div class="mt_20 alert alert-info alertuis">'.$note.'</div>';
                            }
                                
                            if($image!='') { ?>
                                <img class="img-fluid" src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
                            <?php } 
                            $count++;
                        }
                  } ?>                                
              </div>    
            </div>
          </div>
        </div>                        
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
       
<?php get_footer(); 