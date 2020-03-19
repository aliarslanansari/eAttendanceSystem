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
 $staff_id = mysqli_real_escape_string($connect, $data->staff_id);
 $year =mysqli_real_escape_string($connect, $data->year); 
 $row=mysqli_fetch_array(mysqli_query($connect,"select * from staff where staff_id='$staff_id'"));
		$shift=$row[4];
		$branch=$row[5];
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
 }
 
if($flag==2)
{
$staff_id =mysqli_real_escape_string($connect, $data->staff_id);
 $year1=array();
 $query1 = "select distinct(sub_sem) from subject where staff_id='$staff_id' order by sub_sem asc";  
 $result1 = mysqli_query($connect, $query1);  
 if(mysqli_num_rows($result1) > 0)  
 {  
      while($row1 = mysqli_fetch_array($result1))  
      {  
           $output1[] = $row1;  
      }  
	  //echo json_encode($output1);
      for($i=0;$i<count($output1);$i++){
		  if($output1[$i][0]==1 or $output1[$i][0]==2)
		  {
			$year1[$i]['year']='FYDC';
		  }
		  if($output1[$i][0]==3 or $output1[$i][0]==4)
		  {
			$year1[$i]['year']='SYDC';
		  }
		  if($output1[$i][0]==5 or $output1[$i][0]==6)
		  {
			$year1[$i]['year']='TYDC';
		  }
	  }		  
 }
echo json_encode($year1);
}
if($flag==3)
{
$staff_id =mysqli_real_escape_string($connect, $data->staff_id);
 $year1=array();
 $query1 = "select distinct(shift) from subject where staff_id='$staff_id' order by shift asc";  
 $result1 = mysqli_query($connect, $query1);  
 if(mysqli_num_rows($result1) > 0)  
 {  
      while($row1 = mysqli_fetch_array($result1))  
      {  
           $output1[] = $row1;  
      }  
	  /*echo json_encode($output1);
      for($i=0;$i<count($output1);$i++){
		  
			$shift[$i]['shift']=$output1[$i][0];
		    
	  }*/		  
 }
echo json_encode($output1);
}
 ?>