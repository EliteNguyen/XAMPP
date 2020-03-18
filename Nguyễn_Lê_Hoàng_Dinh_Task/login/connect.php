<?php
	if(isset($_POST['submit'])){
		
		// Lấy dữ liệu người dùng nhập vào
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		
		// Kiểm tra kết nối tới db
		// Ngoài cách này còn một cách khác là include một file khác vào, nếu cần em sẽ chỉ anh
		$conn = mysqli_connect("localhost","root","","login");
		if(mysqli_connect_error()){
			echo "Kết nối lỗi";
			$e1 = mysqli_connect_error();
			$e2 = mysqli_connect_errno();
			header("error.php?e1=$e1&e2=$e2");
			die();
		}

		// Lấy bất kì dữ liệu nào từ cột username của bảng users trùng với biến $username
		$sql = "SELECT `username` FROM `users` WHERE `username`=\"$username\"";

		// Thi hành câu lệnh ở trên bằng mysqli_query()
		$query = mysqli_query($conn,$sql);

		// Kiểm tra dữ liệu trả về, nếu bằng không có nghĩa là tên đăng nhập chưa tồn tại
		if(mysqli_num_rows($query) == 0){
			
			// Thêm dữ liệu vào cột username và password
			$sql = " INSERT INTO `users` (`username`,`password`) VALUES (\"$username\",\"$password\")";
			
			// Thi hành câu lệnh ở trên bằng mysqli_query()
			mysqli_query($conn,$sql);
			
			// Thông báo đăng kí thành công
			echo "Đăng ký tài khoản thành công!";
			echo "<script>alert('Đăng kí thành công')</script>";
		}else{
			
			// Thông báo đăng kí không thành công
			echo "<script>alert('Tên đăng nhập đã tồn tại')</script>";
		}
	}
?>