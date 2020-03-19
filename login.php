<?php
 $connect = mysqli_connect("localhost", "root", "", "attendance");  
 $data = json_decode(file_get_contents("php://input"));  

 if(count($data) > 0)  
 {  
      $user_email = mysqli_real_escape_string($connect, $data->user_email);       
      $user_password = mysqli_real_escape_string($connect, $data->user_password);  
	  
      $query = "SELECT * from user WHERE user_email='$user_email' and user_password='$user_password'";
      $row=mysqli_fetch_array(mysqli_query($connect, $query));
	  $query1 = "SELECT * from staff WHERE staff_id='$row[0]'";
      $row1=mysqli_fetch_array(mysqli_query($connect, $query1));
	  
	  if ($row[3] == 'STAFF' ){
		  $r['flag']=1;
		  $r['staff_id']=$row[0];
    echo json_encode($r);
} else if ($row[3] == 'HOD' ){
    $r['flag']=2;
		  $r['staff_id']=$row[0];
	echo json_encode($r);
}
else if ($row[3] == 'ADMIN' ){
    $r['flag']=3;
		  $r['staff_id']=$row[0];
	echo json_encode($r);
}
else if ($row[3] == 'CLERK' ){
    $r['flag']=4;
		  $r['staff_id']=$row[0];
	echo json_encode($r);
}
else{
	echo "Wrong";
}
 }  
 ?>
