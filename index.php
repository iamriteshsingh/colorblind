<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<title>Color Blind Game |CHANDAN|RITESH|DEEPAK|</title>
<link rel="stylesheet" href="css/gstyle.css"/>
</head>
<body id = "div1" bgcolor="#ff66666">
	<div id='box' style=" height:500px; width:500px;position:relative;left:30%;top:20%; background-color:#ddd;border-radius:10px; "> 
<?php
for($i=0;$i<9;$i++) 
{
          if($i==4)
     	  echo " <a onclick = 'auto_loade()'><span style='background-color: blue;width:31.5%; height:31.5%;text-align:center; text-position:absolute;'><div style='position:relative;top:40px;'><h2 style='color:#ddd; font-family:Comic Sans MS;'>START</h2></div></span></a> ";
     	else
          echo " <span style='background-color: blue;width:31.5%; height:31.5%;'></span>"; 		
 	
}
?>
<script>
 function auto_loade(){
        	$.ajax({
			  type: 'POST',
		      url: "tr.html",
    	  	  cache: false,
     	      success: function(result){
				//  console.log(data);
             $("#div1").html(result);} 
		          });
		  }
	  </script>
</div>
<div>
<!-- hitwebcounter Code START -->
<a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6482335&style=0014&nbdigits=5&type=page&initCount=1529" title="free hits" Alt="free hits"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Track My Website" 
                                        target="_blank" style="font-family: Geneva, Arial, Helvetica, sans-serif; 
                                        font-size: 8px; color: #686A6F; text-decoration: none ;"><strong>Track My Website                                        </strong>
                                        </a>   
                            
</div>
</body>