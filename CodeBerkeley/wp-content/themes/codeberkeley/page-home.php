<?php

/*
	Template Name: Home Page
 */


// Advance Custom Field

$hero_title           = get_field('hero_title');
$hero_subtitle        = get_field('hero_subtitle');
$hero_tagline         = get_field('hero_tagline');
$hero_tagline_author  = get_field('hero_tagline_author');

$call_to_action_text  = get_field('call_to_action_text');

$main_title           = get_field('main_title');
$main_subtitle        = get_field('main_subtitle');
$main_content         = get_field('main_content');

$main_card_title_1    = get_field('main_card_title_1');
$main_card_content_1  = get_field('main_card_content_1');

$main_card_title_2    = get_field('main_card_title_2');
$main_card_content_2  = get_field('main_card_content_2');


$main_card_title_3    = get_field('main_card_title_3');
$main_card_content_3  = get_field('main_card_content_3');

	
get_header(); ?>

<!-- ============
    Hero 
================ -->

<section id="hero" class="hero-image">
    <div class="container clearfix">
      <div class="row" class="text-lead">

        <!-- ============ hero contents ================ -->

        <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
            <h1 class="hero-text"><?php echo $hero_title; ?></h1>     

            <h3 class="sub-hero-text"><?php echo $hero_subtitle; ?></h3>  
        </div> <!-- hero and sub-hero text -->

        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
            <p class="lead"> <?php echo $hero_tagline; ?> <small><span class="author-lead"><?php echo $hero_tagline_author; ?></span></small></p>                 
        </div><!-- Leading text -->


        <!-- ============ Optin ================ -->
        
        <section id="optin">
            <div class="container">
                <div class="row">
                  <div class="col-sm-4 col-sm-offset-4">

                    <button class="btn btn-success btn-lg btn-block" href="#" data-toggle="modal" data-target="#myModal"><?php echo $call_to_action_text; ?></button>

                  </div><!-- col and offset -->
                </div><!-- row -->        
            </div><!-- container -->  
        </section> <!-- #optin -->

        </div><!-- row and text-lead -->
    </div> <!-- container clearfix -->
</section> <!-- hero -->



<!-- ============ 1 ================ -->

<section id="content-base-firstPage">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">

              <section class="firstPage-LedingInfo">
                <h3 class="info-heading "><?php echo $main_title; ?></h3>
                <h5 class="info-subheading"><?php echo $main_subtitle; ?></h5>
                <p><?php echo $main_content; ?></p>
              </section> <!-- firstPage-LeadingInfo -->



    <!-- ============
        MAIN-CARD 
    ================ --> 

        <section class=" row main-card">
        <div class="cards">

        <div class="card">
          <div class="card-image">
            <a href="our_program.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/card-picture.jpg" alt="picture of the table with computer"></a>       
          </div>

          <div class="card-header">
            <h6><a href="our_program.html"><?php echo $main_card_title_1; ?></a></h6>
          </div>
          <div class="card-copy">
            <p><?php echo $main_card_content_1; ?></p>
          </div>
        </div>


        <div class="card">
          <div class="card-image">
            <a href="our_program.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/card-picture.jpg" alt="picture of the table with computer"></a>
          </div>
          <div class="card-header">
            <h6><a href="our_program.html"><?php echo $main_card_title_2; ?></a></h6>
          </div>
          <div class="card-copy">
            <p><?php echo $main_card_content_2; ?></p>
          </div>
        </div>


        <div class="card">
          <div class="card-image">
            <a href="our_program.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/card-picture.jpg" alt="picture of the table with computer"></a>
          </div>
          <div class="card-header">
            <h6><a href="#"><?php echo $main_card_title_3; ?></a></h6>
          </div>
          <div class="card-copy">
            <p><?php echo $main_card_content_3; ?></p>
          </div>
        </div>

      </div>
      </section>


    </div><!-- col-lg-12 -->
   </div><!-- row -->

</div><!-- container -->
</section><!-- content-base -->

<?php get_footer(); ?>
