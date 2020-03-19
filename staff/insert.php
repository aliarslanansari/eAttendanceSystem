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
 date_default_timezone_set('Asia/Kolkata');
 $staff_id=mysqli_real_escape_string($connect, $data->staff_id);
	 
	  
	  $dat=date("Y-m-d", strtotime(mysqli_real_escape_string($connect, $data->dat)));
	  $flag = mysqli_real_escape_string($connect, $data->flag);
	  $slot= mysqli_real_escape_string($connect, $data->slot);
	  $head= mysqli_real_escape_string($connect, $data->head);
	  $sub_det = mysqli_real_escape_string($connect, $data->sub_code); 
		//$branch=mysqli_real_escape_string($connect, $data->branch); 
		$sub_code=substr($sub_det,0,5);
		$sem=substr($sub_det,6,1);
		$branch=substr($sub_det,8,2);
		$shift=substr($sub_det,11,strlen($sub_det));
		$p=0;
		$a=0;
		for($j=0;$j<strlen($str1);$j++)
			{
				if(substr($str1,$j,1)=='P')
				{
						$p++;
				}
				else{
					$a++;
				}
			}
 date_default_timezone_set("Asia/Kolkata");
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
if($flag==0)
 {
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
			echo "Attendance Added! Absent:".$a." Present:".$p;
			}
			else
			{
				echo "Error:Attendance Not Added";
			}
	 }
 }
 
 if($flag==1)
 {
	 if(count($data) > 0)  
	{
		
			if(mysqli_query($connect,"update attendance set attendance='$str1' where staff_id='$staff_id' and date='$dat' and sub_code='$sub_code' and shift='$shift' and '$branch' and head='$head' and year='$year'"))
			{
			echo "Attendance Updated! Absent:".$a." Present:".$p;
			}
			else
			{
				echo "Error:Attendance Not Updated";
			}
	 }
 } 
 if($flag==3)
 {
 if(mysqli_num_rows(mysqli_query($connect, "select * from attendance where date='$dat' and slot='$slot' and staff_id='$staff_id' and year='$year' and branch='$branch' and shift='$shift'")) == 0)
		{
			echo "No Attendance Found";
		}
 }		
?> 