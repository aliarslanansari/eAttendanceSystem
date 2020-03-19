<?php  
 //select.php  
error_reporting(E_ALL ^ E_NOTICE); 
 $connect = mysqli_connect("localhost", "root", "", "attendance");  
 $output = array();
 $data = json_decode(file_get_contents("php://input"));
 $staff_id = mysqli_real_escape_string($connect, $data->staff_id);
 $query = "select * from subject where staff_id='$staff_id' order by sub_sem asc";  
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
 