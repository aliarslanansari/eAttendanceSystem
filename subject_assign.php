<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "attendance");  
 $data = json_decode(file_get_contents("php://input")); 
 $flag=mysqli_real_escape_string($connect, $data->flag); 
 
 if($flag==0)  
 {
	$staff_id=mysqli_real_escape_string($connect, $data->staff_id);
      $sub_code = mysqli_real_escape_string($connect, $data->sub_code);
	  $shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
      $query = "update subject set staff_id='$staff_id' where sub_branch='$branch' and shift='$shift' and sub_code='$sub_code'";
	if( mysqli_num_rows(mysqli_query($connect, "select * from subject where sub_code='$sub_code' and sub_branch='$branch' and shift='$shift' and staff_id > 0")) > 0 )
	  {
		  echo '1';
	  }
	  else if(mysqli_query($connect,$query))  
		{  
				echo "Subject Assigned";  
		}  
			else  
		{  
				echo 'Error!';
		}
	  
 }
  if($flag==2)  
 {
	$staff_id=mysqli_real_escape_string($connect, $data->staff_id);
      $sub_code = mysqli_real_escape_string($connect, $data->sub_code);
	  $shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
      $query = "update subject set staff_id='$staff_id' where sub_branch='$branch' and shift='$shift' and sub_code='$sub_code'";
	if(mysqli_query($connect,$query))  
		{  
				echo "Subject Details Updated";  
		}  
			else  
		{  
				echo 'Error!';
		}
	  
 }
 $flag=mysqli_real_escape_string($connect, $data->flag);
 if($flag==1)
 {
	 $shift = mysqli_real_escape_string($connect, $data->shift1);
	  $branch = mysqli_real_escape_string($connect, $data->branch1);
	   $query = "select * from staff where branch='$branch' and shift='$shift' and NOT(type='CLERK') order by staff_id asc";
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
 $flag=mysqli_real_escape_string($connect, $data->flag);
 if($flag==3)
 {
	 $shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
	  $sub_sem = mysqli_real_escape_string($connect, $data->sub_sem);
	  $sub_scheme = mysqli_real_escape_string($connect, $data->sub_scheme);
	   $query = "select * from subject where sub_branch='$branch' and shift='$shift' and sub_sem='$sub_sem' and sub_scheme='$sub_scheme' order by sub_code asc";
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