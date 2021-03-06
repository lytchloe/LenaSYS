
// AJAX-call to dugga.js 
AJAXService("GET", {}, "UMVSTUDENT");

//-------------------------------------------------------------------------
//	renderStudentView: Renders the student view from the student. Will
//					   render the full view with title and everything.
//-------------------------------------------------------------------------

function renderStudentView(data)
{

	var htmlStr = "";
	var fullname = data['fullname'];
	var studentClass = data['class'];
	
	htmlStr += '<h2>' + fullname +'</h2>';
	htmlStr += '<h3>' + studentClass + '</h3>';
	
	var titleList = document.getElementById('studentTitle');
	titleList.innerHTML = htmlStr;
	
	// Add Progressbar data
	htmlStr = "";
	var progress = data['progress'];
	var completedHP = progress[0]['completedHP'];
	var totalHP = progress[0]['totalHP'];
	var procent = completedHP/totalHP*100;
	
	//If the student doesn't have any credits for a course
	if(progress[0]['completedHP'] == NaN || progress[0]['completedHP'] == null){
		progress[0]['completedHP'] = 0;
	}
	
	htmlStr += '<div class="totalProgressBar">';
	htmlStr += '<div class="progress-bar progress-bar-success" id="MainProgress" role="progressbar" style="width:' + parseFloat(procent) + '%">';
	htmlStr += '<div id="progressIndicator">' + parseFloat(progress[0]['completedHP']) + '/' + parseFloat(progress[0]['totalHP']) + " hp" +'</div></div></div>';
	
	var progressBar = document.getElementById('completedMainProgress');
	progressBar.innerHTML = htmlStr;
	
	
	// Add course data 
	
	htmlStr = "";
	htmlStr2 = "";
	htmlStr3 = "";
	var year = data['year'];
	var courses = year['courses'];
	var countYear = data['class'].match(/\d+/)[0];
	var yearh3 = [];
	console.log(data);
		
	for(var i=0; i< progress[0]['totalHP']/60 ;i++){
		yearh3[i]=parseInt(countYear)+i+2000;
		
	}
		
	htmlStr += '<div class="year_header"><h3>'+ yearh3[0] + '</h3></div>';
	htmlStr += '<div class="courses_body">';
	htmlStr2 += '<div class="year_header"><h3>'+ yearh3[1] +'</h3></div>';
	htmlStr2 += '<div class="courses_body">';
	htmlStr3 += '<div class="year_header"><h3>'+ yearh3[2] +'</h3></div>';
	htmlStr3 += '<div class="courses_body">';
	
	//Parse html for each course. 
	for(var i = 0; i < courses.length; i++) {
		var termcheck=courses[i]['term'];
		var termchecksplit=termcheck.split('-');
		var intYear = studentClass.match(/\d+/)[0];
		
		if(termchecksplit[1]==intYear || ((termchecksplit[1]==parseInt(intYear)+1) && termchecksplit[0]=='VT') ){
				
			htmlStr += createHTMLForCourse(courses[i]);
		}else if((termchecksplit[1]==(parseInt(intYear)+1) && termchecksplit[0]=='HT') || ((termchecksplit[1]==parseInt(intYear)+2) && termchecksplit[0]=='VT')){
				
			htmlStr2 += createHTMLForCourse(courses[i]);
			
		}else if((termchecksplit[1]==(parseInt(intYear)+2) && termchecksplit[0]=='HT') || ((termchecksplit[1]==parseInt(intYear)+3) && termchecksplit[0]=='VT')){
				
			htmlStr3 += createHTMLForCourse(courses[i]);
		}

				
	}
	
	htmlStr += '</div>';
	
	var yearList = document.getElementById('Year1');
	yearList.innerHTML = htmlStr;
	
	
	var yearList2 = document.getElementById('Year2');
	yearList2.innerHTML = htmlStr2;
	
	
	var yearList3 = document.getElementById('Year3');
	yearList3.innerHTML = htmlStr3;
	
	course_hover_requierments(data);
	progress_bar_complete(data);
	console.log("DATA_PRINTED - DONE");
	
	// Check if error occurred during execution of SQL queries 
	if(data['debug'] != "NONE!") {
		alert(data['debug']);
	}
	
}
//-----------------------------------------------------------------------
//	createHTMLForCourse: Creates HTML representation of a specific course.
//						 Prints out the information into div-elements.
//-----------------------------------------------------------------------
function createHTMLForCourse(data) 
{
	var coursename 	= data['coursename'];
	var result		= data['result'];
	var hp			= data['hp'];
	var idCourse	= data['coursecode'];
	var procent 	= result/hp * 100;
	
	// Check that the link is not null and if null present a '#' instead
	var course_link = (data['course_link'] == null ?  '#' : data['course_link']);
	var course_responsible = data['course_responsible'];
	
	if(result==null){
		result=0;
	}
	
	var courseHtmlStr = "";
	
	courseHtmlStr += '<div id="' + idCourse +  '" class="course reg_fade">';
	courseHtmlStr += '<div class="course_wrapper">';
	courseHtmlStr += '<div class="course_name"><p>' + coursename + '</p></div>';
	courseHtmlStr += '<div class="course_progressbar">';
	courseHtmlStr += '<div class="progress"><div class="progress-bar progress-bar-warning" id="" role="progressbar" style="width:' + parseFloat(procent) + '%"></div></div>';
	courseHtmlStr += '<p class="points">' + parseFloat(result) + ' / ' + hp + " hp" + '</p></div>';
	courseHtmlStr += '<div class="course_link"><a href="' + course_link + '">Course link</a></div>';
	courseHtmlStr += '<div class="course_reponsible">' + course_responsible + '<a href="mailto:"">';
	courseHtmlStr += '<img src="img/envelope_purple.svg" id="mail-icon" width="13" height="10" alt="mail"></a></div>';
	courseHtmlStr += '<div class="course_alert">Img</div>';
	courseHtmlStr += '<div class="course_type"></div>';
	courseHtmlStr += '</div>';
	courseHtmlStr += '</div>';
	
	return courseHtmlStr;
}

//-----------------------------------------------------------------------
// When hover, fades away courses not requiered 
//-----------------------------------------------------------------------
function course_hover_requierments(data){
	var regCourses = data['reqCourses'];

	$('.course_alert').on( 'mouseenter',function() {
		
	
		
	
			// Return the closest div parent div ID on the hover effect.
			var hoverCourse = $(this).closest('.course' , '[id]').attr('id');
			var rmHoverCourse = '#'+ hoverCourse;
			$(rmHoverCourse).removeClass('reg_fade');

			//checks the prereqiuerments courses so they wont fade.
			for (var i = 0; i < regCourses.length ; i++){
				if(hoverCourse == regCourses[i]['coursecode']){
					var rmClass = '#' + regCourses[i]['reg_coursecode'];
					$(rmClass).removeClass('reg_fade');
				}
			}
		
			$(".reg_fade").fadeTo(0, 0.2);

		}).on('mouseleave', function() {
			
			$('.course').addClass('reg_fade');
			$(".reg_fade").fadeTo(0, 1);
			
   	
    });
 
}
//-----------------------------------------------------------------------
//Changes the background color to green when the student have finished the course.
//-----------------------------------------------------------------------
function progress_bar_complete(data){

	$( ".progress-bar" ).each(function( index ) {
		 if($('.progress').width() == $(this).width()){
			$(this).css("background-color", "#5cb85c");
		 }
	});
}
