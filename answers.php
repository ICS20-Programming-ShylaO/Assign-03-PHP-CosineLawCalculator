<?php
  // FOR SIDE
	// get side a, b, and angle C from the text fields
	$sideA = $_POST['side-a'];
  $sideB = $_POST['side-b'];
  $angleC = $_POST['angle-c'];

	// calculate side c
	$sideCAns = sqrt($sideA ** 2 + $sideB ** 2 - 2 * $sideA * $sideB * cos($angleC));
  $sideCAnsRounded = round($sideCAns, 2);
?>
<h3>Results:</h3>
Side c is about <?php echo "$sideCAnsRounded" ?>cm.
