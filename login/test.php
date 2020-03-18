<!DOCTYPE html>
<html>
	<head>
		<title> text </title>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
		
		<script>
		    var socket = io.connect('http://localhost:6969');// clent khởi tạo kết nối socket đến server
		    socket.on('news', function (data) { // lắng nghe event 'news' được server gửi đến
		            console.log(data); // log data để kiểm tra
		        });
		    $(document).ready(function () {
		        $('#send_private').click(function(){
		            socket.emit('private',  $('#data').val()); // gửi event 'private'
		             $('#data').val('');
		        });
		        $('#send_broadcast').click(function(){
		            socket.emit('broadcast',  $('#data').val()); // gửi event 'broadcast'
		            $('#data').val('');
		        });
		        $('#send_all_client').click(function(){
		            socket.emit('all client',  $('#data').val()); // gửi event 'all client'
		            $('#data').val('');
		        })
		    });
		</script>

	</head>
	<body>
		<button type="button">Click Me!</button> <br>
		<a href="login.php">Log out!</a>
		
	</body>
</html>