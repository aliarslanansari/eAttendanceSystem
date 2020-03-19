<?php  
 //select.php  
error_reporting(E_ALL ^ E_NOTICE); 
 $connect = mysqli_connect("localhost", "root", "", "attendance");  
 $output = array();  
 $output1 = array();  
 $data = json_decode(file_get_contents("php://input"));
 $flag =mysqli_real_escape_string($connect, $data->flag);
 if($flag==1)
 {
 //$year =mysqli_real_escape_string($connect, $data->year); 
 $shift =mysqli_real_escape_string($connect, $data->shift); 
 $branch =mysqli_real_escape_string($connect, $data->branch); 
 
 $query = "select * from staff where branch='$branch' and shift='$shift' order by staff_id";  
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