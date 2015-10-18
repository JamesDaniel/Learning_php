
<!DOCTYPE html>
<html>
<head>
<title>cookie tester</title>
</head>
	<?php
		$cookie_name = "user";
		$cookie_value = "John Doe";
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	
	?>
<body>
	<?php
		
		if (!isset($_COOKIE[$cookie_name])) {
			echo "<script> location.reload(); </script>"; // cookie will not show up until page is reloaded and sends the cookie 
			echo "Cookie named '" . $cookie_name . "' is not set!";
		} else {
			echo "Cookie '" . $cookie_name . "' is set!<br>";
			echo "Value is: " . $_COOKIE[$cookie_name];
		} 
	?>
</body>
</html>