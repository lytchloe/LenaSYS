<?php
	include_once "../../coursesyspw.php";
	include_once "../Shared/sessions.php";
	// continue if logged in, else redirect to loginprompt
	session_start();
	if(!checklogin()){
		header("Location: ../Shared/loginprompt.php");
	}
	pdoConnect();
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>LenaSYS User Editor</title>
        
        <link rel="stylesheet" type="text/css" href="css/progressbar2.css">
        
        <link type="text/css" href="../Shared/css/style.css" rel="stylesheet">
        <link href="css/umv.css" rel="stylesheet">
        <link href="css/studentView.css" rel="stylesheet">
        
        <script src="../Shared/js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="../Shared/dugga.js"></script>
    </head>

<body>

  	<?php 
		$noup="TEACHERVIEW";
		$loginvar="UMVTEACHER"; 
		include '../Shared/navheader.php';
	?>

	<?php
		include '../Shared/loginbox.php';
	?>
		
    <!-- content START -->   
	<div id="contentUMV">
            
        <!-- Dropdownmenu -->
        
        <nav class="rightDropdownMenu" id="DropdownMenu"></nav>  
        
        <div id="class_view">
            <!-- ProgramName -->
            <div id="title" class="programName">
            </div> 
            
            
            <!-- Linegraph -->
            <div id="graphContainer" class="lineGraph">
                <canvas id="graph" width="900" height="150">
                </canvas>
            </div>
            
            
            <!-- Large progressbar -->
            <div class="largeProgressbarTV">
            </div> 
            
            
            <div class="totalInfo">
    			
                	<!-- Filter (Radiobuttons) -->
    				<div id="radio_buttonToolbar">
                        <form>
                        	<input type="radio" id="allStudents" name="filterList" value="allStudents" checked>
                            	<label for="allStudents"><span>Alla studenter</span></label>
    						<input type="radio" id="activeStudents" name="filterList" value="activeStudents">
                            	<label for="activeStudents"><span>Aktiva studenter</span></label>
                        </form>
    				</div>
                    
                    <!-- View over the students how are going that program/course -->
                    <div class="studentInfoWrapper">
                        <div id="studentslist">
                        </div>
    				</div>
    		
                
                <!-- Change pages buttons-->
                <div id="teacher_pages"> 
                </div> 
            
            </div>
        </div>
        <!-- Clickble view so the teacher can se specific student -->
        <div id="studentView">

            <div id="studentTitle">

            </div>
            <!-- Students progressbar, completed credits in percent out of total -->
            <div class="mainProgressBarcontainer">
                <div id="MainProgress">
                
                    <div id="completedMainProgress">
                    
                        <div id="ProgressbarG1N">
                            <div id="completedProgressbarG1N"></div>
                        </div>
                    
                        <div id="ProgressbarG1F">
                            <div id="completedProgressbarG1F"></div>
                        </div>
                    
                        <div id="ProgressbarG2F">
                            <div id="completedProgressbarG2F"></div>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
            
            <!-- View over the student courses/ school year  -->
            <div id="YearContainer">
            
                
                <div id="Year1" class="Year">
                    
                </div>
                
                <div id="Year3" class="Year">

                </div>
            
                <div id="Year2" class="Year">

                </div>
        
            
            </div>
        </div>   
	</div>


    <script src="js/teacherView.js"></script>
    <script src="js/studentView.js"></script>

</body>
</html>
