<?php get_header(); ?> 

<!-- Banner UI 1 -->
<section class="common-section-ui bg_cream pt_70">
  <div class="container">
      <div class="row">
          <div class="col-12">
            <h2 class="heading_style type2 text-center"><span class="text-success">Search </span> <span class="text-primary">Codes</span> </h2>
            <form class="fui fui1 mb_40" action="" method="get" enctype="multipart/form-data" autocomplete="off">
              <!-- <input type="hidden" name="post_type" value="post" /> -->
              <div class="form-group">
                <div class="search-box">
                  <input value="<?php echo $_GET['s']; ?>" name="s" type="text" class="form-control" required="required" placeholder="Search by keywords. eg. PHP, HTML, Create form etc">
                  <i class="fa fa-search icon" aria-hidden="true"></i>
                </div> 
              </div>
              <div class="form-group text-center">
                <input type="submit" value="Search" class="btn btn-primary btnui3s w-100" />
              </div>
            </form>
          </div>
      </div>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="f20">Search Results</h2>
      </div>
      <?php  
      if(have_posts()): 
        $count = 0;
        while(have_posts()): the_post();  
        $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
      ?>
      <div class="col-12">
        <div class="card cui3">
          <?php if(has_post_thumbnail()) { ?>
            <a href="#" class="d-inline-block hidei"><img class="card-img-top r_0" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" /></a>
          <?php } else { ?>
          <a href="#" class="d-inline-block hidei"><img class="card-img-top r_0" src="https://picsum.photos/300/150" alt=""></a>
          <?php } ?>
          <div class="card-body pri_30 pli_30 pbi_30">
             <div class="text_bold f18 mb_10"><a class="tdn text-primary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
             <div class="text-dark px_5 py_5 mb_10 f12 d-flex justify-content-between">
               <span><i class="fa fa-user mr_5 text-primary" aria-hidden="true"></i> <?php the_author(); ?></span>
               <span><i class="fa fa-clock mr_5 text-primary" aria-hidden="true"></i> <?php //echo get_the_date(); ?> <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' ); ?></span>
              </div>
             <p class=""><?php echo wp_trim_words(get_the_content(), 26) ?></p>
             <div class="text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm  btnui3s text-white w-100"><?php _e('View More Details'); ?> <i class="ml_5 fas fa-angle-double-right    "></i></a></div>  
          </div>
        </div>
      </div>
      <?php  
        endwhile; 
        wp_reset_query();
        else:
          ?>
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="">Content not found for <span class="text_bold text-primary"><?php echo $_GET['s']; ?></span>.</div>
              </div>
            </div>
          </div>
          <?php
        endif; 
      ?>      
    </div>
  </div>
</section>
      
<?php get_footer(); 