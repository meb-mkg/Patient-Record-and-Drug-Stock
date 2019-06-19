<?php
session_start();
include 'connection.php';

if(isset($_POST['login']))
{
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	
	//$password = md5($passwowrd);

	if(empty($username) && empty($password))
	{
		echo "<script>alert('Username and Password are required!')</script>";
		echo "<script>window.open('index.php', '_SELF')</script>";
		//header("location: index.php?error=Username and Password are required!");
	}
	if(empty($username))
	{
		echo "<script>alert('Username is required!')</script>";
		echo "<script>window.open('index.php', '_SELF')</script>";
	}
	if(empty($password))
	{
		echo "<script>alert('Password is required!')</script>";
		echo "<script>window.open('index.php', '_SELF')</script>";
	}

	$sql = "select * from users where username = '$username' && password = '$password' ";
	$run = $conn->query($sql);
	$row = $run->fetch_assoc();
	//$result = mysqli_num_rows($row);
	if(!$row)
	{
		echo "<script>alert('Invalid Username or Password!')</script>";
		echo "<script>window.open('index.php', '_SELF')</script>";
	}
	else
	{
		if(isset($_POST['remember_me']))//if(!empty($_POST['remember_me']))
		{
			setcookie('username', $username, time() + (86400 * 30) ); // 1 * 365 * 24 * 60 * 60
			setcookie('password', $password, time() + (86400 * 30) );
		}
		else
		{
			if(isset($_COOKIE['username']))
			{
				setcookie('username', '');
			}
			if(isset($_COOKIE['password']))
			{
				setcookie('password', '');
			}
		}
		$_SESSION['username'] = $username;
		$role = $row['role_code'];

		switch($role)
		{
			case 'admin':
			header('location: admin.php');
			break;
			case 'nurse':
			header("location: nurse.php");
			break;
			case 'pharmacist':
			header("location: pharmacist.php");
			break;
			default:
			header('location: index.php');
		}
	}
}
?>