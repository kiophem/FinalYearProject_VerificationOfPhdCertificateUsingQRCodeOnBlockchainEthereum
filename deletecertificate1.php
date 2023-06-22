<?php 
//Database Connection
include('dbconnection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Delete Certificate</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

  <script src='node_modules/web3/dist/web3.min.js'></script>
</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
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


<!-- Header section
================================================== -->
<section id="header" class="header-five">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Delete Certificate</h1>
              		 <h3 class="wow fadeInUp" data-wow-delay="0.9s">Delete your certificate with only one click!</h3>
           		</div>
			</div>

		</div>
	</div>		
</section>


<!-- Add certificate section
================================================== -->
<section id="contact">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
         	<div class="google_map">
				<img src="img/delete.png" class="img-responsive" alt="Delete Certificate">
			</div>
		</div>

		<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
			<h1><br><br><br>Delete certificate here!</h1>
			<div class="contact-form">
				<form id="contact-form"  method="POST">
					<input name="certNo" type="text" name="certNo" class="form-control" placeholder="Your Certificate Number" required>
					<center><div class="contact-submit">
						<input type="submit" class="form-control submit" name="delcertNo" onclick="return confirm('Do you really want to delete ?');" value="Delete"><br>
					</div></center>
               <center><div class="alert alert-info" role="alert" id="status"></div></center>
				</form>
			</div>
		</div>

   </div>
</section>

<!-- Footer section
================================================== -->
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


<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

<!--JAVA SCRIPT-->
	<!--JAVA SCRIPT-->
	<script type="text/javascript">   
		async function loadWeb3() 
		{
			if (window.ethereum) 
			{
				window.web3 = new Web3(window.ethereum);
				window.ethereum.enable();
			}
		}
		
		async function loadContract() 
		{
			return await new window.web3.eth.Contract(
				[
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "_certNo",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_name",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_ic",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_studentId",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_programme",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_convoDate",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_semesterFinish",
				"type": "string"
			}
		],
		"name": "addCertificate",
		"outputs": [
			{
				"internalType": "bool",
				"name": "Status",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"internalType": "string",
				"name": "CertificateNo",
				"type": "string"
			}
		],
		"name": "addedCertificate",
		"type": "event"
	},
	{
		"inputs": [],
		"name": "DebugAddCertificate",
		"outputs": [
			{
				"internalType": "bool",
				"name": "Status",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "DebugDeleteAllCertificate",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "_certNo",
				"type": "string"
			}
		],
		"name": "DebugUpdateCertificate",
		"outputs": [
			{
				"internalType": "bool",
				"name": "Status",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "_certNo",
				"type": "string"
			}
		],
		"name": "deleteCertificate",
		"outputs": [
			{
				"internalType": "bool",
				"name": "Status",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"internalType": "string",
				"name": "CertificateNo",
				"type": "string"
			}
		],
		"name": "deletedCertificate",
		"type": "event"
	},
	{
		"inputs": [],
		"name": "kill",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "_certNo",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_name",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_ic",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_studentId",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_programme",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_convoDate",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_semesterFinish",
				"type": "string"
			}
		],
		"name": "updateCertificate",
		"outputs": [
			{
				"internalType": "bool",
				"name": "Status",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"internalType": "string",
				"name": "CertificateNo",
				"type": "string"
			}
		],
		"name": "updatedCertificate",
		"type": "event"
	},
	{
		"inputs": [],
		"name": "getContractInfo",
		"outputs": [
			{
				"internalType": "address",
				"name": "Owner",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "ContractAddress",
				"type": "address"
			},
			{
				"internalType": "string",
				"name": "ContractName",
				"type": "string"
			},
			{
				"internalType": "address",
				"name": "Registrar",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "TrustedAgent",
				"type": "address"
			},
			{
				"internalType": "string",
				"name": "SystemDeveloper",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "getListCertificateStatus",
		"outputs": [
			{
				"internalType": "string",
				"name": "FirstCertNo",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "LatestCertNo",
				"type": "string"
			},
			{
				"internalType": "uint256",
				"name": "TotalMapCert",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "LastUpdate",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "_certNo",
				"type": "string"
			}
		],
		"name": "isValidCertificate",
		"outputs": [
			{
				"internalType": "bool",
				"name": "Status",
				"type": "bool"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "_certNo",
				"type": "string"
			}
		],
		"name": "readCertificate",
		"outputs": [
			{
				"internalType": "string",
				"name": "Name",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "IC",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_StudentId",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "Programme",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "ConvoDate",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "SemesterFinish",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "_certNo",
				"type": "string"
			}
		],
		"name": "readCertificatePublic",
		"outputs": [
			{
				"internalType": "string",
				"name": "CertNo",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "Name",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "Programme",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "ConvoDate",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "_certNo",
				"type": "string"
			}
		],
		"name": "searchCertificate",
		"outputs": [
			{
				"internalType": "string",
				"name": "CertData",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "PrevCertNo",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "NextCertNo",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "_searchValue",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_searchType",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_searchIndex",
				"type": "string"
			}
		],
		"name": "searchData",
		"outputs": [
			{
				"internalType": "string",
				"name": "CertData",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "NextCertNo",
				"type": "string"
			},
			{
				"internalType": "bool",
				"name": "Status",
				"type": "bool"
			},
			{
				"internalType": "string",
				"name": "Message",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "whoAmI",
		"outputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	}
]
	, '0x0f2Cd754A5dFfe8e34F4C2ac5Dc6191fF2f7C502');
		}
		
		//process for submission
		
        async function pushContractInfo(a)
		{
    		const account = await getCurrentAccount();
    		const coolNumber = await window.contract.methods.deleteCertificate(a).send({ from: account });
    		updateStatus(`Contract Successfully Pushed to Blockchain`);
		}
		
        async function getCurrentAccount() {
            const accounts = await window.web3.eth.getAccounts();
            return accounts[0];
		}
		
		async function load() 
		{
			await loadWeb3();
			window.contract = await loadContract();
			updateStatus('You are connected to Ethereum blockchain!');
		}
		
		function updateStatus(status) 
		{
			const statusEl = document.getElementById('status');
			statusEl.innerHTML = status;
			console.log(status);
		}
		
		
		load();
	</script>
  <?php
  if(isset($_POST['delcertNo']))
  {
  $rcertNo=$_POST['certNo'];
  $sql=mysqli_query($con,"delete from addCertificate where certNo='$rcertNo'");
  echo "<script type='text/javascript'>pushContractInfo('$rcertNo');</script>";    
  } 
  ?>
</body>
</html>
