<!DOCTYPE html>
<html>
	
	<head>
		
		<title> Sign up form </title>
		
		<style type="text/css">			
			input[type="submit"]{cursor: pointer;}
		</style>

	</head>
	
	<body>

		<center> <!-- Canh giữa văn bản -->
			
			<h3> Sign up here </h3>

			<form action="connect.php" method="POST">

				<table>
					
					<tr>
						
						<td> User name: </td>
						<td> <input type="text" name="username" placeholder="Enter username here"> </td>

					</tr>

					<tr>
						
						<td> Password: </td>
						<td> <input type="password" name="password" placeholder="Enter password here"> </td>

					</tr>

					<tr>

						<tr>
							
							<td> <input type="submit" name="submit" value="Sign up"></td>
							<td> Already user ? <a href="login.php"> Login here </a> </td>

						</tr>

					</tr>

				</table>
				
			</form>

		</center>

	</body>
</html>