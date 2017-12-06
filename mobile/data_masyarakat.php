<?php  

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, x-xsrf-token");

$con=mysqli_connect("localhost","root","","appdarah");


$sql = "SELECT `A`.*,`B`.* FROM `data_masyarakat` `A`,`cat_darah` `B`  WHERE `A`.`cat_darah`=`B`.`id`";

$result = mysqli_query($con, $sql);


while ($row = mysqli_fetch_row($result)) {

	$output [] = array('gol' => $row[8],'nm' => $row[1],'almt' => $row[2],'hp' => $row[4]);

}


echo json_encode($output);
 ?>