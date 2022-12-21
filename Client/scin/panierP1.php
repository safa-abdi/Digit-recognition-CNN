<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SCIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>SCIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">
    
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
    
        <link rel="stylesheet" href="css/aos.css">
    
        <link rel="stylesheet" href="css/ionicons.min.css">
    
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
    
        
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/style.css">
      <style>
            .cr{
                color: navy;
                font-size: 20px;
            }
            p {text-align: center;}
            h1{
             font-family: Helvetica, Arial, sans-serif;
             color:#5499C7  ;
             text-align:center;
            }
        </style>
    </head>
    <body>
    <h1>Caracteristiques de la bande</h1><br>
        <?php
    include_once("model/bande.php");
    include_once("model/panier.php");
    $cmd=new panier();
    $pi=new bande();
    if(isset($_POST['be'])){
    $page = $_POST['be'];
    $res=$pi->getbande($page);
    $table_bdd=$res->fetchAll();
    foreach($table_bdd as $row){
       $id=$row["idB"];
       $n=$row["NomB"] ;
       $im=$row["image"];
      } 
      $nb=$_POST['nbr'];
      $ii=random_int(1,165257685);
      $cmd->ajoutComm($n,$im,$nb,$ii);
      header("location:menu.php");
    }
    ?>
   <!-------------------------Footer------------------------->
		
	<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">SCIN</h2>
            <p></p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Heures d'ouverture</h2>
            <ul class="list-unstyled open-hours">
              <li class="d-flex"><span>Lundi</span><span>8:00 - 17:00</span></li>
              <li class="d-flex"><span>Mardi</span><span>8:00 - 17:00</span></li>
              <li class="d-flex"><span>Mercredi</span><span>8:00 - 17:00</span></li>
              <li class="d-flex"><span>Jeudi</span><span>8:00 - 17:00</span></li>
              <li class="d-flex"><span>Vendredi</span><span>8:00 - 12:00</span></li>
              <li class="d-flex"><span>Samedi</span><span>8:00 - 12:00</span></li>
              <li class="d-flex"><span>Dimanche</span><span> Closed</span></li>
            </ul>
          </div>
        </div>
    
        <div class="col-md-10 col-lg-6">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Instagram</h2>
            <div class="thumb d-sm-flex">
              <a href="#" class="thumb-menu img" style="background-image: url(img/i1.jpg);">
              </a>
              <a href="#" class="thumb-menu img" style="background-image: url(img/i2.jpg);">
              </a>
              <a href="#" class="thumb-menu img" style="background-image: url(img/i3.jpg);">
              </a>
              <a href="#" class="thumb-menu img" style="background-image: url(img/i4.jpg);">
              </a>
            </div>
            <div class="thumb d-flex">
              <a href="#" class="thumb-menu img" style="background-image: url(img/i5.jpg);">
              </a>
              <a href="#" class="thumb-menu img" style="background-image: url(img/i7.jpg);">
              </a>
              <a href="#" class="thumb-menu img" style="background-image: url(img/i8.png);">
              </a>
              <a href="#" class="thumb-menu img" style="background-image: url(img/i9.jpg);">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> Projet réalisée par <i class="icon-heart" aria-hidden="true"></i> Abdi Safa DSI 23
          </p>
        </div>
      </div>
    </div>
  </footer>
  
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

