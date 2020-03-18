<?php 
	//Kết nối DB
	$conn = mysqli_connect("localhost", "root", "", "login");

	//Nhận giá trị dc nhập từ form 
	$username = $_POST['user'];
	$password = $_POST['pass'];
	//Chặn SQL Injection

	//Truy vấn DB cho user
	$sql = "SELECT * FROM users WHERE username='".$username."' ";
	$result = mysqli_query($conn, $sql);
	$numRows = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
	$hased = $row['password'];
	if($numRows  == 1){
		if(password_verify($password,$hased)){
			echo "Password verified";
			// Thi hành lệnh sql ở dòng 11
			$query = mysqli_query($conn,$sql);
			// Lấy cái kết quả tạo thành mảng
			$result = mysqli_fetch_array($query);
			echo "Login successful!!! ";
			echo "Welcome " . $result['username'] . " with id: " . $result['id'];

			//Dẫn tới trang test socket
			header("Location: test-socket-client.html");
		}
		else{
			echo "Wrong Password";
		}
	}
	else{
		echo "No User found";
	}
?>