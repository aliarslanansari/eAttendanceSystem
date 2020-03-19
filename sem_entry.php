<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "attendance");  
 $data = json_decode(file_get_contents("php://input")); 
 $flag=mysqli_real_escape_string($connect, $data->flag); 
 date_default_timezone_set('Asia/Kolkata');
 if($flag==0)  
 {
	$startdate=mysqli_real_escape_string($connect, $data->startdate);
	$startdate=date("Y-m-d", strtotime($startdate));
	$enddate=mysqli_real_escape_string($connect, $data->enddate);
	$enddate=date("Y-m-d", strtotime($enddate));
	  $year = mysqli_real_escape_string($connect, $data->year);
	  $term = mysqli_real_escape_string($connect, $data->term);
	  $r=mysqli_fetch_array(mysqli_query($connect,"select max(id) from semester"));
		$id=$r[0]+1;
      $query = "INSERT INTO semester(id,year,start_date,end_date,term) VALUES ('$id','$year','$startdate' ,'$enddate' ,'$term')";
	if(mysqli_num_rows(mysqli_query($connect, "select * from semester where term='$term' and year='$year'")) > 0 )
	  {
		  echo "This Semester is Already Inserted";
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
 if($flag==3)
 {
	   $year = mysqli_real_escape_string($connect, $data->year);
	  $term = mysqli_real_escape_string($connect, $data->term);
	   $query = "select * from semester where year='$year' and term='$term'";
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
	$startdate=mysqli_real_escape_string($connect, $data->startdate);
	$startdate=date("Y-m-d", strtotime($startdate));
	$enddate=mysqli_real_escape_string($connect, $data->enddate);
	$enddate=date("Y-m-d", strtotime($enddate));
	  $year = mysqli_real_escape_string($connect, $data->year);
	  $term = mysqli_real_escape_string($connect, $data->term);
	  
	  $query = "update semester set start_date='$startdate',end_date='$enddate' where term='$term' and year='$year'";
	 if(mysqli_query($connect,$query))  
		{  
           echo "Semester Updated...";  
		}  
      else  
      {  
           echo 'Error:Not Updated';
      }
 }
 if($flag==1)
 {
	  $query = "select * from semester";
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