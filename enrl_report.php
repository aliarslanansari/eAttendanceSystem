<?php 
		error_reporting(E_ALL ^ E_NOTICE); 
		//report.php  
 
		$connect = mysqli_connect("localhost", "root", "", "attendance");  
		$output = array();  
		$output1 = array();
		$c = array();
		$data = json_decode(file_get_contents("php://input"));
		$enrl_no =mysqli_real_escape_string($connect, $data->enrl_no);
		date_default_timezone_set('Asia/Kolkata');
		$date = date('Y-m-d');
		$row=mysqli_fetch_array(mysqli_query($connect,"select * from semester where start_date<'$date' and end_date>'$date'"));
		$start_date=$row[2];
		$end_date=$date;		
		$query = "select * from student where enrl_no='$enrl_no'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)  
 {
      while($row = mysqli_fetch_array($result))  
      {
           $output[] = $row;  
      }
      //echo json_encode($output[0]);
 
 $branch=$output[0][5];
 $shift=$output[0][4];
 $year=$output[0][6];
 $roll=$output[0][8];
 
 $query1 = "select attendance from attendance where branch='$branch' and year='$year' and shift='$shift' and head='TH' and date<='$end_date' and date>='$start_date' order by ID";  
 $result1 = mysqli_query($connect, $query1);
 if(mysqli_num_rows($result1) > 0)  
 {
      while($row1 = mysqli_fetch_array($result1))  
      {
           $output1[] = $row1;  
      }
 }
 $query2 = "select attendance from attendance where branch='$branch' and year='$year' and shift='$shift' and head='PR' and date<='$end_date' and date>='$start_date' order by ID";  
		 $result2 = mysqli_query($connect, $query2);
		 if(mysqli_num_rows($result2) > 0)  
		 {
			  while($row2 = mysqli_fetch_array($result2))  
			  {
				   $output2[] = $row2;  
			  }
					  //echo json_encode($output1);
		 }
      //echo json_encode($output1);
	  		$i=$roll-1;	 
			$c[0]=0;
			$cp[0]=0;
			for($j=0;$j<count($output1);$j++)
			{
				if(substr($output1[$j][0],$i,1)=='P')
				{
						$c[0]++;
				}
			}
			for($j=0;$j<count($output2);$j++)
			{
				if(substr($output2[$j][0],$i,1)=='P')
				{
						$cp[0]++;
				}
			}
			$cc[0]['attendance'] = $c[0];
			$cc[0]['roll'] = $output[0]['roll'];
			$cc[0]['branch'] = $output[0]['branch'];
			$cc[0]['year'] = $output[0]['year'];
			$cc[0]['shift'] = $output[0]['shift'];
			$cc[0]['start'] =date("d-m-Y", strtotime($start_date));
			$cc[0]['end'] =date("d-m-Y", strtotime($end_date));
			$cc[0]['fname'] = $output[0]['fname'];
			$cc[0]['mname'] = $output[0]['mname'];
			$cc[0]['lname'] = $output[0]['lname'];
			$cc[0]['attendancep'] = $cp[0];
			$cc[0]['total'] = count($output1);
			$cc[0]['totalp'] = count($output2);
			if((count($output1)+count($output2))>0){
			$cc[0]['per'] = number_format((float)($c[0]+$cp[0])/(count($output1)+count($output2))*100, 2, '.', '');
			}else {
				$cc[0]['per'] =0;
			}
		
		echo json_encode($cc);
 }
 else{
	 echo "2";
 }
?>