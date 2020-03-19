<?php  
 //Attendance Insert PHP  
 $connect = mysqli_connect("localhost", "root","", "attendance");  
 $data=json_decode(file_get_contents("php://input"));
 $str = $data->attendance;
 //$str1 = str_replace('false,', 'A', $str);
 //$str1 = str_replace('true,', 'P', $str1);
 $str1 = str_replace('false', 'A', $str);
 $str1 = str_replace('true', 'P', $str1);
 $str1 = str_replace(',', '', $str1);
 
 $staff_id=mysqli_real_escape_string($connect, $data->staff_id);
	 
	  
	  $dat= mysqli_real_escape_string($connect, $data->dat);
	  $sub_code = mysqli_real_escape_string($connect, $data->sub_code);
	  $slot= mysqli_real_escape_string($connect, $data->slot);
	  $head= mysqli_real_escape_string($connect, $data->head);
	  $dat=date("Y-m-d", strtotime($dat));
 date_default_timezone_set("Asia/Kolkata");
 $row=mysqli_fetch_array(mysqli_query($connect,"select * from staff where staff_id='$staff_id'"));	
 $shift=$row[4];
 $branch=$row[5];
 $row1=mysqli_fetch_array(mysqli_query($connect,"select * from subject where sub_code='$sub_code' and staff_id='$staff_id'"));	
 $sem=$row1[4];
 if($sem==1 or $sem==2)
 {
	 $year="FYDC";
 }
 else if($sem==3 or $sem==4)
 {
	 $year="SYDC";
 }
 else if($sem==5 or $sem==6)
 {
	 $year="TYDC";
 }
 if(count($data) > 0)  
 {	
		$r=mysqli_fetch_array(mysqli_query($connect,"select max(ID) from attendance"));
		$id=$r[0]+1;
		if(mysqli_num_rows(mysqli_query($connect, "select * from attendance where date='$dat' and slot='$slot' and staff_id='$staff_id' and year='$year' and branch='$branch' and shift='$shift'")) > 0)
		{
			echo "This Attendance is Already Added";
		}
		else if(mysqli_query($connect,"insert into attendance values('$id','$staff_id','$dat','$sub_code','$str1','$shift','$branch','$slot','$head','$year')"))
		{
		echo "Attendance Added";
		}
		else
		{
			echo "Error:Attendance Not Added";
		}
 }
?> 