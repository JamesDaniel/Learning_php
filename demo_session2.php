
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
		echo "Favourite color is " . $_SESSION["favcolor"] . ".<br>";
		echo "Favourite animal is " . $_SESSION["favanimal"] . ".";
	?>
</body>
</html>