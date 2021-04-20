<?php
$connect=mysqli_connect('localhost','root','','course');
if(mysqli_connect_errno($connect)){
	echo 'Failed to connect';

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Learn Web Development</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="./css/style.css">
  	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">



  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width-device-width,initial-scale=1">
</head>
<body>
	<div class="container-fluid" style="padding-right: 10px;">
		<nav class="navbar navbar-expand-lg navbar-default ">
	         <img class="navbar-brand navbar-head img" src="./img/cb.png">
	         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
	         </button>
    		<div class="collapse navbar-collapse navbarnav">
	    		<ul class="navbar-nav ml-auto nav-font">
		          <li class="nav-item active"><a class="nav-link" href="">Products<span class="sr-only">(current)</span></a></li>
		          <li class="nav-item"><a class="nav-link" href="">Plans</a></li>
		          <li class="nav-item"><a class="nav-link" href="">Insights</a></li>
		          <li class="nav-item"><a class="nav-link" href="">Success Stories</a></li>
		          <li class="nav-item"><a class="nav-link" href="">Blog</a></li>
		          <li class="nav-item1"><a class="nav-link" href="">LOGIN</a></li>
		          <li class="nav-item1"><button class="btn-secondary btn-secondary1">GET STARTED</button></li>
		       </ul>
     		</div>
    	</nav>
    	<nav aria-label="breadcrumb">
			<ol class="breadcrumb breadcrumbol">
			    <li class="breadcrumb-item"><a href="#">Home</a></li>
			    <li class="breadcrumb-item"><a href="#">Courses</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Web Development</li>
		  	</ol>
		</nav>
	</div>
	<div class="mainbody">
			 <div class="title-body">
				<div class="row" style="margin-right: 0px">
					<div class="col-md-7">
						<h3 class="heading">
							<?php 
								$title=mysqli_query($connect,"SELECT * FROM courses");
								while ($row = $title->fetch_assoc()) {
	    							echo $row['course_title'];
	    						}
							?>
								
							</h3>

							<div class="head_title">
									<?php 
									$sub=mysqli_query($connect,"SELECT course_subtitle FROM courses where course_id=1");
								while ($row = $sub->fetch_assoc()) 
								{
    							echo $row['course_subtitle'];
									}
							?>

								<ul class="sicons">
								<li><a  class="fa fa-thumbs-up fas-style"></a><span class="number"><?php 
									$num=mysqli_query($connect,"SELECT course_like FROM courses where course_id=1");
								while ($row = $num->fetch_assoc()) 
								{
    							echo $row['course_like'];
									}
							?></span></li>
								<li><a class="fa fa-bookmark fas-style"></a><span class="number">5,905</span></li>
								<li><a class="fa fa-share fas-style"></a></li>
								<li><a class="fa fa-ellipsis-h fas-style"></a></li>
							</ul>
						</div>
						<div class="video-tag">
							<video controls>
  								<source src=" <?php 
							$title=mysqli_query($connect,"SELECT course_video_link FROM courses where course_id=1");
								while ($row = $title->fetch_assoc()) 
								{
    							echo $row['course_video_link'];
									}
							?>">
  								
  							</video>
  						<div class="title-body1">
							<p>
								<?php 
									$desc=mysqli_query($connect,"SELECT course_description FROM courses where course_id=1");
								while ($row = $desc->fetch_assoc()) 
								{
    							echo $row['course_description'];
									}
							?>
							</p>
						</div>
						</div>
						<ul class="list">
							<li>
								<span class="score">
									<div class="score-wrap">
		        						<span class="stars-active" style="width:<?php 
									$res=mysqli_query($connect,"SELECT course_rating FROM courses where course_id=1");
								while ($row = $res->fetch_assoc()) 
								{
    							echo $row['course_rating']*20;
									}
							?>%">
					            			<i class="fa fa-star" aria-hidden="true"></i>
					            			<i class="fa fa-star" aria-hidden="true"></i>
					            			<i class="fa fa-star" aria-hidden="true"></i>
					            			<i class="fa fa-star" aria-hidden="true"></i>
					            			<i class="fa fa-star" aria-hidden="true"></i>
				        				</span>

				        				<span class="stars-inactive">
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>
				        			</div>
				        		</span>
				        	</li>
				        	<li class="line">|</li>
							<li class="fa fa-play-circle faa-list" aria-hidden="true"><span class="litext">Lectures:</span><span style="font-weight:900; padding-right: 2px;"> <?php 
									$lect=mysqli_query($connect,"SELECT course_lecture FROM courses where course_id=1");
								while ($row = $lect->fetch_assoc()) 
								{
    							echo $row['course_lecture'];
									}
							?> </span></li>
							<li class="line">|</li>
							<li class="fa fa-clock-o faa-list" aria-hidden="true"><span class="litext">Videos</span><span style="font-weight:900; padding-right: 2px;"> <?php 
									$hrs=mysqli_query($connect,"SELECT course_video FROM courses where course_id=1");
								while ($row = $hrs->fetch_assoc()) 
								{
    							echo $row['course_video'];
									}
							?> hours</span></li>
							<li class="line">|</li>
							<li  class="fa fa-barcode faa-list" aria-hidden="true"><span class="litext">Levels:</span><span style="font-weight:bold; padding-right: 2px;"> <?php 
									$lvl=mysqli_query($connect,"SELECT course_level FROM courses where course_id=1");
								while ($row = $lvl->fetch_assoc()) 
								{
    							echo $row['course_level'];
									}
							?></span></li>
							<li class="line">|</li>
							<li  class="fa fa-language faa-list" aria-hidden="true"><span class="litext">Language:</span><span style="font-family: 'source sans pro'; font-weight: bolder; padding-right: 2px;"> 

								<?php 
									$lang=mysqli_query($connect,"SELECT course_lang FROM courses where course_id=1");
								while ($row = $lang->fetch_assoc()) 
								{
    							echo $row['course_lang'];
									}
							?></span></li>
						</ul>
						<div class="navigation">
							<!-- <ul class="nav">
								<li><button class="btn btn-secondary nav-btn-secondary">Overview</button></li>
								<li><button class="btn btn-secondary nav-btn-secondary2">Contents</button></li>
								<li><button class="btn btn-secondary nav-btn-secondary">Notes</button></li>
							</ul> -->



							<nav>
  <div class="nav nav-tabs " id="nav-tab" role="tablist">
    <a class="nav-item nav-link active nav-btn-secondary" id="nav-overview-tab" data-toggle="tab" href="#nav-overview" role="tab" aria-controls="nav-nav-overview" aria-selected="true">Overview</a>
    <a class="nav-item nav-link nav-btn-secondary" id="nav-content-tab" data-toggle="tab" href="#nav-content" role="tab" aria-controls="nav-content" aria-selected="false">Contents</a>
    <a class="nav-item nav-link nav-btn-secondary" id="nav-notes-tab" data-toggle="tab" href="#nav-notes" role="tab" aria-controls="nav-notes" aria-selected="false">Notes</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab"><p class="title-body1"><?php 
									$desc=mysqli_query($connect,"SELECT course_description FROM courses where course_id=1");
								while ($row = $desc->fetch_assoc()) 
								{
    							echo $row['course_description'];
									}
							?></p></div>
  <div class="tab-pane fade" id="nav-content" role="tabpanel" aria-labelledby="nav-content-tab"><div class="row tablecontent">
							<div class="container">

							<h3>Table Of Content</h3>
						</div>
					</div>
						<div class="accordion_container">
	



	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title panel-h4">
										<a class="collapsehead" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<?php 
											$query_result=mysqli_query($connect,"SELECT * FROM course_section where course_id=1");
											foreach ($query_result as $key => $row) 
											{
												$section_head=$row['section_head'];
											}

											echo "$section_head";
											
											?>
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;">
									<?php 
										
										$query_result1=mysqli_query($connect, "SELECT *  From section_title s where s.section_id=$section_id");

									?>
								
							</span></div>
								<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;">
										<?php 
										$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=2");
										while ($row = $tit->fetch_assoc()) 
										{
    										echo $row['title_name'];
										}
										?>
								
							</span>
						</div>
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=3");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=4");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed collapsehead" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<?php 
									$sec=mysqli_query($connect,"SELECT section_head FROM course_section where section_id=2");
								while ($row = $sec->fetch_assoc()) 
								{
    							echo $row['section_head'];
									}
							?>
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=5");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=6");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=7");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=8");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed collapsehead" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><?php 
									$sec=mysqli_query($connect,"SELECT section_head FROM course_section where section_id=3");
								while ($row = $sec->fetch_assoc()) 
								{
    							echo $row['section_head'];
									}
							?>
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=9");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=10");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=11");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=12");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
								</div>
								<div class="panel-heading" role="tab" id="headingFour">
									<h4 class="panel-title">
										<a class="collapsed collapsehead" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><?php 
									$sec=mysqli_query($connect,"SELECT section_head FROM course_section where section_id=4");
								while ($row = $sec->fetch_assoc()) 
								{
    							echo $row['section_head'];
									}
							?>
										</a>
									</h4>
								</div>

								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=13");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=14");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=15");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
									<div class="panel-body pbody"><span class="fa fa-play-circle faa-list "></span><span style="padding-left: 10px;"><?php 
									$tit=mysqli_query($connect,"SELECT title_name from section_title where title_id=16");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['title_name'];
									}
							?></span></div>
								</div>
							</div>
						</div>
					</div></div>
  <div class="tab-pane fade" id="nav-notes" role="tabpanel" aria-labelledby="nav-notes-tab"></div>
