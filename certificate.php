<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <title>SUCCESS POINT OVERSEAS EDUCATION CONSULTANCY (P) LTD</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">


  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

 



  <link href="css/main.css" rel="stylesheet">
  <link href="css/about.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar" data-offset="80">
<!-- 
  <div id="splashscreen" class="vertical-center text-center">
    <div>
      <img src="img/Logo-Success-point.png" height="auto" width="250">
      <br>
      <br>
      <i class="fa fa-spinner fa-pulse fa-4x fa-fw text-primary"></i>
      <span class="sr-only">Loading...</span>
      <br>
    </div>

  </div> -->
  <div id="body-content" >
  <section class="certificate">  
  <div class="container " >  
  <div class="row">
  <?php
include_once('header.php');
    ?>
  <?php $id=$_GET['id']; 
 echo '<img  class="imgs" src="img/'.$id.'.png"/>';

?>
</div>
</div>
 </section>

    <!-- Navigation -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    <small>Feel free to Contact us</small></h1>
            </div>
        </div>
    </div>
</div> -->
<!-- <section><div class="container" style="border: 1px solid red;"><div class="row"><img src="img/1.png" style="max-width: 100%;height: auto;"></div></div></section> -->
   <div id="footer">
   <?php
include_once('footer.php');
    ?>
   </div>


 
   
   
	  
	


    <a href="#page-top" id="top">
      <img src="img/top.png" />
    </a>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/scrollreveal@4.0.4/dist/scrollreveal.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

  
  <script src="js/main.js"></script>
  <script src="js/include.js"></script>
  <script src="js/splashScreen.js"></script>
  <script src="js/map.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnEXOnd1rQvWtmDOlAyzEgl0RQHFeca2o&callback=initMap">
  </script>
  <script src="js/owlCarousel.js"></script>
</body>

</html>
