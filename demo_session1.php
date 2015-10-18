
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
		$_SESSION["favcolor"] = "green";
		$_SESSION["favanimal"] = "cat";
		echo "Session variables are set.";
	?>
</body>
</html>