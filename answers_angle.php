<?php
  // FOR ANGLE
	// get side a, b, and c from the text fields
	$sideA_2 = $_POST['side-a-2'];
  $sideB_2 = $_POST['side-b-2'];
  $sideC_2 = $_POST['side-c-2'];

	// calculate side c
	$angleCRad_2 = acos( ($sideA_2 ** 2 + $sideB_2 ** 2 - $sideC_2 ** 2) / (2 * $sideA_2 * $sideB_2) );
  $angleCDeg_2 = $angleCRad_2 * 180 / pi();
  $angleC_2AnsRounded = round($angleCDeg_2, 2);
?>
<h3>Results:</h3>
Angle C is <?php echo "$angleC_2AnsRounded"; ?>°.