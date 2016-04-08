<?php

 $healthier_you_feature_image   = get_field('healthier_you_feature_image');
  $healthier_you_section_title   = get_field('healthier_you_section_title');
  $healthier_you_section_description  = get_field('healthier_you_section_description');
  $reason_1_title  = get_field('reason_1_title');
  $reason_1_description  = get_field('reason_1_description');
  $reason_2_title  = get_field('reason_2_title');
  $reason_2_description  = get_field('reason_2_description');

?>


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
