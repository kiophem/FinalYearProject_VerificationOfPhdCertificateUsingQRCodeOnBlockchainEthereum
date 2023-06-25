<?php 
	//Databse Connection file
	include('dbconnection.php');
	$hasImage = false;

    if(isset($_GET['download'])){

        $qrImage = $_GET['file'];
		$file_path = 'QRCode/'.$qrImage;
		$filename = $qrImage;
		header("Content-Type: application/octet-stream");
		header("Content-Transfer-Encoding: Binary");
		header("Content-disposition: attachment; filename=\"".$filename."\"");
		echo readfile($file_path);
    }

	if(isset($_POST['submit']))
	{
		//getting the post values
		$certNo 		= $_POST['certNo'];
		$checkquery = mysqli_query($con, "select certNo from addcertificate where certNo='$certNo'");

		if(mysqli_num_rows($checkquery) > 0)
		{
			$query = mysqli_query($con,"SELECT qrImage FROM addcertificate WHERE certNo = '$certNo'");
            $qrImage = mysqli_fetch_assoc($query);
            $hasImage = true;
		}
		else
		{
            echo "<script>alert('Certificate does not exist.');</script>";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--Template 2082 Pure Mix http://www.tooplate.com/view/2082-pure-mix-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title================================================== -->
	<title>Generate QR Code</title>

	<!-- Bootstrap CSS================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons CSS================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Main CSS================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

  <script src='node_modules/web3/dist/web3.min.js'></script>
</head>
<body>


<!-- Preloader section================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="index.php">CERTIPHD</a>
              </div>

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                      <ul id="nav-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="addcertificate.php">Add Certificate</a></li>
                        <li><a href="displaycertificate.php">Download QR Code</a></li>
                        <li><a href="updatecertificate1.php">Update Certificate</a></li>
                        <li><a href="deletecertificate1.php">Delete Certificate</a></li>
                        <li><a href="verifyqrcode.php">Verify Certificate</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>


<!-- Header section================================================== -->
<section id="header" class="header-four">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Generate QR Code</h1>
              		 <h3 class="wow fadeInUp" data-wow-delay="0.9s">Download your QR Code here!</h3>
           		</div>
			</div>

		</div>
	</div>		
</section>


<!-- Download certificate section================================================== -->
<!-- Just in case the user forgets or loses their QR Code, they may come back to the website and download it again. -->
<section id="contact">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
         	<div class="google_map">
				<img src="img/download.png" class="img-responsive" alt="Download Certificate">
			</div>
		</div>

		<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
			<h1>Download certificate here!</h1>
			<div class="contact-form">
				<form id="contact-form"  method="POST">
					<input name="certNo" type="text" name="certNo" class="form-control" placeholder="Your Certificate Number" required>
					<center><div class="contact-submit">
						<input type="submit" class="form-control submit" name="submit" value="Generate QR Code">
					</div></center>
				</form>
			</div>
            <?php if($hasImage){ ?>
            <center>
            <img src="QRCode/<?php echo $qrImage['qrImage']; ?>" class="img-responsive" style="width:300px;height:300px;" alt="QR Code" >
            <div class="contact-submit">
				<a type="submit" class="btn btn-default btn-lg" style="background-color:black!important;color:white!important" role="button" href="displaycertificate.php?download&file=<?php echo $qrImage['qrImage']; ?>">Download QR Code</a><br><br>
			</div></center>
            
            <?php } ?>
		</div>

   </div>
</section>

<!-- Footer section================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2022 CertiPHD - Designed by Nur Khairunnisa | AI190168</p>
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>


<!-- Javascript ================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
