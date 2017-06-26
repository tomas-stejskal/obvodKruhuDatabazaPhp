<?php
function main()
{
	if(isset($_POST["x"])){
		$data = json_decode($_POST['x']);
		$conn = new mysqli('localhost','root','1234','kruh');
		$sql = "insert into names(name,age) values('".$data->name."',".$data->age.");";
		$conn->query($sql);
		$conn->close();
	}
}
main();
?>