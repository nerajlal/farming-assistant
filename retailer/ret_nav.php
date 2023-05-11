<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Farming Assistant::Retailer</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Polish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
            window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Poppins:400,500" rel="stylesheet">
   </head>
   <body>
      <div class="header-outs" id="header">
         <!--banner -->
         <div class="header-w3layouts">
            <div class="one-headder">
               <!--//navigation section -->
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="hedder-up">
                     <ul>
                        <li>
                           <h1><a class="navbar-brand" href="index.php"></a>RETAILER</h1>
                        </li>
                        <li>
                           <div class="sub-headder">
                              <h2><a href="index.html">Farming<br>Assiatant</a></h2>
                           </div>
                        </li>
                                            </ul>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                     <ul class="navbar-nav ">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Advertisements
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="nav-link " href="ins_adds.php">Add</a>
                              <a href="view_adds.php" class="nav-link">View</a>
                             
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Products
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="nav-link " href="view_f_pdt.php">View</a>
                              <a href="ordered.php" class="nav-link">Order</a>
                                                      </div>
                        </li>
                        <li class="nav-item">
                           <a href="add_feedback.php" class="nav-link ">Feedback</a>
                        </li>
                        <li class="nav-item">
                           <a href="../index.php" class="nav-link">Logout</a>
                        </li>
                                             </ul>
                  </div>
               </nav>
               <!--//navigation section -->
               <div class="clearfix"> </div>
            </div>
         </div>
            
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working--> 
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
               auto: true,
               pager:false,
               nav:true ,
               speed: 900,
               namespace: "callbacks",
               before: function () {
                  $('.events').append("<li>before event fired.</li>");
               },
               after: function () {
                  $('.events').append("<li>after event fired.</li>");
               }
            });
         
         });
      </script>
      <!--// responsiveslides banner-->   
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
               event.preventDefault();
               $('html,body').animate({
                  scrollTop: $(this.hash).offset().top
               }, 900);
            });
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
            var defaults = {
               containerID: 'toTop', // fading element id
               containerHoverID: 'toTopHover', // fading element hover id
               scrollSpeed: 1100,
               easingType: 'linear'
            };
         
         
            $().UItoTop({
               easingType: 'easeOutQuart'
            });
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>