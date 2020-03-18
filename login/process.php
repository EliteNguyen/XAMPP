<?php 
	//Kết nối DB
	$conn = mysqli_connect("localhost", "root", "", "login");

	//Nhận giá trị dc nhập từ form 
	$username = $_POST['user'];
	$password = md5($_POST['pass']);
	//Chặn SQL Injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($conn,$username);
	$password = mysqli_real_escape_string($conn,$password);

	//Truy vấn DB cho user
	$sql = "SELECT `id`,`username`,`password` FROM `users` WHERE `username`=\"$username\" AND `password`=\"$password\"";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_array($result);
	// $row = ['id','user','pass']

	//Điều kiện kiểm tra
	if ($row[1] == $username && $row[2] == $password) {
			echo "Login successfull!!! welcome ".$row[1]." with id: ".$row[0];
			echo "<script>alert('Login successfull')</script>";

			//Chuyển trang sau khi login
			header("Location: test.php");	
		} else {
			echo "Failed to login";
		}

?>