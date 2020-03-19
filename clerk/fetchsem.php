<?php
	 $connect = mysqli_connect("localhost", "root", "", "attendance");  
	 $data = json_decode(file_get_contents("php://input"));
	 $flag =mysqli_real_escape_string($connect, $data->flag);
	 if($flag==1)
	 {
		date_default_timezone_set('Asia/Kolkata');
		$date = date('Y-m-d');
		$row=mysqli_fetch_array(mysqli_query($connect,"select * from semester where start_date<'$date' and end_date>'$date'"));
		$r['start_date']=$row[2];
		$r['end_date']=$date;
		echo json_encode($r);
	 }
	 if($flag==2)
	 {
		 $date = date('Y-m-d');
	  $r['start_date']=date("Y-m-d", strtotime("-1 week"));
		$r['end_date']= $date;
		echo json_encode($r);
	 }
?>