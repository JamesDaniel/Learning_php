
<!DOCTYPE html>
<html>
<head>
<title>cookie tester</title>
</head>
	<?php
		session_start();
	?>
<body>
	<?php
		session_unset();
		session_destroy();
	?>
</body>
</html>