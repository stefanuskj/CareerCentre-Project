<?php
	$con = mysqli_connect("localhost","root","","game_ti");
	function json($query)
	{
		global $con;
		$que = mysqli_query($con,$query);
		$arr = array();
		while($row = mysqli_fetch_assoc($que))
		{
			array_push($arr,$row);
		}
		return json_encode($arr);
	}
	session_start();
?>