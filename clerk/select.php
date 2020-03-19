<?php  
 //select.php  
 
 $connect = mysqli_connect("localhost", "root", "", "attendance");  
 $output = array();  
 $data = json_decode(file_get_contents("php://input"));
	  $flag = mysqli_real_escape_string($connect, $data->flag);
	   if($flag==1){
		
		$staff_id = mysqli_real_escape_string($connect, $data->staff_id);
		$sub_det = mysqli_real_escape_string($connect, $data->sub_code); 
		//$branch=mysqli_real_escape_string($connect, $data->branch); 
		$sub_code=substr($sub_det,0,5);
		$sub_sem=substr($sub_det,6,1);
		$branch=substr($sub_det,8,2);
		$shift=substr($sub_det,11,strlen($sub_det));
 if($sub_sem==1 or $sub_sem==2)
 {
	 $year="FYDC";
 }
 else if($sub_sem==3 or $sub_sem==4)
 {
	 $year="SYDC";
 }
 else if($sub_sem==5 or $sub_sem==6)
 {
	 $year="TYDC";
 }
	//echo $shift;
$query = "select * from student where branch='$branch' and year='$year' and shift='$shift' and status='reg' order by roll asc";  
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }
else 
{
	echo "1";
}	
 }
 if($flag==2){            //FOR STAFF
	$staff_id = mysqli_real_escape_string($connect, $data->staff_id);
	$query = "select * from subject where staff_id='$staff_id' order by shift,sub_branch";  
	$result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }
 }
  if($flag==3){                      //FOR HOD
	$staff_id = mysqli_real_escape_string($connect, $data->staff_id);
	$year = mysqli_real_escape_string($connect, $data->year);
		date_default_timezone_set('Asia/Kolkata');
		$date = date('Y-m-d');
		$row=mysqli_fetch_array(mysqli_query($connect,"select * from semester where start_date<'$date' and end_date>'$date'"));
		$sem=$row[4];
	if($year =='TYDC' && $sem=='odd')
	{
		$sem1=5;
	}
	else if($year =='TYDC' && $sem=='even')
	{
		$sem1=6;
	}
	else if($year =='SYDC' && $sem=='odd')
	{
		$sem1=3;
	}
	else if($year =='SYDC' && $sem=='even')
	{
		$sem1=4;
	}
	else if($year =='FYDC' && $sem=='odd')
	{
		$sem1=1;
	}
	else if($year =='FYDC' && $sem=='even')
	{
		$sem1=2;
	}
	$row=mysqli_fetch_array(mysqli_query($connect,"select * from staff where staff_id='$staff_id'"));
		$shift=$row[4];
		$branch=$row[5];
	$query = "select * from subject where sub_sem='$sem1'and sub_branch='$branch' and shift='$shift' order by shift,sub_branch";  
	$result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }
 }
 ?>