</div>
						</div>


						
					</div>

					<div class="col-md-5">
						<div class="container-fluid">
							<div class="row main-right">
								<div class="col-md-7">
									<h5>Lorem ipsum, or lipsum as it is sometimes known, is dummy text</h5>
								</div>
								<div class="col-md-5">
									<button class="btn btn-secondary btn-secondary3">
										Take It For Free.
									</button>
								</div>
							</div>
						</div>

						<div class="row main-body-right">
							<div class="container">
								<div class="heading-left">
									<h6>Popular Courses</h6>
								</div>
								<br>
								<div class="row rowmain4">
									<div class="col-md-4 col4row">
										<div class="video1">  
										<!-- <img> -->
    										<a href="#"></a>
										</div>
									</div>
									  
								<div class="col-md-8 row-8">
									<div class="container"  style="padding-left: 0px; padding-right: 0px; background-color: #f2f2f2;border-radius: 4px;">
										<ul class="right-panel">
											<li><p style="margin-bottom: 0px;"><?php 
									$tit=mysqli_query($connect,"SELECT course_title FROM courses WHERE course_like  IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_title'];
									}?>
												</p></li>
												<ul class="inside-panel">
													<li>
														<span class="score">
															<div class="score-wrap">
				        										<span class="stars-active" style="width:<?php 
									$res=mysqli_query($connect,"SELECT course_rating FROM courses where course_id=2");
								while ($row = $res->fetch_assoc()) 
								{
    							echo $row['course_rating']*20;
									}
							?>%">
								            					<i class="fa fa-star" aria-hidden="true"></i>
								            					<i class="fa fa-star" aria-hidden="true"></i>
								            					<i class="fa fa-star" aria-hidden="true"></i>
								            					<i class="fa fa-star" aria-hidden="true"></i>
								            					<i class="fa fa-star" aria-hidden="true"></i>
						        								</span>
						        							</div>
					        							</span>
					        						</li>
					        						<li>
					        							<i class="fa fa-clock-o clock" aria-hidden="true"><span class="hours"><?php 
									$tit=mysqli_query($connect,"SELECT course_video FROM courses WHERE course_like  IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_video'];
									}?> Hours</span></i>
					        						</li>
					        					</ul>
					        					<li>
					        						<p class="para"><?php 
									$tit=mysqli_query($connect,"SELECT course_subtitle FROM courses WHERE course_like  IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_subtitle'];
									}?></p>
					        					</li>
					        			</ul>
					        		</div>
					        	</div>
					        	</div>

								<br>
								<div class="row  rowmain4">
									<div class="col-md-4 col4row">
										<div class="video1">  
										<!-- <img> -->
    										<a href="#"></a>
										</div>
									</div>
									  
								<div class="col-md-8 row-8">
									<div class="container"  style="padding-left: 0px; padding-right: 0px; background-color: #f2f2f2;border-radius: 4px;">
										<ul class="right-panel">
											<li><p style="margin-bottom: 0px;"><?php 
									$tit=mysqli_query($connect,"SELECT course_title FROM courses WHERE course_like  NOT IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_title'];
									}?></p></li>
												<ul class="inside-panel">
													<li>
														<span class="score">
														<div class="score-wrap">
			        										<span class="stars-active" style="width:<?php 
									$result=mysqli_query($connect,"SELECT course_rating FROM courses where course_id=1");
								while ($row = $result->fetch_assoc()) 
								{

    							echo $row['course_rating']*20;
									}
							?>%">
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
					        								</span>
					        								<span class="stars-inactive">
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>
					        							</div>
				        							</span>
					        						</li>
					        						<li>
					        							<i class="fa fa-clock-o clock" aria-hidden="true"><span class="hours"><?php 
									$tit=mysqli_query($connect,"SELECT course_video FROM courses WHERE course_like  NOT IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_video'];
									}?> Hours</span></i>
					        						</li>
					        					</ul>
					        					<li>
					        						<p class="para"><?php 
									$tit=mysqli_query($connect,"SELECT course_subtitle FROM courses WHERE course_like NOT IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_subtitle'];
									}?></p>
					        					</li>
										</ul>
									</div>
								</div>

							


								</div>

								<br>

								<div class="row rowmain4">
									<div class="col-md-4 col4row">
										<div class="video1">  
										<!-- <img> -->
    										<a href="#"></a>
										</div>
									</div>
									  
								<div class="col-md-8 row-8">
									<div class="container"  style="padding-left: 0px; padding-right: 0px; background-color: #f2f2f2;border-radius: 4px;">
									<ul class="right-panel">
										<li><p style="margin-bottom: 0px;">FRONT END</p></li>
											<ul class="inside-panel">
												<li>
													<span class="score">
														<div class="score-wrap">
			        										<span class="stars-active" style="width:70%">
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
					        								</span>
					        								<span class="stars-inactive">
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>
					        							</div>
				        							</span>
				        						</li>
				        						<li>
				        							<i class="fa fa-clock-o clock" aria-hidden="true"><span class="hours">2.5 Hours</span></i>
				        						</li>
				        					</ul>
				        					<li>
				        						<p class="para">Lorem ipsum, or lipsum as it is sometimes known, is dummy text</p>
				        					</li>
									</ul>

								</div>
							</div>

							


								</div>

								<br>
								

								<div class="heading-left">
									<h6>Recent Viewed Courses</h6>
								</div>
								<br>
								<div class="row rowmain4">
									<div class="col-md-4 col4row">
										<div class="video1">  
										<!-- <img> -->
    										<a href="#"></a>
										</div>
									</div>
								<div class="col-md-8 row-8">
									<div class="container"  style="padding-left: 0px; padding-right: 0px; background-color: #f2f2f2;border-radius: 4px;">
									<ul class="right-panel">
										<li><p style="margin-bottom: 0px;"><?php 
									$tit=mysqli_query($connect,"SELECT course_title FROM courses WHERE course_like  NOT IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_title'];
									}?></</p></li>
											<ul class="inside-panel">
												<li>
													<span class="score">
														<div class="score-wrap">
			        										<span class="stars-active" style="width:<?php 
									$res=mysqli_query($connect,"SELECT course_rating FROM courses where course_id=1");
								while ($row = $res->fetch_assoc()) 
								{
    							echo $row['course_rating']*20;
									}
							?>%">
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
					        								</span>
					        								<span class="stars-inactive">
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>
					        							</div>
				        							</span>
				        						</li>
				        						<li>
				        							<i class="fa fa-clock-o clock" aria-hidden="true"><span class="hours"><?php 
									$tit=mysqli_query($connect,"SELECT course_video FROM courses WHERE course_like  NOT IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_video'];
									}?> Hours</span></i>
				        						</li>
				        					</ul>
				        					<li>
				        						<p class="para"><?php 
									$tit=mysqli_query($connect,"SELECT course_subtitle FROM courses WHERE course_like NOT IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_subtitle'];
									}?></p>
				        					</li>
									</ul>

								</div>
							</div>

							


								</div>

								<br>
								<div class="row rowmain4">
									<div class="col-md-4 col4row">
										<div class="video1">  
										<!-- <img> -->
    										<a href="#"></a>
										</div>
									</div>
									  
								<div class="col-md-8 row-8">
									<div class="container"  style="padding-left: 0px; padding-right: 0px; background-color: #f2f2f2;border-radius: 4px;">
									<ul class="right-panel">
										<li><p style="margin-bottom: 0px;"><?php 
									$tit=mysqli_query($connect,"SELECT course_title FROM courses WHERE course_like   IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_title'];
									}?></p></li>
											<ul class="inside-panel">
												<li>
													<span class="score">
														<div class="score-wrap">
			        										<span class="stars-active" style="width:<?php 
									$res=mysqli_query($connect,"SELECT course_rating FROM courses where course_id=2");
								while ($row = $res->fetch_assoc()) 
								{
    							echo $row['course_rating']*20;
									}
							?>%">
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
					        								</span>
					        								<span class="stars-inactive">
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>
					        							</div>
				        							</span>
				        						</li>
				        						<li>
				        							<i class="fa fa-clock-o clock" aria-hidden="true"><span class="hours"><?php 
									$tit=mysqli_query($connect,"SELECT course_video FROM courses WHERE course_like   IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_video'];
									}?> Hours</span></i>
				        						</li>
				        					</ul>
				        					<li>
				        						<p class="para"><?php 
									$tit=mysqli_query($connect,"SELECT course_subtitle FROM courses WHERE course_like  IN (SELECT max(course_like) FROM courses)");
								while ($row = $tit->fetch_assoc()) 
								{
    							echo $row['course_subtitle'];
									}?></p>
				        					</li>
									</ul>

								</div>
							</div>

							


								</div>

								<br>

								<div class="row rowmain4">
									<div class="col-md-4 col4row">
										<div class="video1">  
										<!-- <img> -->
    										<a href="#"></a>
										</div>
									</div>
									  
								<div class="col-md-8 row-8">
									<div class="container"  style="padding-left: 0px; padding-right: 0px; background-color: #f2f2f2;border-radius: 4px;">
									<ul class="right-panel">
										<li><p style="margin-bottom: 0px;">FRONT END</p></li>
											<ul class="inside-panel">
												<li>
													<span class="score">
														<div class="score-wrap">
			        										<span class="stars-active" style="width:30%">
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
							            					<i class="fa fa-star" aria-hidden="true"></i>
					        								</span>
					        								<span class="stars-inactive">
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>
					        							</div>
				        							</span>
				        						</li>
				        						<li>
				        							<i class="fa fa-clock-o clock" aria-hidden="true"><span class="hours">2.5 Hours</span></i>
				        						</li>
				        					</ul>
				        					<li><P class="para">Lorem ipsum, or lipsum as it is sometimes known, is dummy text</p>
				        					</li>
									</ul>


								</div>
							</div>

							


								</div>

<br>
<br>								
							
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>


		
		



	<div class="container">
		<div class="row">
			<ul class="footerlist">
				<li>
					<p class="footerstyle1">&copy; Reserved @Codeblu.com 2021</p>
				</li>
				<li><a href="#" class="footerstyle">About Codeblu</a></li>
				<li><a href="" class="footerstyle">Eduonix.com</a></li>
				<li><a href="" class="footerstyle">Cookie Policy</a></li>
				<li><a href="" class="footerstyle">Terms and Policies</a></li>
				<li><a href="" class="footerstyle">Plans</a></li>
				<li><a href="" class="footerstyle">Support</a></li>

			</ul>
		</div>
	</div>




 <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
</body>
</html>