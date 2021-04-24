<?php
  
  if(isset($_POST['submit']))
  {
  
  
  $firstname  =$_POST['first_name'];
  $lastname  =$_POST['last_name'];
  $Accounttype  =$_POST['dropdown'];
  $TransactionID  =$_POST['tid'];
  $Monthlysalary  =$_POST['salary'];
  $Gender  =$_POST['gender'];
  $Dateofbirth  =$_POST['DOB'];
  $Telephonenumber  =$_POST['tpnumber'];
  $Email  =$_POST['Email'];
  $RoadNo =$_POST['rnumber'];
  $HouseNo=$_POST['hnumber'];
  $StreetName=$_POST['Name'];
  
 if($firstname=="" || $lastname=="" || $Accounttype=="" || $TransactionID=="" || $Monthlysalary=="" || $Dateofbirth=="" || 
     $Gender=="" || $Telephonenumber=="" || $Email=="" || $RoadNo ="" || $HouseNo="" || $StreetName="")
  {
	  echo "Null Submission...";
  }else{
	  
	  header('location: ../view/LogIn.html');
	  
	  echo $firstname;
	  echo "<br>";
	  echo $lastname;
	  echo "<br>";
	  echo $Accounttype;
	  echo "<br>";
	  echo $TransactionID;
	  echo "<br>";
	  echo $Monthlysalary;
	  echo "<br>";
	  echo $Gender;
	  echo "<br>";
	  echo $Dateofbirth;
	  echo "<br>";
	  echo $Telephonenumber;
	  echo "<br>";
	  echo $Email;
	  echo "<br>";
	  echo $RoadNo;
	  echo "<br>";
	  echo $HouseNo;
	  echo "<br>";
	  echo $StreetName;
	  
  }
  }
?>
