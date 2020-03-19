<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "attendance");  
 $data = json_decode(file_get_contents("php://input")); 
 $flag=mysqli_real_escape_string($connect, $data->flag); 
 if(count($data) > 0 && $flag==0)  
 {
	//$staff_id=mysqli_real_escape_string($connect, $data->staff_id);
	 $sub_name = mysqli_real_escape_string($connect, $data->sub_name);
      $sub_code = mysqli_real_escape_string($connect, $data->sub_code);
	  $sub_abr = mysqli_real_escape_string($connect, $data->sub_abr);
	  $shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
	  $scheme = mysqli_real_escape_string($connect, $data->scheme);
	  $sem = mysqli_real_escape_string($connect, $data->sem);
	  $r=mysqli_fetch_array(mysqli_query($connect,"select max(ID) from subject"));
		$id=$r[0]+1;
      $query = "INSERT INTO subject(id,sub_name,sub_code,sub_abbr,sub_branch,sub_sem,sub_scheme,shift) VALUES ('$id','$sub_name','$sub_code' ,'$sub_abr' ,'$branch' ,'$sem' ,'$scheme' ,'$shift');";
	/*if(mysqli_num_rows(mysqli_query($connect, "select * from subject where sub_code='$sub_code' and staff_id='$staff_id' ")) > 0 )
	  {
		  echo "-:This subject is already assigned to staff id: ".$staff_id.":-";
	  }
	else*/ if(mysqli_num_rows(mysqli_query($connect, "select * from subject where sub_code='$sub_code' and shift='$shift' and sub_branch='$branch'")) > 0 )
		{
			//if($shift==59){ $sh="First"; }else{ $sh="Second"; }
		  echo "-:This Subject is already Added";
		}	  
	else if(mysqli_query($connect,$query))  
		{  
           echo "Data Inserted...";  
		}  
      else  
      {  
           echo 'Error:Not inserted';
      }  
 }
 //$flag=mysqli_real_escape_string($connect, $data->flag);
 if($flag==3)
 {
	 $sub_code = mysqli_real_escape_string($connect, $data->sub_code);
	 $shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
	   $query = "select * from subject where sub_branch='$branch' and shift='$shift' and sub_code='$sub_code'";
	  $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);
 }
 else{
	 echo "1";
 }
 }
 
 if($flag==4)
 {
		$sub_name = mysqli_real_escape_string($connect, $data->sub_name);
		$sub_code_new = mysqli_real_escape_string($connect, $data->sub_code_new);
      $sub_code = mysqli_real_escape_string($connect, $data->sub_code);
	  $sub_abr = mysqli_real_escape_string($connect, $data->sub_abr);
	  $shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
	  $scheme = mysqli_real_escape_string($connect, $data->scheme);
	  $sem = mysqli_real_escape_string($connect, $data->sem);
	  $query = "update subject set sub_scheme='$scheme',sub_name='$sub_name', sub_abbr='$sub_abr', sub_code='$sub_code_new',sub_sem='$sem' where sub_branch='$branch' and shift='$shift' and sub_code='$sub_code'";
	 if(mysqli_query($connect,$query))  
		{  
           echo "Data Updated...";  
		}  
      else  
      {  
           echo 'Error:Not inserted';
      }
 }
 if($flag==5)
 {
		
      $sub_code = mysqli_real_escape_string($connect, $data->sub_code);
	  $shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
	  $query = "delete from subject where sub_branch='$branch' and shift='$shift' and sub_code='$sub_code'";
	 if(mysqli_query($connect,$query))  
		{  
           echo "Data Deleted...";  
		}  
      else  
      {  
           echo 'Error:Not Deleted';
      }
 }
  ?>