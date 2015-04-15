<?php
session_start();
include_once "../../coursesyspw.php";
include_once "../Shared/sessions.php";
pdoConnect();
	session_start();
	include_once "../../coursesyspw.php";
	include_once "../Shared/sessions.php";
	pdoConnect();
?>
<!DOCTYPE html>
<html>

  <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LenaSYS User Editor</title>

    <title>WEBUG - Program outline</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- My Bootstrap override -->
        <link type="text/css" href="../Shared/css/style.css" rel="stylesheet">
        <link href="usermanagementview.css" rel="stylesheet">
	<link href="usermanagementview_student.css" rel="stylesheet">
        <script src="../Shared/js/jquery-1.11.0.min.js"></script>
        <script src="usermanagementview.js"></script>
	<script type="text/javascript" src="../Shared/dugga.js"></script>

  </head>
  <body>
  	<?php 
		$noup="NONE";
		$loginvar="COURSE"; 
		include '../Shared/navheader.php';
	?>

	<?php
		include '../Shared/loginbox.php';
	?>
		
  	<div id="contentUMV">

    	<!-- Dropdownmenu -->
    	<nav class="rightDropdownMenu">
        	<ul>
            	<li>
                	<a href="http://webblabb.iki.his.se:8080/umv/c13emmjo/week16/UserManagementView/teacherView.php">Nuvarande �r</a>
                </li>
                <li>
                	<a href="#" >Tidigare �r</a>
                </li> 
        	 </ul> 
        </nav>
       	<!-- End Dropdownmenu -->
        
	<!-- Program year and name -->
    <div id="name_bar"><h3>Program�r X f�r xxxxxxxxx</h3></div>
	<!-- End Program year and name -->
    
    <!-- Container for Progress Bars -->
    <div class="container" id="container">  
  	    
        <!-- Main Progress Bar -->    
        <div class="progress" id="progress1">
            	
            	<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                </div>
    
		</div>
		<!-- End Main Progress Bar -->
    
 		<!-- 1st G1N Partial progress Bar -->
       	<div class="progress" id="progress2">
    		
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">G1N</div>

  		</div>
        	<ul>
        		<li><a href="#" >Nuvarande år</a></li>
        		<li><a href="#" >Tidigare år</a></li>
        	</ul> 
        </nav>  
    		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%">G2F</div>
    
        <div class="my-container-fluid clearfix"> <!--Whole div that hold the text inside, the green-div-->
  		<!-- End 2st G2F Partial progress Bar -->
        
   		<!-- 3st G1F Partial progress Bar -->
        <div class="progress" id="progress3">
        
    		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%">G1F</div>
        
            <div class="my-col-xs-4"> <!--Div for the Year 1-->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Year 1 <span class="my-pull-right small">Fall2013/Spring2014</span></h3>
                  </div>
                  <div id="year1-body" class="panel-body">
                  </div>
	<!-- End Container for Progress Bar -->    	
    <!-- Indicator for Big progress bar  -->
    <div  id="progress_m">
      	             
    	<div id="m">40hp</div>  
    </div>
            </div> <!--end of Year 1-->
    </br>
   	
    <div class="my-container-fluid clearfix">
    	    
        <!-- Year wrapp -->
        <div class="my-col-xs-4">
            
                <div class="panels">
                
                	<!-- Heading -->
                    <div class="panelheading">
                  
                    	<h3 class="panel-title" id="panel-title">�r 1 </h3>

            <div class="my-col-xs-4"><!--Div for the Year 2-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Year 2 <span class="my-pull-right small">Fall2014/Spring2015</span></h3>
                    </div>
                    <div id="year2-body" class="panel-body">
                    </div>		
                </div>
            </div><!--end of Year 2-->
                    
                
                <div id="year1-body" class="panel-body">
                  
                <!-- Course1 wrap -->
                <div id="course-1" class="courses">
                
                <!-- Course1 Inner wrap -->
                <div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                
                </div>
                <!-- End Course wrap -->
                        
                
                <div id="course-2" class="courses_second">
                
                	<!-- Course1 Inner wrap -->
                <div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->      	                          
                </div>
                      
                <div id="course-3" class="courses">
                
                	<!-- Course1 Inner wrap -->
                <div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                      	                          
                </div>
                      
                <div id="course-4" class="courses_second">
                	
                    <!-- Course1 Inner wrap -->
                <div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
   
                </div>
                      
                <div id="course-5" class="courses">
                	
                    <!-- Course1 Inner wrap -->
                <div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                      	                         
                </div>
                      
                <div id="course-6" class="courses_second">
                
                	<!-- Course1 Inner wrap -->
                <div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                      	                         
                </div>
                                             
                <div id="course-7" class="courses">
                
                	<!-- Course1 Inner wrap -->
                <div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                      	                         
                </div>
                      
                <div id="course-8" class="courses_second">
                
                	<!-- Course1 Inner wrap -->
                <div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                      	                        
                </div>                
                  
                  
                  </div>
                  
                </div>
                
        </div>
    
            <div class="my-col-xs-4">
            
                <div class="panels">
                
                  <div class="panelheading">
                    
                        <h3 class="panel-title">�r 2 </h3>
                  </div>
                    
                    <div id="year2-body" class="panel-body">
                    
                    	<div id="course-1" class="courses">
    					
                        	<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
	

            <div class="my-col-xs-4"><!--Div for the Year 3-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Year 3 <span class="my-pull-right small">Fall2015/Spring2016</span></h3>
                    </div>
                    <div id="year3-body" class="panel-body">
                    </div>		
                </div>
            </div> <!--end of Year 3-->

                        	</div>
                        	<!-- End Course Bar wrapp -->
 	
    </div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                    	
                </div>
                      
                      <div id="course-9" class="courses_second">
                      
                      		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                      	                          
                      </div>
                      
                      <div id="course-10" class="courses">
                      
                      		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                      	                         
                      </div>
                      
                      <div id="course-11" class="courses_second">
                      
                      		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                        	                          
                      </div>
                      
                      <div id="course-12" class="courses">
                      	
                        	<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                	                          
                      </div>
                      
                      <div id="course-13" class="courses_second">
                      
                      		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                	                         
                </div>
                                             
                      <div id="course-14" class="courses">
                      
                      		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                      	                          
                      </div>
                      
                      <div id="course-15" class="courses_second">
                      
                      		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                      	                        
                      </div> 
                        
                    </div>		
                </div>
            </div>
    
            <div class="my-col-xs-4">
            
                <div class="panels">
                
                  <div class="panelheading">
                    
                        <h3 class="panel-title">�r 3 </h3>
                  </div>
                    
                    <div id="year3-body" class="panel-body">
                    
                      <div id="course-17" class="courses">
                      
                      		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                          
                      </div>
                      
                      <div id="course-18" class="courses_second">
                      	                         
                      		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                      
                      </div>
                      
                      <div id="course-19" class="courses_second">
                      	
                        	<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                	                          
                </div>
                
                <div id="course-20" class="courses_second">
                
                		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->
                      	                         
                </div>                       
                
                <div id="course-21" class="courses">
                
                		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->      	                          
                </div>
                
                <div id="course-22" class="courses_second">
                
                		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->      	                         
                </div>
                
                <div id="course-23" class="courses_second">
                
                		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->      	                         
                </div>
                
                <div id="course-24" class="courses_second">
                
                		<!-- Course1 Inner wrap -->
                			<div class="courseInnerWrapp">
                      
                        <!-- Course Name -->  
                       	<div id="courseName">Kursnamn
                        	
                            <!-- Course Bar wrapp -->
                        	<div class="courseBar">
                            	
                                <!-- Course Bar -->
                            	<div class="progress" id="course_progress">
    							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete (warning)
                                </div>
 								
                                
                            	</div>    
                            	<!-- End Course Bar -->
                            
                        	</div>
                        	<!-- End Course Bar wrapp -->
                
               			</div>
                		<!-- End Course Name -->         
                   
                  <div id="courseLink"><a href="#">L�nk till kurssida</a></div>
                  <div id="courseResponsible">Kursanvarig:<a href="mailto:">Marcus Brohede</a></div>
                      
                </div>
                <!-- End Course1 Inner wrap -->      	                         
                </div>   
                         
                    </div>		
                </div>
            </div>
			
	  </div>
        
  </div>
    
    
    
    
    
	</div>		
  <!-- Section List -->


  </body>
</html>
