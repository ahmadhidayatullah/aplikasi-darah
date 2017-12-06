<?php  

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, x-xsrf-token");

$con=mysqli_connect("localhost","root","","appdarah");


$sql = "SELECT `A`.*,`B`.* FROM `stock_darah` `A`,`cat_darah` `B`  WHERE `A`.`id`=`B`.`id`";

$result = mysqli_query($con, $sql);


while ($row = mysqli_fetch_row($result)) {

	$output [] = array('nm' => $row[3],'qty' => $row[1]);

}


echo json_encode($output);
 ?>