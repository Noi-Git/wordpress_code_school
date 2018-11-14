<?php

/*
  Template Name: OurProgram Page
 */


// Advance Custom Field

  $program_image_1     = get_field('program_image_1');
  $program_number_1    = get_field('program_number_1');
  $program_title_1     = get_field('program_title_1');
  $program_body_1      = get_field('program_body_1');

  $program_image_2     = get_field('program_image_2');
  $program_number_2    = get_field('program_number_2');
  $program_title_2     = get_field('program_title_2');
  $program_body_2      = get_field('program_body_2');

  $program_image_3     = get_field('program_image_3');
  $program_number_3    = get_field('program_number_3');
  $program_title_3     = get_field('program_title_3');
  $program_body_3      = get_field('program_body_3');

  $program_image_4     = get_field('program_image_4');
  $program_number_4    = get_field('program_number_4');
  $program_title_4     = get_field('program_title_4');
  $program_body_4      = get_field('program_body_4');

  $program_image_5     = get_field('program_image_5');
  $program_number_5    = get_field('program_number_5');
  $program_title_5     = get_field('program_title_5');
  $program_body_5      = get_field('program_body_5');

  $program_image_6     = get_field('program_image_6');
  $program_number_6    = get_field('program_number_6');
  $program_title_6     = get_field('program_title_6');
  $program_body_6      = get_field('program_body_6');

  $program_image_7     = get_field('program_image_7');
  $program_number_7    = get_field('program_number_7');
  $program_title_7     = get_field('program_title_7');
  $program_body_7      = get_field('program_body_7');

  $program_image_8     = get_field('program_image_8');
  $program_number_8    = get_field('program_number_8');
  $program_title_8     = get_field('program_title_8');
  $program_body_8      = get_field('program_body_8');

  $program_image_9     = get_field('program_image_9');
  $program_number_9    = get_field('program_number_9');
  $program_title_9     = get_field('program_title_9');
  $program_body_9      = get_field('program_body_9');

get_header(); ?>

<!-- ============
        Hero 
    ================ -->

    <section id="hero-small-banner">
        <div class="container clearfix">
          <div class="row" class="text-lead">
            <!-- ============ hero contents ================ -->
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                  <h1 class="hero-text-ourProgram">Our Program</h1>     
            </div>
          </div>
        </div>
    </section>


<!-- ============
  OUR PROGRAM 
================ --> 


<section id="content-bese">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        
        <div class="flex-boxes">
          <a href="class_info.html" class="flex-box">
                <!-- If user uploaded an image -->
                <?php if( !empty($program_image_1) ): ?>
                  <img src="<?php echo $program_image_1['url']; ?>" alt="<?php echo $program_image_1['alt']; ?>"
                <?php endif; ?></a>
            <h3 class="flex-title"> <?php echo $program_number_1; ?></h3>
            <h2 class="flex-title"> <?php echo $program_title_1; ?></h2>
            <p><?php echo $program_body_1; ?></p>
          


          <a href="class_info.html" class="flex-box">
             <!-- If user uploaded an image -->
                <?php if( !empty($program_image_2) ): ?>
                  <img src="<?php echo $program_image_2['url']; ?>" alt="<?php echo $program_image_2['alt']; ?>"
                <?php endif; ?></a>
            <h3 class="flex-title"><?php echo $program_number_2; ?></h3>
            <h2 class="flex-title"><?php echo $program_title_2; ?></h2>
            <p><?php echo $program_body_2; ?></p>
          

          <a href="class_info.html" class="flex-box">
             <!-- If user uploaded an image -->
                <?php if( !empty($program_image_3) ): ?>
                  <img src="<?php echo $program_image_3['url']; ?>" alt="<?php echo $program_image_3['alt']; ?>"
                <?php endif; ?></a>
            <h3 class="flex-title"><?php echo $program_number_3; ?></h3>
            <h2 class="flex-title"><?php echo $program_title_3; ?></h2>
            <p><?php echo $program_body_3; ?></p></a>
          
       </div>   


       <div class="flex-boxes">
          <a href="class_info.html" class="flex-box">
             <!-- If user uploaded an image -->
                <?php if( !empty($program_image_4) ): ?>
                  <img src="<?php echo $program_image_4['url']; ?>" alt="<?php echo $program_image_4['alt']; ?>"
                <?php endif; ?></a>
            <h3 class="flex-title"><?php echo $program_number_4; ?></h3>
            <h2 class="flex-title"><?php echo $program_title_4; ?></h2>
            <p><?php echo $program_body_4; ?></p>
          
          
          <a href="class_info.html" class="flex-box">
             <!-- If user uploaded an image -->
                <?php if( !empty($program_image_5) ): ?>
                  <img src="<?php echo $program_image_5['url']; ?>" alt="<?php echo $program_image_5['alt']; ?>"
                <?php endif; ?></a>
            <h3 class="flex-title"><?php echo $program_number_5; ?></h3>
            <h2 class="flex-title"><?php echo $program_title_5; ?></h2>
            <p><?php echo $program_body_5; ?></p>
          

          <a href="class_info.html" class="flex-box">
             <!-- If user uploaded an image -->
                <?php if( !empty($program_image_6) ): ?>
                  <img src="<?php echo $program_image_6['url']; ?>" alt="<?php echo $program_image_6['alt']; ?>"
                <?php endif; ?></a>
            <h3 class="flex-title"><?php echo $program_number_6; ?></h3>
            <h2 class="flex-title"><?php echo $program_title_6; ?></h2>
            <p><?php echo $program_body_6; ?></p></a>
          
        </div>
          
        <div class="flex-boxes">
          <a href="class_info.html" class="flex-box">
             <!-- If user uploaded an image -->
                <?php if( !empty($program_image_7) ): ?>
                  <img src="<?php echo $program_image_7['url']; ?>" alt="<?php echo $program_image_7['alt']; ?>"
                <?php endif; ?></a>
            <h3 class="flex-title"><?php echo $program_number_7; ?></h3>
            <h2 class="flex-title"><?php echo $program_title_7; ?></h2>
            <p><?php echo $program_body_7; ?></p>
          

          <a href="class_info.html" class="flex-box">
             <!-- If user uploaded an image -->
                <?php if( !empty($program_image_8) ): ?>
                  <img src="<?php echo $program_image_8['url']; ?>" alt="<?php echo $program_image_8['alt']; ?>"
                <?php endif; ?></a>
            <h3 class="flex-title"><?php echo $program_number_8; ?></h3>
            <h2 class="flex-title"><?php echo $program_title_8; ?></h2>
            <p><?php echo $program_body_8; ?></p>
          

          <a href="class_info.html" class="flex-box">
             <!-- If user uploaded an image -->
                <?php if( !empty($program_image_9) ): ?>
                  <img src="<?php echo $program_image_9['url']; ?>" alt="<?php echo $program_image_9['alt']; ?>"
                <?php endif; ?></a>
            <h3 class="flex-title"><?php echo $program_number_9; ?></h3>
            <h2 class="flex-title"><?php echo $program_title_9; ?></h2>
            <p><?php echo $program_body_9; ?></p></a>  

        </div>

    

      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
