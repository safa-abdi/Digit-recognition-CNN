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
		.col{
			color:#F0B908;
			font-family:arial, sans-serif;
			text-align:center;
        }
		.btn_valid {
            text-align:center;
			valign=bottom;
        }  
	</style>
  </head>
  <body>
	<section class="ftco-section">
    	<div class="container">
		<div class="heading-section ftco-animate mb-5">
                  <span class="subheading" align='center'>Mission</span>
                  <h2 class="mb-4 " align='center'>Nos missions</h2>
                </div>
        </div>
				<!--------------Fourniture des bandes transporteuses en caoutchouc-------------------->
				<h3 class="col">Fourniture des bandes transporteuses en caoutchouc</h3><br>
				<br>
					<table width=90%  align='center'>
						<tr><td> </td></tr>

<?php
include_once("modele/bande.php");
$pi=new bande();
$resu=$pi->listeB();
if (array($resu)){
foreach($resu as $row){
echo "
            <form action='suppB.php' method='post'>
					<tr><td>
					<a href='comm.php'>
					<img src='img/$row[image]' name='a' width='350px' height='300px'>
					<p name='p' value=$row[idB]></p>
					</a>
					</td>
						<td align='center' >
								<div class='one-half'>
								<h5>$row[NomB]</h5><br>
								<br>
								<br>
								<input type='hidden' name='d' value=$row[idB]>
							   <button type='submit' class='btn btn-danger'>Supprimer</button>
								  <a href='view\modifB.php'><input type='button' class='btn btn-info' value='modifier'></a>
								</td>
								</div>
			    	</td>
				</form>
				<tr><td>&emsp;</td></tr>
				</tr>
				";}
			}
			?>
	</table>
	</section>
	
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

