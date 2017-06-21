<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body id="#play" bgcolor="#ff6666">
	<div style="height:100px; width:100%;  text-align:center;margin-top:200px;">

	

	<?php
$score = $_POST["score"];
echo "<div style='color:#ddd; font-family:Comic Sans MS;'><h1>Your Score : $score</h1></div>";
?>
<div >
<a href="index.php">
<button  style='color:#ddd; font-family:Comic Sans MS; background-color:#008CBA; border-radius:10px; height:70px;width:350px;text-align:center;margin-top:20px;'>
	<h1>Play Again !</h1>
</button>
</a>
</div>

</body>
</html>
