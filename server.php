<?php
require('mysqli_connect.php');
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// REGISTER USER
if (isset($_POST['submit'])) {
    
  // receive all input values from the form
  $username = mysqli_real_escape_string($dbc, $_POST['username']);
  $firstname = mysqli_real_escape_string($dbc, $_POST['first_name']);
  $lastname = mysqli_real_escape_string($dbc, $_POST['last_name']);
  $password_1 = mysqli_real_escape_string($dbc, $_POST['password']);
  $password_2 = mysqli_real_escape_string($dbc, $_POST['cnfpassword']);
  $email = mysqli_real_escape_string($dbc, $_POST['email']);
    

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM login WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($dbc, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO login (username, password,conformpassword,firstname,lastname,email) 
  			  VALUES('$username','$password_1','$password_2','$firstname','$lastname','$email')";
  	mysqli_query($dbc, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../home/home.php');
  }
}



if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($dbc, $_POST['username']);
  $password = mysqli_real_escape_string($dbc, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM login WHERE username='$username'";
  	$results = mysqli_query($dbc, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../home/home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>

