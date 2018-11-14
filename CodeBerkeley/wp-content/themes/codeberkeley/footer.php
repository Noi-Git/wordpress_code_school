<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CodeBerkeley
 */

?>


<?php wp_footer(); ?>

 <!-- ============
        FOOTER 
    ================ -->    

<footer class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
        <div class="row">

        <div class="col-sm-3 text-left">
          <div class="footer-logo">
            <a href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Code_Berkeley_logo.gif" alt="Code Berkeley logo"></a>
          </div>
          </div>

        <div class="col-sm-3 text-left">
          <ul class="list-unstyled list-inline">
            <li><a href="index.html">Home</a></li>
            <li><a href="our_program.html">Our Program</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about_us.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="student_work.html">Student Project</a></li>

          </ul>
        </div>

        <div class="col-sm-3 text-left">
          <div class="footer-secondary-links">
            <ul class="list-unstyled">
              <li><a href="mailto:jhoffman@peralta.edu.com?Subject=Need%20more%20info%20about%20Code%20Berkeley" target="_top">More Info: Justin Hoffman</a></li>
              <li><a href="tel:510-466-7200">Phone: 510-466-7200</a></li>
              <li><a href="mailto:jhoffman@peralta.edu.com?Subject=Need%20more%20info%20about%20Code%20Berkeley" target="_top">Email:jhoffman@peralta.edu </a></li>
            </ul>
          </div>
        </div>

        <div class="col-sm-3">

            <ul class="list-unstyled text-right">
              <li><a href="http://www.berkeleycitycollege.edu/wp/" target="_blank">&copy; 2017 Berkeley City College</a></li>
            </ul>
      

            <ul class="footer-social list-unstyled">

              <li><a href="https://www.instagram.com/codeberkeley/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/CodeBerkeley/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="https://www.pinterest.com/codeberkeley/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              <li><a href="https://www.facebook.com/codeberkeley/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>

            </ul>
        </div>


            
        </div>
      </div>
    </div>
</footer>



  
    <!-- ============
        Modal 
    ================ -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelop"></i>Subscribe to our Mailing List</h4>
        </div><!-- modal-header -->
        
        <div class="modal-body">
          <p>Simply enter your name and email! We will get you up to date with our newest info, <em>for free</em></p>

          <form class="form-inline" role="form">
            <div class="form-group">
              <label class="sr-only" for="subscribe-name">Your first name</label>
              <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
            </div><!-- form group -->

            <div class="form-group">
              <label class="sr-only" for="subscribe-name">Your email address</label>
              <input type="text" class="form-control" id="subscribe-email" placeholder="Your email address">
            </div><!-- form group -->

          <input type="submit" class="btn btn-danger" value="Subscribe!">
          </form>

          <hr>

          <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>

        </div><!-- modal-body -->

      </div><!-- modal content -->
    </div><!-- modal-dialog -->
  </div><!-- main div -->

  <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/app.js"></script>

<script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</body>
</html>
