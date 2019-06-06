<?php
 include('config.php');
 $action=$_GET['action'];
  switch ($action) {
  	case 'delete_teacher':
		  		$tacherid = $_GET['tid'];
		  		$teacher = mysql_query("DELETE FROM `tbl_teachers` WHERE id = '$tacherid'");
               print("<script>window.location='teacher.php?msg=teacher delete succefully'</script>");

		  		break;
		  		
	case 'delete_student':
	            
	            $student_id = $_GET['sid'];
		  		$student = mysql_query("DELETE FROM `tbl_students` WHERE id = '$student_id '");
		  		print("<script>window.location='student.php?msg=student delete succefully'</script>");
		  		break;
		  		
		  	
  }

?>