<!--<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
	</head>

	<body>
		<center>
			<div>
				<h3>Login here </h3>
				<form action="process.php" method="POST">
					<p>
						<label>Username:</label>
						<input type="text" id="user" name="user">
					</p>
					
					<p>
						<label>Password:</label>
						<input type="password" id="pass" name="pass"> 					
					</p> 

					<p>
						<input type="submit" value="Login">
					</p>
				</form>
			</div>
		</center>
	</body>
</html> -->

<!DOCTYPE html>
<html>

	<head>
		<title> Login Form </title>
	</head>

	<body>
		<center> <!-- dùng để canh giữa văn bản  -->
			
			<h3> Login Here </h3>

			<form action="process.php" method="POST">

				<table>
					
					<tr> <!-- dùng để tạo 1 hàng trong bảng -->

						<td> User name: </td> <!-- dùng để tạo nội dung của 1 hàng trong bảng  -->
						<td> <input type="text" id = "user" name="user"> </td>

					</tr>

					<tr>
						
						<td> Password: </td>
						<td> <input type="password" id = "pass" name="pass"> </td>

					</tr> 

					<tr>
						
						<td> <input type="submit" name="submit" value="Login"> </td>
						<td>
							Don't have an account ? <a href="signup.php"> Sign up </a>
						</td>

					</tr>

					<tr>
						<td>
							<td>Forget password ? <a href=""> Get new password </a></td>
						</td>

						
					</tr>

				</table>
				
			</form>
		</center>
	</body>

</html>