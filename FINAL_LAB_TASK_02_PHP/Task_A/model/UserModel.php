<?php
	
require_once('product_db.php');

function validateUser($username, $Buyingprice $Sellingprice){
	$conn = getConnection();
	$sql = "select * from products where username='{$username}',Buyingprice='{$Buyingprice}' and Sellingprice='{$Sellingprice}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}

function insertUser($user){
	$conn = getConnection();
	$sql = "insert into products values('', '{$user['username']}', '{$Buyingprice['Buyingprice']}', '{$Sellingprice['Sellingprice']}', '{$user['type']}')";

	$result = mysqli_query($conn, $sql)

	if($result){
		return true;
	}else{
		return false;
	}

}

function getUserbyId($id){
	
	$conn = getConnection();
	$sql = "select * from products where id='{$id}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getAllUser(){

	$conn = getConnection();
	$sql = "select * from products";
	$result = mysqli_query($conn, $sql);
	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}
	return $users;
}

function updateUser($user){
	$conn = getConnection();
	$sql = "update products set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', type='$user['type']'";
	$result = mysqli_query($conn, $sql)
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function deleteUser($id){
	$conn = getConnection();
	$sql = "delete from products where id='{$id}";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function getUserByName($username){
	$conn = getConnection();
	$sql = "select * from products where username='{$username}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

?>