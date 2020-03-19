<?php 
		error_reporting(E_ALL ^ E_NOTICE); 
		//report.php  
 
		$connect = mysqli_connect("localhost", "root", "", "attendance");  
		$output = array();  
		$output1 = array();
		$c = array();
		$data = json_decode(file_get_contents("php://input"));
		$sub_det = mysqli_real_escape_string($connect, $data->sub_code); 
		//$branch=mysqli_real_escape_string($connect, $data->branch); 
		$sub_code=substr($sub_det,0,5);
		$sub_sem=substr($sub_det,6,1);
		$branch=substr($sub_det,8,2);
		$shift=substr($sub_det,11,strlen($sub_det));
		 if($sub_sem==1 or $sub_sem==2)
		 {
			 $year="FYDC";
		 }
		 else if($sub_sem==3 or $sub_sem==4)
		 {
			 $year="SYDC";
		 }
		 else if($sub_sem==5 or $sub_sem==6)
		 {
			 $year="TYDC";
		 }
		 //echo $branch." ".$shift." ".$sub_code." ".$year;
 $query = "select * from student where branch='$branch' and year='$year' and shift='$shift' order by roll asc";  
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)  
 {
      while($row = mysqli_fetch_array($result))  
      {
           $output[] = $row;  
      }
      //echo json_encode($output);
	  
 $query1 = "select attendance from attendance where branch='$branch' and year='$year' and sub_code='$sub_code'  and shift='$shift' and head='TH' order by ID";  
 $result1 = mysqli_query($connect, $query1);
 if(mysqli_num_rows($result1) > 0)  
 {
      while($row1 = mysqli_fetch_array($result1))  
      {
           $output1[] = $row1;  
      }
 }
 $query2 = "select attendance from attendance where branch='$branch' and year='$year' and sub_code='$sub_code' and shift='$shift' and head='PR' order by ID";  
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
	  			  for($i=0;$i<count($output);$i++)
			{	
			$c[$i]=0;
			$cp[$i]=0;
			for($j=0;$j<count($output1);$j++)
			{
				if(substr($output1[$j][0],$i,1)=='P')
				{
						$c[$i]++;
				}
			}
			for($j=0;$j<count($output2);$j++)
			{
				if(substr($output2[$j][0],$i,1)=='P')
				{
						$cp[$i]++;
				}
			}
			$cc[$i]['attendance'] = $c[$i];
			$cc[$i]['roll'] = $output[$i]['roll'];
			$cc[$i]['fname'] = $output[$i]['fname'];
			$cc[$i]['mname'] = $output[$i]['mname'];
			$cc[$i]['lname'] = $output[$i]['lname'];
			$cc[$i]['attendancep'] = $cp[$i];
			$cc[$i]['total'] = count($output1);
			$cc[$i]['totalp'] = count($output2);
			if((count($output1)+count($output2))>0){
			$cc[$i]['per'] = number_format((float)($c[$i]+$cp[$i])/(count($output1)+count($output2))*100, 2, '.', '');
			}else {
				$cc[$i]['per'] =0;
			}
		}
		echo json_encode($cc);
 }
 else{
	 echo "2";
 }
?>