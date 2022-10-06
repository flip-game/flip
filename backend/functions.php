<?php 

// connect to database (With flip! Source, automatically registers to LocalHost, so you wont get into our VPS.
$db = mysqli_connect('localhost', 'root', '', 'DatabaseName');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password  =  e($_POST['password']);
	$password_confirmation  =  e($_POST['password_confirmation']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password != $password_confirmation) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);

			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
		}else{
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $query);
die();

			// get id of the created user
			$username = mysqli_insert_id($db);

			$_SESSION['user'] = $username; // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: https://me-real.fantasyrepl.repl.co/account/home/');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: https://me-real.fantasyrepl.repl.co/account/register");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$username = mysqli_fetch_assoc($results);
			if ($username['user_type'] == 'admin') {

				$_SESSION['user'] = $username;
				$_SESSION['success']  = "You are now logged in";
				header('location: https://me-real.fantasyrepl.repl.co/account/home/admin/');		  
			}else{
				$_SESSION['user'] = $username;
				$_SESSION['success']  = "You are now logged in";

				header('location: https://me-real.fantasyrepl.repl.co/account/home/');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
