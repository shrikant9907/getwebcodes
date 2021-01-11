<?php 
/*
* Shortcode interview questions
*/

add_shortcode('InterviewQuestions', 'iq_questions_list');
function iq_questions_list($atts) {

    extract(shortcode_atts(array(
      'post_type' => 'interview-questions',
      'category' => 'wordpress',
    	'taxonomy' => 'interview-questions-category',
    ), $atts));

		ob_start();
    $args = array(
	            'post_type'         =>  'interview-questions',
	            'posts_per_page'    =>  -1, 
	            'orderby'           =>  'date', 
	            'order'             =>  'asc', 
	            'tax_query'         =>  array(
	                                        array(
	                                                'taxonomy' => $taxonomy,
	                                                'field' => 'slug',
	                                                'terms' => $category, 
	                                                'include_children' => false
	                                            )
	                                        )
          );  
                query_posts($args);
                $count = 1;
                if(have_posts()):
                while(have_posts()): the_post();  
                $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
                ?>
                <div class="card r_0 mb-4">
                  <div class="card-header bg-dark r_0">
                    <h4 class="card-title m-0 f_20_22 text-white text_bold"><span class="mr-1"><?php echo $count; ?>)</span> <?php the_title(); ?></h4>
                  </div>
                  <div class="card-body pb-0"> 
                    <?php the_content(); ?>
                  </div>
                </div> 
                <?php 
								$count++;
								endwhile; 
								wp_reset_query();
endif; 

		return ob_get_clean();
}