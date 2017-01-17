<?php
	$conn = mysqli_connect("localhost","root","","project_db");
	if(isset($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
		$query = "select * from user_details where chr_firstname='$name'";
		$result = mysqli_query($conn,$query);

		if(mysqli_num_rows($result)>=1) {
			while($row = mysqli_fetch_assoc($result)) {
			
			$msg = $row[];
			// $msg[0]["ResponseCode"]="200";
			// $msg[0]["status"] = "Success";
			}
		} else {
			$msg = array("ResponseCode"=>"404","status"=>"Not Success");
		}

	} else {
		$msg = array("ResponseCode"=>"404","status"=>"please enter a data");
	}
	echo json_encode($msg);
?>