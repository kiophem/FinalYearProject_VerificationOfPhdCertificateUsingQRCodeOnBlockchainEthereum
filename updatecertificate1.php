<?php 
	//Database Connection
	include('dbconnection.php');
	
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
	<title>Update Certificate</title>

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
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Update Certificate</h1>
              		 <h3 class="wow fadeInUp" data-wow-delay="0.9s">Update your submitted certificate if there is any typo. But, you cannot change your certificate number!</h3>
           		</div>
			</div>

		</div>
	</div>		
</section>


<!-- Update certificate section================================================== -->
<section id="contact">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
         	<div class="google_map">
				<img src="img/update.png" class="img-responsive" alt="Update Certificate">
			</div>
		</div>

		<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
			<h1>Update certificate here!</h1>
			<div class="contact-form">
				<form id="contact-form"  method="POST">
					<input name="certNo" type="text" name="certNo" class="form-control" placeholder="Your Certificate Number" required>
					<input name="name" type="text" name="name" class="form-control" placeholder="Your Name" required>
                    <input name="ic" type="text" name="ic" class="form-control" placeholder="Your IC Number" required>
                    <input name="studentId" type="text" name="studentId" class="form-control" placeholder="Your Student ID" required>
                    <input name="programme" type="text" name="programme" class="form-control" placeholder="Your Programme" required>
                    <input name="convoDate" type="text" name="convoDate" class="form-control" placeholder="Your Convocation Date" required>
                    <input name="semesterFinish" type="text" name="semesterFinish" class="form-control" placeholder="Your Semester Ends On" required>
					<center><div class="contact-submit">
						<input type="submit" class="form-control submit" name="submit" value="Update"><br>
					</div></center>
               <center><div class="alert alert-info" role="alert" id="status"></div></center>
				</form>
			</div>
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

		//Here, the code in the parameter for window.web3.eth.Contract will be different for each compilation. It is because,
		//the smart contract that is used is compiled online on Remix. Hence, the ABI Code will be different each time.
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
		
	//0x0f2Cd754A5dFfe8e34F4C2ac5Dc6191fF2f7C502 is the address of the developer blockchain wallet account, which is Rinkeby Test Network on Metamask.

	//process for submission
		
	//Here, the function pushContractInfo is used to push the parameters into the Ethereum blockchain. How?
	//The smart contract will first be compiled on Remix. And then, the user will pay the amount needed (in ETH) to update their certificate to the blockchain.
	//a,b,c,d,e,f,g are the informations that are pushed into the Ethereum Blockchain.
        async function pushContractInfo(a,b,c,d,e,f,g)
		{
    		const account = await getCurrentAccount();
    		const coolNumber = await window.contract.methods.updateCertificate(a,b,c,d,e,f,g).send({ from: account });
    		updateStatus(`Contract Successfully Pushed to Blockchain`);
		}
		
        async function getCurrentAccount() {
            const accounts = await window.web3.eth.getAccounts();
            return accounts[0];
		}

		//The function lets the user know that the website is connected to the Ethereum blockchain. It means the user may add certificates, delete certificates, update certificates, and scan QR codes.
		//It is important to know that they are connected to each other. It means that the data that is used is from the Ethereum blockchain too, not only from the Database.
		async function load() 
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
	</script>
	<?php
	//As usual, the data that is entered by the user will be automatically hashed using SHA256.
	//After the data is updated in the database, it will be pushed into the Ethereum blockchain through a smart contract on Remix.
	//Hence, at the end, the data will be updated on both the database and the Ethereum blockchain. 
	if(isset($_POST['submit']))
	{
		//Getting Post Values
		$certNo			= $_POST['certNo'];
		$name 			= hash('sha256',$_POST['name']);
		$ic 			= hash('sha256',$_POST['ic']);
		$studentId 		= hash('sha256',$_POST['studentId']);
		$programme 		= hash('sha256',$_POST['programme']);
		$convoDate 		= hash('sha256',$_POST['convoDate']);
		$semesterFinish = hash('sha256',$_POST['semesterFinish']);
		
		$select = mysqli_query($con,"SELECT id FROM addCertificate WHERE certNo='$certNo' ");
		$row = mysqli_num_rows($select);
		if($row > 0){
			//Query for data updation
			$query =  "update addCertificate set name='$name', ic='$ic', studentId='$studentId', programme='$programme',
			convoDate='$convoDate', semesterFinish='$semesterFinish' where certNo = '$certNo'";	
			$result = mysqli_query($con,$query);
			
			if ($result) {	
				echo "<script type='text/javascript'>pushContractInfo('$certNo','$name','$ic','$studentId','$programme','$convoDate','$semesterFinish');</script>";	
			} 	
		}
		else {
			//Besides the certificate number, other information can be updated in the Update Certificate section. 
			//But if the certificate number also needs to be changed, the user has to delete the certificate number in the Delete Certificate section.
			//And add the new certificate.
			echo "<script>alert('Certificate cannot be updated. Please try again');</script>";
		}
	
		$con->close();
	}
	?>
</body>
</html>
