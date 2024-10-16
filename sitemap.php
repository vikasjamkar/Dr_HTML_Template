<?php include "header.php"?>

<div class="clearfix"></div>

<!-- Start Breadcrumbs -->
	<section class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Sitemap</h1>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active">Sitemap</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Breadcrumbs -->


<div class="clearfix"></div>

<section>
 <!--Sidebar Page-->
  <div class="sidebar-page-container">
    <div class="container">
      <div class="sitemap boxnew">
      <div class="sitemap-row">
        <div class="sitemap-tabs wow bounceInLeft">
          <div id="myNavbar">

             <ul>
              <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>

              <li><a href="about-prashant-khankhoje.php"><i class="fa fa-user"></i> About Us</a></li>

               <li><a href="photo-gallery.php"><i class="fa fa-user"></i>Gallery</a></li>

               <li><a href="testimonials.php"><i class="fa fa-user"></i>Testimonials</a></li>

             <li><a href="contact-prashant-khankhoje.php"><i class="fa fa-phone"></i> Contact Us</a></li>

              <li><a href="enquiry.php"><i class="fa fa-envelope-o"></i> Enquiry</a></li>
            </ul>

          </div>

        </div>



        <hr>



        <div class="sitemapbox">
        <div class="row">


          <div class="col-md-6 col-sm-12 wow bounceInLeft" data-wow-delay="0.3s"><div id="w3sec1" class="sitemap-text">
          <p class="w3sitemap-title"><!--<i class="fa fa-sitemap"></i> --><a href="">Our Expertise</a></p>
          <div class="col-md-12 col-sm-12 sitemap-text-grids">
          <ul>
                     <li> <a href="essentials-meetings.php">Essentials of Meeting</a> </li>
                    <li><a href="emotional-chakravuh.php">Emotional Chakravuh</a> </li>
                    <li><a href="happiness-unlimited.php">Happiness Unlimited</a> </li>
                    <li><a href="unleashing-the-leader.php">Unleashing the Leader in U</a> </li>
                    <li><a href="team-building.php">Team Building</a>  </li>
                    <li><a href="time-management.php">Time management</a>  </li>
                    <li><a href="vision-mission-goal.php">Vision, Mission & Goal setting</a> - </li>
                    <li><a href="stress-management.php">Stress Management</a>  </li>
                    <li> <a href="ESG-Sustainability.php">ESG/Sustainability/SDG/BRSR Awareness & Advisory</a>  </li>
                    <li><a href="coping-with-climate-change.php">Coping with Climate Change</a>  </li>
                    <li><a href="Campus-to-Corporate.php">Campus to Corporate – Youth development</a>  </li>
                    <li> <a href="looking-beyond.php">Looking beyond the obvious – 1 to 1 Coaching for Top executives</a>  </li>

                </ul>

</div>

<div class="clearfix"></div>

        </div></div>


        </div>
          <div class="clearfix"> </div>
          <br>
<br>



        </div>
          <div class="clearfix"> </div>
        </div>



      <script>
      $(document).ready(function(){
        // Add scrollspy to <body>
<div class="fixed"> <img src="images/img.gif" class="img-responsive"> </div>
        $('body').scrollspy({target: ".sitemap-tabs", offset: 50});

        // Add smooth scrolling on all links inside the navbar
        $("#myNavbar a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behaviour
        if (this.hash !== "") {
          // Prevent default anchor click behaviour
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('php, body').animate({
          scrollTop: $(hash).offset().top
          }, 800, function(){

          // Add hash (#) to URL when done scrolling (default click behaviour)
          window.location.hash = hash;
          });
        }  // End if
        });
      });
      </script>

    </div> </div> <!-- ------container------------------ -->
  </div>

</section>



<div class="clearfix"></div>

<?php include "footer.php"?>