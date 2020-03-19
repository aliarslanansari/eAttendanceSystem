<?php 
error_reporting(E_ALL ^ E_NOTICE); 
 //report.php  
 
		$connect = mysqli_connect("localhost", "root", "", "attendance");  
		$output = array();  
		$output1 = array();
		$c = array();
		$data = json_decode(file_get_contents("php://input"));
		$flag =mysqli_real_escape_string($connect, $data->flag);
		$shift =mysqli_real_escape_string($connect, $data->shift);
		$branch =mysqli_real_escape_string($connect, $data->branch);
		$year =mysqli_real_escape_string($connect, $data->year);
 $query = "select * from student where branch='$branch' and year='$year' and shift='$shift' order by status,roll asc";  
 $result = mysqli_query($connect, $query);
 if($flag==1)
 {
	if(mysqli_num_rows($result) > 0)  
	{
      while($row = mysqli_fetch_array($result))  
      {
           $output[] = $row;  
      }
      echo json_encode($output);
	}
	else{
		echo '1';
	}
 }
 if($flag==2)
 {
 $str = $data->attendance;
 $str1 = str_replace('false', 'Y', $str);
 $str1 = str_replace('true', 'R', $str1);
 $str1 = str_replace(',', '', $str1);
  $status =mysqli_real_escape_string($connect, $data->status);
  $pyear =mysqli_real_escape_string($connect, $data->pyear);
 $shift =mysqli_real_escape_string($connect, $data->shift);
 $branch =mysqli_real_escape_string($connect, $data->branch);
 $year =mysqli_real_escape_string($connect, $data->year);
 $pyear =mysqli_real_escape_string($connect, $data->pyear);
 while($row = mysqli_fetch_array($result))
      {
           $output[] = $row;  
      }
	  
	  $r=array();
	  $rn=mysqli_fetch_array(mysqli_query($connect, "select max(roll) from student where year='$pyear' and shift='$shift' and branch='$branch' and status='reg'"));
	  $rnn=$rn[0];
 for($j=0;$j<strlen($str1);$j++)
	{
		$enrl=$output[$j][0];
		if(substr($str1,$j,1)=='R')
		{
			$rnn++;	
			$r[$j]=mysqli_query($connect," UPDATE student SET year='$pyear', roll='$rnn', status='$status' where enrl_no='$enrl'");
		}
		// echo substr($str1,$j,1);
	}
echo "Students Promoted." ;

}
?>