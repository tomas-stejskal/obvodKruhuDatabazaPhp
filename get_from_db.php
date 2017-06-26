<?php
function main()
{
	if($_GET['x'] == ""){
		$sql = "select * from names;";
	}else{
		$sql = "select * from names where name like'".$_GET['x']."';";
	}
	
	$big_data = array();
	
	$conn = new mysqli('localhost','root','1234','kruh');
	
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
		$data = new StdClass();
		$data->id = (int)$row['id'];
		$data->name = $row['name'];
		$data->age = (int)$row['age'];
		
		array_push($big_data,$data);
	}
	$conn->close();
	echo json_encode($big_data);
}
main();
?>