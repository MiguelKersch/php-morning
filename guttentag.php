<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$offset = strtotime("1 hours");
	date_default_timezone_get('Europe/Amsterdam');
	echo "The time is " . date("h:i", $offset);
	$ochtend = date("6:00");
	$middag = date("12:00");
	$avond = date("18:00");
	$nacht = date("0:00");
	$tijd = date("h:i", $offset);
	

		if(	$tijd >= $ochtend && $tijd <= $middag ){
			 echo '<body style="background-image: url(morning.png); ">';
		}elseif($tijd >= $middag && $tijd <= $avond){
			 echo '<body style="background-image: url(afternoon.png); ">';
		}elseif($tijd >= $avond && $tijd > 	$nacht){
			 echo '<body style="background-image: url(evening.png); ">';
		}elseif($tijd >= $nacht && $tijd <= $ochtend){
			 echo '<body style="background-image: url(night.png); ">';
		}
	
		?>
		<style type="text/css">
		
		</style>
</body>
</html>