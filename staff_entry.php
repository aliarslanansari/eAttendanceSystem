<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "attendance");  
 $data = json_decode(file_get_contents("php://input"));  
 	$flag=mysqli_real_escape_string($connect, $data->flag);
 if(count($data) > 0 && $flag==0)  
 {
	$staff_id=mysqli_real_escape_string($connect, $data->staff_id);
	 $first_name = mysqli_real_escape_string($connect, $data->firstname);
      $middle_name = mysqli_real_escape_string($connect, $data->middlename);
	  $last_name = mysqli_real_escape_string($connect, $data->lastname);
	  $shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
	  $type = mysqli_real_escape_string($connect, $data->type);
	  $useremail = mysqli_real_escape_string($connect, $data->useremail);
	  $userpassword = mysqli_real_escape_string($connect, $data->userpassword);
      $query1 = "INSERT INTO staff(staff_id, fname, mname, lname, shift, branch,type) VALUES ('$staff_id', '$first_name', '$middle_name', '$last_name', '$shift', '$branch','$type');";
	  $query = "INSERT INTO user(staff_id,user_email,user_password, type) VALUES ($staff_id,'$useremail','$userpassword','$type');";
	  if(mysqli_num_rows(mysqli_query($connect, "select * from user where user_email='$useremail'")) > 0 )
	  {
		echo "1";
	}
	else if(mysqli_num_rows(mysqli_query($connect, "select * from staff where type='$type' and branch='$branch' and shift='$shift'")) > 0 and $type=='HOD')
	  {
		echo "2";
	  }
	  else if(mysqli_num_rows(mysqli_query($connect, "select * from staff where type='$type' and branch='$branch' and shift='$shift'")) > 0 and $type=='CLERK')
	  {
		echo "5";
	  }
	else if(mysqli_query($connect,$query) and mysqli_query($connect,$query1))  
    {  
           echo "3";  
    }  
      else  
      {  
           echo '4';
      }  
 }
 if($flag==1){
	 $r=mysqli_fetch_array(mysqli_query($connect,"select max(staff_id) from staff"));
		$id=$r[0]+1;
		if($id==1)
			echo $id+100;
		else
		echo $id;
 }
 if($flag==3)
 {
	 $staff_id = mysqli_real_escape_string($connect, $data->staff_id);
	   $query = "select * from staff where staff_id='$staff_id'";
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
	$staff_id=mysqli_real_escape_string($connect, $data->staff_id);
	 $first_name = mysqli_real_escape_string($connect, $data->firstname);
      $middle_name = mysqli_real_escape_string($connect, $data->middlename);
	  $last_name = mysqli_real_escape_string($connect, $data->lastname);
	  $shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
	  $type = mysqli_real_escape_string($connect, $data->type);
	  $useremail = mysqli_real_escape_string($connect, $data->useremail);
	  $userpassword = mysqli_real_escape_string($connect, $data->userpassword);
      $query = "update staff set fname='$first_name', mname='$middle_name', lname='$last_name', shift='$shift', branch='$branch',type='$type' where staff_id='$staff_id'";
	  $query1 = "update user set user_email='$useremail',user_password='$userpassword', type='$type' where staff_id='$staff_id'";
	  
	 if(mysqli_query($connect,$query) and mysqli_query($connect,$query1))  
    {	  
           echo "Data Updated...";  
		}  
      else  
      {  
           echo 'Error:Not Updated';
      }
 }
 
 if($flag==6)
 {
			$staff_id = mysqli_real_escape_string($connect, $data->staff_id);
			$query = "select * from user where staff_id='$staff_id'";
			$result = mysqli_query($connect, $query);  
				 if(mysqli_num_rows($result) > 0)  
				 {  
					  while($row = mysqli_fetch_array($result))  
					  {  
						   $output[] = $row;
					  }
				 }
				 echo json_encode($output);
 }
  ?>