<?php
$mysqli = new mysqli("localhost", "root", "", "course");

// check connection
if ($mysqli->connect_errno) {
    die("Connect failed: ".$mysqli->connect_error);
}

							 $query="SELECT * FROM course_section";
						  	$result = $mysqli->query($query);

						  	// $query2="SELECT * from section_title s left join  course_section c on c.section_id
						  	// =s.section_id";

						  	// $result2=$mysqli->query($query2);
						  	// // print_r($result2);

						  	// foreach($result2 as $key2=>$row2)
						  	// {
						  	// 	$title_names=$row2['title_name'];
						  	// 	echo "<div>$title_names</div>";
						  	// }



						  	foreach ($result as $key => $row) 
						  	{

						  		// print_r($row);
						  		// echo"<br>";
						  		// echo"<br>";
						  		$section_head = $row['section_head'];
						  		$section_id = $row['section_id'];



						  		//echo "<div>$section_id</div>";
						  		 echo "<div>$section_head</div><br>";

						  		$query1="SELECT *  From section_title s where s.section_id=$section_id";

						  		
						 	$result1=$mysqli->query($query1);
						 	
						 		// $res= $result1->fetch_array();
						 


						 	foreach($result1 as $key1=>$row1){
   									$title_name = $row1['title_name'];

   									// print_r($title_name);

   									 //print_r($row1);
   									 //echo"<br>";

   									 echo "<div>$title_name</div>";
   								}
   								 echo "<br>";
   							}



   									// $reult=$mysqli->query($query1);
   									//  print_r($result1)
						 			//foreach ($result as $key => $row) {

						 		 	// print_r($row);
    						// 		$section_head = $row['section_head'];
   							// 		echo "<div>$section_head</div>";

   									
   									// foreach($result1 as $key=>$row){
   									// 			$section_title = $row['section_title'];
   									// 			echo "<div>$section_title</div>";

   									// }

  //}
   									
    								// echo "<div>$course_title</div>";


   							$query="SELECT * FROM course_section";
						  	$result = $mysqli->query($query);

						  	foreach ($result as $key => $row) 
											{
												$section_head=$row['section_head'];
											}

											echo "$section_head";

						  	// $query2="SELECT * from section_title s left join  course_section c on c.section_id
						  	// =s.section_id";

						  	// $result2=$mysqli->query($query2);
						  	// // print_r($result2);

						  	// foreach($result2 as $key2=>$row2)
						  	// {
						  	// 	$title_names=$row2['title_name'];
						  	// 	echo "<div>$title_names</div>";
						  	// }



// 						  	foreach ($result as $key => $row) 

// 						  	{

// 						  		// print_r($row);
// 						  		// echo"<br>";
// 						  		// echo"<br>";
// 						  		$section_head = $row['section_head'];
// 						  		$section_id = $row['section_id'];

// 						  		if($section_id)
// 						  		{
// 						  		echo "<div>$section_head</div>";
// 						  		}
						  		
// }

   								
?>