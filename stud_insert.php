<?php  
 //Student Insert  
 $connect = mysqli_connect("localhost", "root", "", "attendance");  
 $data = json_decode(file_get_contents("php://input"));  
 $flag=mysqli_real_escape_string($connect, $data->flag); 
 if(count($data) > 0 && $flag==0)  
 {  
      $enrl_no = $data->enrlno;
	  $first_name = mysqli_real_escape_string($connect, $data->firstname);
      $middle_name = mysqli_real_escape_string($connect, $data->middlename);
	  $last_name = mysqli_real_escape_string($connect, $data->lastname);
	  $shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
	  $roll = mysqli_real_escape_string($connect, $data->roll);
	  $scheme = mysqli_real_escape_string($connect, $data->scheme);
	  $year = mysqli_real_escape_string($connect, $data->year);
	  $admit_year = mysqli_real_escape_string($connect, $data->admityear);
      $query = "INSERT INTO student(enrl_no, fname, mname, lname, shift, branch, roll, scheme, year,admit_year) VALUES ('".$enrl_no."', '$first_name', '$middle_name', '$last_name', '$shift', '$branch', '$roll', '$scheme', '$year', '$admit_year');";
	  
	  
	  if(mysqli_num_rows(mysqli_query($connect, "select * from student where enrl_no='$enrl_no'")) > 0 )
	  {
		  echo "Enrollment Number already Inserted";
	  }
	  else if(mysqli_num_rows(mysqli_query($connect, "select * from student where roll='$roll' and  year='$year' and branch='$branch' 
		and shift='$shift' and status='reg'")) > 0 )
	  {
		  echo "Roll number:".$roll." is already registered in ".$year." of ".$branch." branch (".$shift.")" ;
	  }
      else if(mysqli_query($connect,$query))  
      {  
           echo "Student Registered Successfully.";  
     }  
      else  
      {  
           echo 'Error:Not inserted';
      }  

 }
if($flag==3)
 {
	 $enrlno = mysqli_real_escape_string($connect, $data->enrlno);
	   $query = "select * from student where enrl_no='$enrlno'";
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
		$enrl_no = $data->enrlno;
	  $first_name = mysqli_real_escape_string($connect, $data->firstname);
	  $newenrlno = mysqli_real_escape_string($connect, $data->newenrlno);
      $middle_name = mysqli_real_escape_string($connect, $data->middlename);
	  $last_name = mysqli_real_escape_string($connect, $data->lastname);
	  $shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
	  $roll = mysqli_real_escape_string($connect, $data->roll);
	  $scheme = mysqli_real_escape_string($connect, $data->scheme);
	  $year = mysqli_real_escape_string($connect, $data->year);
	  $admit_year = mysqli_real_escape_string($connect, $data->admityear);
      $query = "update student set enrl_no='$newenrlno', fname='$first_name', mname='$middle_name', lname='$last_name', shift='$shift', branch='$branch', roll='$roll', scheme='$scheme', year='$year',admit_year='$admit_year' where enrl_no='$enrl_no'";
	 if(mysqli_query($connect,$query))  
		{  
           echo "Data Updated...";  
		}  
      else  
      {  
           echo 'Error:Not Updated';
      }
 }
if($flag==5)
 {
		
      $enrl_no = $data->enrlno;
	  $query = "delete from student where enrl_no='$enrl_no'";
	 if(mysqli_query($connect,$query))  
		{  
           echo "Data Deleted...";  
		}  
      else  
      {  
           echo 'Error:Not inserted';
      }
 } 
  ?>