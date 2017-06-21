<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/gstyle.css"/>
</head>
<body>

<?php

$mytext = $_POST['text1'];
//echo "$mytext";


$arr=array("#ff9933","#009999","#99ff66","#99ff66","#99ff66","#4dffc3","#4dffc3","#4dffc3","#0066cc","#bf80ff","#336699","#006666","#669999","#133a26","#c65353","#ff3300","#993300","#cc9900","#99cc00","#ffff00","#ff8c1a","#ff8c1a","#ff8c1a","#cc3399","#b3ffb3","#009933","#000066","#1a0000","#ff4d4d","#666699","#0d0d0d","#991f00","#008080","#00004d","#ffff00","#000000","#80ff80");
$arr2=array("#ffa64d","#00b3b3","#aaff80","#aaff80","#aaff80","#66ffcc","#66ffcc","#66ffcc","#0073e6","#cc99ff","#3973ac","#008080","#75a3a3","#194d32","#cc6666","#ff471a","#b33c00","#e6ac00","#ace600","#ffff33","#ff9933","#ff9933","#ff9933","#d147a3","#ccffcc","#00b33c","#000080","#330000","#ff6666","#7575a3","#1a1a1a","#b32400","#009999","#000066","#ffff1a","#0d0d0d","#99ff99");

$lv=array(4,4,9,9,16,16,25,25,36,36,36,49,49,49,49,64,64,64,64,64,81,81,81,81,81,81,100,100,100,100,100,100,100,100,100,121,121,121,121,121,121,121,121,121);
$size=array(48,48,31.5,31.5,23.25,23.25,18.25,18.25,15,15,15,12.62,12.62,12.62,12.62,10.84,10.84,10.84,10.84,10.84,9.5,9.5,9.5,9.5,9.5,9.5,8.38,8.38,8.38,8.38,8.38,8.38,8.38,8.38,8.38,7.45,7.45,7.45,7.45,7.45,7.45,7.45,7.45,7.45);
$lvl=0;
$r = mt_rand(0,35); //Generating a Random Number between 0 to 255
$g = mt_rand(0,$lv[$mytext]-1);
$b = mt_rand(0,255);
 
//Generating Random Height
$height = mt_rand(300,650); //

?>
<div id='box' class='wrapper'> 
<?php
for($i=0;$i<$lv[$mytext];$i++) 
{
	if($i==$g) 
 	{     $c = $arr2[$r] ;
		  echo " <a onclick='auto_load()' ><span style='background-color: {$c};width:{$size[$mytext]}%; height:{$size[$mytext]}%;'></span></a>  ";    } 
 	else 
 	{  
 		$c= $arr[$r] ;
     	  echo " <span style='background-color: {$c};width:{$size[$mytext]}%; height:{$size[$mytext]}%;'></span>  ";
 	} 
}

 
?>  
</div>


</body>
</html>