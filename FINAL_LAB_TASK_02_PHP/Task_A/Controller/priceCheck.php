<?php
	session_start();
	require_once('../model/UserModel.php');

	if(isset($_POST['addProduct'])){

		$username 	= $_POST['username'];
		$Buyingprice 	= $_POST['Buyingprice'];
		$SellingPrice 	= $_POST['SellingPrice'];
		

		if($username == "" || $Buyingprice == "" || $SellingPrice == ""){
			echo "null value found...";
		}else{
			
			}
		}
	}


?>