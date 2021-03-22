<?php

  $conn = mysqli_connect('localhost','root','',,'webtech');
  
  if($conn)
  {
	  echo "success"
  } else{
	  
	 die('DB connection error...');
  }
	 

?>