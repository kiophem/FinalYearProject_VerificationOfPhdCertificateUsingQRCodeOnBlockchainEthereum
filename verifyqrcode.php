<?php

// Including the autoload file
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
	<title>Verify Certificate</title>

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
  
    <!-- Bootstrap CSS -->
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"-->
  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
  	<!--script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script-->

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
<section id="header" class="header-three">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Verify Certificate</h1>
              		 <h3 class="wow fadeInUp" data-wow-delay="0.9s">It is valid? Is it fake? Verify it here!</h3>
           		</div>
			</div>

		</div>
	</div>		
</section>


<!-- Verify certificate section
================================================== -->
<section id="contact">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
         	<div class="google_map">
				<img src="img/verify.png" class="img-responsive" alt="Verify Certificate">
			</div>
		</div>

      <div class="col-lg-5 mx-auto">
        <div class="card card-body p-5 rounded border bg-white">
          <br><h1 class="mb-4 text-center">QR Code Scanner</h1><br>
		  
            <!----video tag used to scan the qr code-->
			  <div class="mx-3 mb-3">
				<center><video id="preview" class="ratio ratio-1x1" width="70%" height="70%"></video></center>	
			  </div>
				
              <div class="contact-form">
				<form id="contact-form"  method="POST">
					<br><input name="certNo" type="text" name="certNo" id="certNo" class="form-control" placeholder="Your Certificate Number" required readonly><br>
					<center><button type="submit" name="verify" class="btn btn-primary">
                    Verify
                    </button></center><br><br>
               <center><div class="alert alert-info" role="alert" id="status"></div></center>
				</form>
        </div>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 	<script src="js/instascan.min.js"></script>
	<script src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
	
    let scanner = new Instascan.Scanner({video:document.getElementById('preview')});
    Instascan.Camera.getCameras().then(function(cameras){
        if (cameras.length>0)
        {
            // 0 open the front camera
            // 1 open the back camera
            scanner.start(cameras[0])
        }
        else
        {
            alert("No Camera Found");
        }
    }).catch(function(e)
    {
        console.error(e);
    });
    // scan then qr code part
    scanner.addListener('scan',function(e){
	 
		let string = e;		
		const qrText = string;
		
        document.getElementById("certNo").value = qrText.toString();
    });
	
    </script>

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
]	, '0x0f2Cd754A5dFfe8e34F4C2ac5Dc6191fF2f7C502');
		}
		
		//process for submission
		
        async function pushContractInfo(a)
		{
    		const isValid = await window.contract.methods.isValidCertificate(a).call();
        if(isValid)
        {
          alert("Certificate is valid.");
        } else
        {
          alert("Certificate is fake.");
        }
    		//updateStatus(`Contract Successfully Pushed to Blockchain`);
    		//var id = document.getElementById('certNo').value;
    		//window.location.replace('submitcertificate.php');
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
  if(isset($_POST['verify']))
	{
		$certNo = $_POST['certNo'];
		//$query = "select * from addcertificate where certNo = '$certNo'";
        //$result = mysqli_query($con,$query);
        //$row = mysqli_num_rows($result);
		
		//do something with the hashed value from database here;
        //if($row>0)
        //{
        //echo "<script>alert('The certificate is valid!');</script>";
			//echo "<script type='text/javascript'> document.location ='scanqrcode.php'; </script>";
        echo "<script type='text/javascript'>pushContractInfo('$certNo');</script>";
		//}else
		//{
			//echo "<script>alert('Certificate is fake!');</script>";
		//}
    
	}
  ?>
</body>
</html>
