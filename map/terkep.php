<?php
$worldname=$_GET['worldname'];
$mapname=$_GET['mapname'];
$zoom=$_GET['zoom'];
$x=$_GET['x'];
$y=$_GET['y'];
$z=$_GET['z'];
?>
<html>

<head>
<title>Térkép | HUNgaros Szerver</title>
</head>

<body>
<iframe src="http://srv.hungaros.hu:3090/?worldname=<?php echo $worldname;?>&mapname=<?php echo $mapname;?>&zoom=<?php echo $zoom;?>&x=<?php echo $x;?>&y=<?php echo $y;?>&z=<?php echo $z;?>" width=100% height=100%></iframe>
</body>

</html>