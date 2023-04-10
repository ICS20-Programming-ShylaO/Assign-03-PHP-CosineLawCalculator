<?php
  // FOR ANGLE
	// get side a, b, and c from the text fields
	$sideAAng = $_POST['side-a-ang'];
  $sideBAng = $_POST['side-b-ang'];
  $sideC = $_POST['side-c'];

	// calculate side c
	$angleCAns = (($sideAAng ** 2 + $sideBAng ** 2 - $sideC ** 2)/(2 * $sideAAng * $sideBAng))/cos(1);
  $angleCAnsRounded = round($angleCAns, 2);
?>
<h3>Results:</h3>
Angle C is about <?php echo "$angleCAnsRounded" ?>°.