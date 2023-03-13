<?php

// Function to check if email is valid
function is_valid_email($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Validate form inputs
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$profile_pic = $_FILES['profile_pic']['name'];
	$profile_pic_tmp = $_FILES['profile_pic']['tmp_name'];

	if (empty($name) || empty($email) || empty($password) || empty($profile_pic)) {
		die("All fields are required.");
	}

	if (!is_valid_email($email)) {
		die("Invalid email format.");
	}

	// Save profile picture to server
	$uploads_dir = 'uploads/';
	$timestamp = date('YmdHis');
	$profile_pic_name = $timestamp . '_' . $profile_pic;
	move_uploaded_file($profile_pic_tmp, $uploads_dir . $profile_pic_name);

	// Save user's data to CSV file
	$user_data = array($name, $email, $profile_pic_name);
	$fp = fopen('users.csv', 'a');
	fputcsv($fp, $user_data);
	fclose($fp);

	// Set session and cookie
	session_start();
	$_SESSION['name'] = $name;
	setcookie('name', $name, time() + (86400 * 30), '/'); // Cookie expires in 30 days

	header("Location: display_users.php");
	exit();
}

?>
