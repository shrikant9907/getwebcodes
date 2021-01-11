<?php
get_header();
// include 'search-form.php';
?>

<div class="pt_100 d-flex align-items-center">
 <div class="container">
  <div class="mr-auto text-center ptb_40">
    <div class="row">
     <div class="col-12">
      <h1>
        <span class="d-block w-100 text-primary mb_10 f30 lh32">Welcome to All Programs .tech</span>
      </h1>
<!--       <h2>
           <span class="d-block w-100 text_light mb_20 f_40_42">Programing is all about practice. </span>
           <span class="d-block w-100 text_light mb_20 f_40_42">Try more programs, with more examples, </span>
       <span class="d-block w-100 mb_30 text-primary mont_serrat f_40_42">To improve your programming logics</span>
      
      </h2> -->
      <div class="mb_40 f_16_22"> 
        <p class="mb_10">You will get the best online tutorials, programs and interview questions in programming on our website for free. We are creating a large collection of programs for our users to learn programming from beginner level to advanced. We are using a practical approach to a programming language like PHP or Python.</p>
        <p>As we know, programming is all about practice.<br />
So, We are going to provide you all types of programs that will be easy to learn to the programming. <br />
Try more programs with more examples to improve your programming skills and logic.</p>
        <p><a class="btn btn-primary px_50  pt_10 pb_10 rounded-pill" href="#learnprograms">Start Now</a></p>
      </div>
     </div>
    </div>
  </div>
 </div>
</div>

   
<!-- Section 2 Start -->
<section id="learnprograms" class="bg-light py-5 min_vh_100 d-flex align-items-center">
    <div class="container">
        <div class="mx-auto">
            <div class="row">
                <div class="col-12"><h2 class="mont_serrat heading_style type_2 text-center">Popular <span class="text-primary">Web Programs</span></h2>
                <div class="mb_40 mx-auto">
                    <p class="mb_20 text-center">You will get all basics to advanced programs for the popular programing languages and WordPress.</p>
                </div>
                </div>
            </div>
        </div>

        <?php $topTutorials = $cfs->get('top_tutorials'); ?>
        <div class="mx-auto mx-auto max_w_100p w_800">
            <div class="row">

            <?php foreach($topTutorials as $tutorial) {
                $term_id = $tutorial['category']['0']; 
                $term_link = get_category_link( $term_id );
                ?>
                <div class="col-12 col-sm-6">
                    <div class="mb_20 card text-center r_5 shadow border-0 trans_1_eio">
                        <div class="card-body">
                            <a class="card-link h_100 d-flex align-items-center justify-content-center" href="<?php echo $term_link; ?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $tutorial['icon']; ?>" alt="<?php echo $tutorial['title']; ?>" class="img-fluid card-img-top w_70 max_h_70">
                            </a>
                            <h3 class="card-title f20 lh22">
                                <a class="text-primary tdn" href="<?php echo $term_link; ?>">
                                    <?php echo $tutorial['title']; ?>
                                </a>
                            </h3>
                            <p class="text_light"><?php echo $tutorial['content']; ?></p>
                            <!-- <hr />  -->
                            <ul class="list-group list-group-flush list-unstyled text-left mb_20 f_14_16">
                                <?php
                                
                                $args = array(
                                        'post_type'         =>  'programs', 
                                        'posts_per_page'    =>  5, 
                                        'orderby'           =>  'id', 
                                        'order'             =>  'asc', 
                                        'tax_query'         =>  array(
                                                                    array(
                                                                            'taxonomy' => 'programs-category',
                                                                            'field' => 'id',
                                                                            'terms' => $term_id, 
                                                                            'include_children' => false
                                                                    )
                                                                ) 
                                        );  
                                $top5_tutorials = get_posts($args); 
                                foreach($top5_tutorials as $top) {
                                ?>
                                    <li class="list-group-item px-0 bg-transparent p_y_5">
                                       <a class="link f_14_16" href="<?php the_permalink($top->ID); ?>"><i class="fas fa-angle-double-right text_orange mr_10"></i><span><?php echo $top->post_title; ?></span></a> 
                                    </li>
                                <?php    
                                }    
                                ?>
                            </ul>
                            <!-- <hr />  -->
                            <!-- <div class="buy_btn_wr"><a href="<?php //echo $term_link; ?>" class="btn border-0 p_t_10 pb_10 w_100p btn-primary f_14_18">View All Topics</a></div> -->
                        </div>
                    </div>
                </div>
            <?php } ?>  

            </div>
        </div>

    </div>
