//Custom Fields

<?php
  $course_url      = get_post_meta( 7, 'course_url', true );
  $button_text     = get_post_meta( 7, 'button_text', true );
?>  
<!-- HERO -->

   <section id="hero" data-type="background" data-speed="5">
      <article>
        <div class="container clearfix">
          <div class="row">
          
            <div class="col-sm-5">
              <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Lazaro Nutrition" class="logo"> -->
            </div><!-- col -->
            
            <div class="col-sm-7 hero-text">
              <h1><?php bloginfo('name'); ?></h1>
                  <p class="lead"><?php bloginfo('description'); ?></p>
                  
                  <div id="price-timeline">
                    <div class="price active">
                      <h4>Nutrition <!-- <small>Ends soon!</small> --></h4>
                      <!-- <span>$149</span> -->
                    </div><!-- end price -->
                    <div class="price">
                      <h4>Workouts<!-- <small>Coming soon!</small> --></h4>
                      <!-- <span>$299</span> -->
                    </div><!-- end price -->
                    <div class="price">
                      <h4>Workshops <!-- <small>Coming soon!</small> --></h4>
                      <!-- <span>$399</span> -->
                    </div><!-- end price -->
                  </div><!-- price-timeline -->

                          <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>
            </div><!-- col -->
            
          </div><!-- row -->
        </div><!-- container -->
      </article>
    </section>  
