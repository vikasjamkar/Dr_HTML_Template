<?php include 'header.php'?>

<div class="clearfix"></div>

<!-- Start Breadcrumbs -->
	<section class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mobile-res">
					<h2>Photo Gallery</h2>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active">Photo</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Breadcrumbs -->


<div class="clearfix"></div>

<section class="w3l-about">
<div class="container">

<div class="row align-items-center">


<div class="demo-gallery p-3">

            <ul id="lightgallery" class="list-unstyled row">

                <li  class="col-xs-4 col-sm-4 col-md-4 col-lg-4" data-responsive="images/happiness..jpeg"  data-src="images/happiness..jpeg" data-sub-php="<h4>Ramlex</h4>">
                <a href=""><img class="img-responsive img-thumbnail photoBox" src="images/happiness..jpeg"></a>
                </li>

                <li  class="col-xs-4 col-sm-4 col-md-4 col-lg-4" data-responsive="images/happiness.jpeg"  data-src="images/happiness.jpeg" data-sub-php="<h4>Ramlex</h4>">
                <a href=""><img  class="img-responsive img-thumbnail photoBox" src="images/happiness.jpeg"></a>
                </li>

                <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4" data-responsive="images/ramlex-1.jpg"  data-src="images/ramlex-1.jpg" data-sub-php="<h4>Ramlex</h4>">
                <a href=""><img class="img-responsive img-thumbnail" src="images/ramlex-1.jpg"></a>
                </li>

                <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4" data-responsive="images/ramlex-2.jpg"  data-src="images/ramlex-2.jpg" data-sub-php="<h4>Ramlex</h4>">
                <a href=""><img class="img-responsive img-thumbnail" src="images/ramlex-2.jpg"></a>
                </li>


                <li class="col-xs-4 col-sm-4 col-md-4" data-responsive="images/ramlex-3.jpg"  data-src="images/ramlex-3.jpg" data-sub-php="<h4>Ramlex</h4>">
                <a href=""><img class="img-responsive img-thumbnail" src="images/ramlex-3.jpg"></a>
                </li>


                 <li class="col-xs-4 col-sm-4 col-md-4" data-responsive="images/ramlex-4.jpg"  data-src="images/ramlex-4.jpg" data-sub-php="<h4>Ramlex</h4>">
                <a href=""><img class="img-responsive img-thumbnail" src="images/ramlex-4.jpg"></a>
                </li>


                 <li class="col-xs-4 col-sm-4 col-md-4" data-responsive="images/ramlex-5.jpg"  data-src="images/ramlex-5.jpg" data-sub-php="<h4>Ramlex</h4>">
                <a href=""><img class="img-responsive img-thumbnail" src="images/ramlex-5.jpg"></a>
                </li>



                <li class="col-xs-4 col-sm-4 col-md-4" data-responsive="images/ronch-1.jpg"  data-src="images/ronch-1.jpg" data-sub-php="<h4>Ronch</h4>">
                <a href=""><img class="img-responsive img-thumbnail" src="images/ronch-1.jpg"></a>
                </li>


                 <li class="col-xs-4 col-sm-4 col-md-4" data-responsive="images/ronch-2.jpg"  data-src="images/ronch-2.jpg" data-sub-php="<h4>Ronch</h4>">
                <a href=""><img class="img-responsive img-thumbnail" src="images/ronch-2.jpg"></a>
                </li>


                 <li class="col-xs-4 col-sm-4 col-md-4" data-responsive="images/ronch-3.jpg"  data-src="images/ronch-3.jpg" data-sub-php="<h4>Ronch</h4>">
                <a href=""><img class="img-responsive thumbail img-thumbnail" src="images/ronch-3.jpg"></a>
                </li>



                <!--  <li class="col-xs-4 col-sm-4 col-md-3" data-responsive="images/ronch-3.jpg"  data-src="images/ronch-3.jpg" data-sub-php="<h4>Ronch</h4>">-->
                <!--<a href=""><img class="img-responsive thumbail img-thumbnail" src="images/ronch-4.jpg"></a>-->
                <!--</li>    -->


            </ul>
        </div>



        
</div>
</section>

<div class="clearfix"></div>

<?php include "footer.php" ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
        </script>
        <script src="js-m/lightgallery-all.min.js"></script>