<?php
/*
  Template Name: Home Page
 */

//Custom Fields
  $course_url      = get_post_meta( 7, 'course_url', true );
  $button_text     = get_post_meta( 7, 'button_text', true );
  $optin_text      = get_post_meta( 7, 'optin_text', true );
  $optin_button_text      = get_post_meta( 7, 'optin_button_text', true );

// Advanced Custom Fields
  $healthier_you_feature_image   = get_field('healthier_you_feature_image');
  $healthier_you_section_title   = get_field('healthier_you_section_title');
  $healthier_you_section_description  = get_field('healthier_you_section_description');
  $reason_1_title  = get_field('reason_1_title');
  $reason_1_description  = get_field('reason_1_description');
  $reason_2_title  = get_field('reason_2_title');
  $reason_2_description  = get_field('reason_2_description');

  $instructor_section_title = get_field('instructor_section_title');
  $instructor_section_name = get_field('instructor_section_name');
  $bio_excerpt = get_field('bio_excerpt');
  $full_bio = get_field('full_bio');
  $twitter_username = get_field('twitter_username');
  $facebook_username = get_field('facebook_username');
  $snapchat_username = get_field('snapchat_username');
  $big_circle_stat_1 = get_field('big_circle_stat_1');
  $big_circle_stat_2 = get_field('big_circle_stat_2');
  $big_circle_stat_3 = get_field('big_circle_stat_3');


get_header(); ?>



<!-- HERO -->
  <section>
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
  </section>

  <!-- OPT IN SECTION -->

  <section id="optin">
    <div class="container">
      <div class="row">

        <div class="col-sm-8">
          <p class="lead"><?php echo $optin_text; ?></p>

        </div>
        <div class="col-sm-4">
          <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
            <?php echo $optin_button_text; ?>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- BOOST YOUR INCOME -->
  <section id="boost-income">
    <div class="container">
      
      <div class="section-header">
        <!-- If user uploaded an image -->
        <?php
          if( !empty($healthier_you_feature_image) ) : ?>
          
            <img src="<?php echo $healthier_you_feature_image['url']; ?>" alt="<?php echo healthier_you_feature_image['alt'] ?>">

          <?php endif; ?>

        
        <h2><?php echo $healthier_you_section_title; ?></h2>
      </div><!-- section-header -->
      
      <p class="lead"><?php echo $healthier_you_section_description; ?></p>
      <div class="row">
        <div class="col-sm-6">
          <h3><?php echo $reason_1_title; ?></h3>
          <p><?php echo $reason_1_description; ?></p>
        </div><!-- end col -->
        
        <div class="col-sm-6">
          <h3><?php echo $reason_2_title; ?></h3>
          <p><?php echo $reason_2_description; ?></p>
        </div><!-- end col -->
      </div><!-- row -->
    
    </div><!-- container -->
  </section><!-- boost-income -->
  
  
  
  
  
  <!-- VIDEO FEATURETTE
  ================================================== -->
  <section id="featurette">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2>We Are More Excited About Health than this Guy</h2>
          <iframe width="420" height="315" src="https://www.youtube.com/embed/PleFw1gZ8GM" frameborder="0" allowfullscreen></iframe>
        </div><!-- end col -->
      </div><!-- row -->      
    </div><!-- container -->
  </section><!-- featurette -->
  
  
  <!-- INSTRUCTOR
  ================================================== -->


  <section id="instructor">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-6">
          <div class="row">
            <div class="col-lg-8">
              <h2><?php echo $instructor_section_title; ?><small><?php echo $instructor_section_name; ?></small></h2>
            </div><!-- end col -->
            
            <div class="col-lg-4">
              <?php if( !empty($facebook_username) ):  ?>
              <a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <?php endif; ?>

              <?php if( !empty($instagram_username) ):  ?>
              <a href="https://instagram.com/<?php echo $instagram_username; ?>" class="badge social instagram" target="_blank"><i class="fa fa-instagram"></i></a>
            <?php endif; ?>
            </div><!-- end col -->
          
          </div><!-- row -->
          
          <p class="lead"><?php echo $bio_excerpt; ?><p>
          
          <?php echo $full_bio; ?>
          
          <hr>
          
          <h3>The Numbers <small>They Don't Lie</small></h3>
          <div class="row">
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $big_circle_stat_1; ?> <span>industry experience</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- end col -->
            
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $big_circle_stat_2; ?> <span>summary</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- end col -->
            
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $big_circle_stat_3; ?> <span>summary</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- end col -->
          </div><!-- row -->
          
        </div><!-- end col -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- instructor -->
  
  
  <!-- TESTIMONIALS
  ================================================== -->
  <section id="kudos">
    <div class="container">
      <div class="row">
      
        <div class="col-sm-8 col-sm-offset-2">
          <h2>What People Are Saying About Lazaro Nutrition</h2>
          
          <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                Pork belly direct trade stumptown, portland kickstarter man bun 90's cold-pressed chartreuse. Craft beer quinoa blue bottle chartreuse, yr messenger bag organic four dollar toast slow-carb blog vice. Venmo church-key shabby chic, lomo humblebrag slow-carb schlitz salvia flannel raw denim plaid green juice dreamcatcher affogato VHS. 
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->
          
          <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Illustration of a man with a beard">
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                Williamsburg narwhal tattooed, pickled viral bicycle rights franzen slow-carb semiotics everyday carry blue bottle selfies vinyl pork belly. Scenester tousled affogato humblebrag lumbersexual chartreuse. Hella semiotics waistcoat, heirloom venmo etsy bitters ethical gochujang yuccie you probably haven't heard of them tousled. 
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->
  
          <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                Semiotics cardigan etsy plaid slow-carb umami wolf. Shoreditch readymade salvia, mumblecore yr pork belly cardigan semiotics occupy leggings deep v single-origin coffee photo booth echo park. Squid kogi scenester cardigan, next level YOLO artisan hashtag. Gentrify blog messenger bag, trust fund neutra poutine street art jean shorts. 
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->
          
        </div><!-- end col -->
        
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- kudos -->
  

<?php get_footer(); ?>