</section>
<!-- Section 2 End -->

    <?php $programsTitle = $cfs->get('program_title'); ?>    
    <?php $programsSubTitle = $cfs->get('program_sub_title'); ?>    
    <?php $programsCategory = $cfs->get('programs_category')['0']['category'];
                                ?>    
     <div class="py-5 min_vh_50 d-flex align-items-center">
        <div class="container max_w_100p w_800">
            <div class="row">
                <div class="col-12">
                        <h2 class="mont_serrat heading_style type_2 mbi_60 text-center"><?php echo $programsTitle; ?> <span class="text-primary">Categories</span></h2>
                        <!-- <h3 class="text-center mb-4 text-light"><?php //echo $programsSubTitle; ?></h3> -->
                        
                        <div class="category-list text-center pb_20x">
                            <?php foreach($programsCategory as $procat_id) { 
                                $term = get_term($procat_id);
                            ?>
                                <a href="<?php echo get_term_link($term); ?>" class="btn r_25 px_40 mx_5 mb_20 py_10_10 btn-primary "><?php echo $term->name; ?></a>
                            <?php } ?>
                        </div>
                        
                </div>
            </div>
        </div>  
    </div>    


    <section id="priority" class="ptb_60_40  d-none">
        <div class="container">
            <div class="row">
                 <div class="col-12"><h2 class="heading_style mb_20 f_40_46 text-center text_orange">How It Works</h2> 
                 <p class="mb_50 f_16_22 text-center">Write your code with unique and different logic. We will check and share it for others.</p>
                 </div>
      
                    <!-- Lower Section -->
                    <div class="mx-auto max_w_100p w_800">
                        <div class="row">
                            <div class="col-12 col-sm-6 mb_10 text-left">
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>1</strong></div>
                                    <h3 class="f_18_24 link">Learn programming</h3>
                                    <p class="mb_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 mb_10 text-left">
                            
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>2</strong></div>
                                    <h3 class="f_18_24 link">Create your own logic</h3>
                                    <p class="mb_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
                                  </div>
                                </div>
                            </div><div class="col-12 col-sm-6 mb_10 text-left">
                            
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>3</strong></div>
                                    <h3 class="f_18_24 link">Submit your code for review</h3>
                                    <p class="mb_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
                                  </div>
                                </div>
                            </div><div class="col-12 col-sm-6 mb_10 text-left">
                            
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>4</strong></div>
                                    <h3 class="f_18_24 link">Share with friends</h3>
                                    <p class="mb_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>  
        </div>
    </section>

    <section id="partners" class="ptb_60_40 d-none">
        <div class="container">
            <div class="row">
                 <div class="col-12"><h2 class="heading_style mb_50 f_40_46 text-center ">Follow / Like / Share</h2> 
                 </div>

                 <?php  $banner_social_links = $cfs->get('banner_social_links', 289); ?>

                    <!-- Lower Section -->
                    <div class="mx-auto max_w_100p w_800 text-center">
                        <div class="form-row">
                        <?php if($banner_social_links) { ?>
                          <?php foreach($banner_social_links as $links) { ?>
                            <div class="col">
                                <a href="<?php echo $links['link']['url']; ?>" title="<?php echo $links['link']['text']; ?>" target="_blank" class=" d-inline-block box_shw2 p_20 r_10 tdn font-weight-bold mb_20 f_18_22 w-100"><?php echo $links['link']['text']; ?></a>
                            </div> 
                            <?php } ?>
                        <?php } ?>
                        </div>
                    </div>
            </div>  
        </div>
    </section>

<?php   

get_footer();