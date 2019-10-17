<?php
$conn = new mysqli("localhost","root","","practice");
$result = $conn->query("SELECT * FROM details");
$outp = array();
while( $rs = $result->fetch_array(MYSQLI_ASSOC)){
	$outp[] = $rs;
}
 echo json_encode($outp);
?>
