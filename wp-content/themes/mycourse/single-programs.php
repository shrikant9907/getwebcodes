<?php get_header();

$programsPath = get_template_directory().'/tutscodes/programs/';
$term_taxonomy = 'programs-category';
$term_obj_list = get_the_terms( $post->ID, $term_taxonomy );
$term_id = $term_obj_list['0']->term_id;
$term_name = $term_obj_list['0']->name;
$term_slug = $term_obj_list['0']->slug;

if ($term_obj_list['1'] && ($term_slug == 'how-to')) {
    $term_name = $term_obj_list['1']->name;    
    $term_id = $term_obj_list['1']->term_id;    
}

if ($term_obj_list['1'] && ($term_obj_list['1']->slug == 'how-to')) {
    $term_slug = $term_obj_list['1']->slug;
}
?>  

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
                                    $methods = $cfs->get('methods'); 
                                    if($methods){ ?>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/xml.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/javascript.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/css.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/clike.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/php.js"></script> 
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/python.js"></script> 
                                        <?php 
                                        $methodCount = 1;
                                        foreach($methods as $method){
                                            
                                            $methodTitle = $method['method_title'];
                                            $methodOptions = $method['method_options'];
                                            echo '<div class="method border-bottom mb-4">';
                                            echo "<h4 class='m-0 mb-3 f20 lh22 text-primary'>$methodTitle</h4>";
                                            $countOption = 1;
                                            foreach($methodOptions as $option) {
                                                $mode = $option['mode'];
                                                if (!$mode) {
                                                    $mode = 'php';
                                                }
                                                $description = $option['description'];
                                                $note = $option['note'];
                                                $file = htmlspecialchars($option['file']);
                                                if($file!=''){   
                                               
                                                $textarea_id = 'tx'.$methodCount.$countOption;
                                              
                                                  $headerfile = $programsPath.$term_slug.'/'.$file;
                                                      
                                                  $headercode = htmlspecialchars(file_get_contents($headerfile));  
                                                ?>
                                                <textarea id='<?php echo $textarea_id; ?>'><?php echo $headercode; ?></textarea>
                                                <script>
                                                  var editor = CodeMirror.fromTextArea(document.getElementById("<?php echo $textarea_id; ?>"), {
                                                    lineNumbers: true,
                                                    styleActiveLine: false,
                                                    matchBrackets: true,
                                                    mode: "<?php echo $mode; ?>",
                                                    readOnly: true
                                                  });
                                                </script> 
                                            <?php
       
                                                }                                        
                                            echo '<div class="description pb-0">'.$description.'</div>';
                                            if ($note){
                                                echo '<div class="alert alert-info">'.$note.'</div>';
                                            }
                                            $countOption++;
                                            }
                                            echo "</div>";
                                            $methodCount++;
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
                            
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
       
<?php get_footer(); 