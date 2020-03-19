<?php  
 //select.php  
 
 $connect = mysqli_connect("localhost", "root", "", "attendance");  
 $output = array();  
 $data = json_decode(file_get_contents("php://input"));
$shift = mysqli_real_escape_string($connect, $data->shift);
	  $branch = mysqli_real_escape_string($connect, $data->branch);
	  $year = mysqli_real_escape_string($connect, $data->year); 
 $query = "select * from student where branch='$branch' and year='$year' and shift='$shift' order by roll asc";  
 $result = mysqli_query($connect, $query);  
 
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  

 ?>