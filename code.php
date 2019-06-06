<?php
include('config.php');
$action = $_POST['action'];
switch ($action) {
	case 'add_new_teacher':
		$teacher = mysql_query("INSERT INTO `tbl_teachers` (`id`, `teacher_name`, `teacher_email`, `teacher_password`, `phone`, `salary`, `address`, `add_dat`) VALUES (NULL, '".$_POST['name']."', '".$_POST['email']."', '".md5($_POST['password'])."', '".$_POST['phone']."', '".$_POST['salary']."', '".$_POST['add']."', '".date('Y-m-d')."')");
		header("Location:add_teacher.php");

		break;
	 case 'add_student':
	 	$student = mysql_query("INSERT INTO `tbl_students` (`id`, `student_name`, `student_email`, `student_password`, `phone`, `father_name`, `mother_name`, `class`, `address`) VALUES (NULL, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['phone']."', '".$_POST['father']."', '".$_POST['mother']."', '".$_POST['class']."', '".$_POST['add']."')");
	 	
	 	header("Location:add_student.php");
	 	break;

	 	case 'update_student':
	 		$student_upt = mysql_query("UPDATE `tbl_students` SET `student_name`='".$_POST['name']."',`student_email`='".$_POST['email']."',`phone`='".$_POST['phone']."',`father_name`='".$_POST['father']."',`mother_name`='".$_POST['mother']."',`class`='".$_POST['class']."' WHERE id = '".$_POST['id']."'");
	 		print("<script>window.location='student.php?msg=student updated succefully'</script>");
	 		break;
 
	 	case 'update_teacher':
	 	    $id=$_POST['id'];
	 	    echo $id;
	 	   echo $teacher_upt=("UPDATE  `tbl_teachers` SET `teacher_name`='".$_POST['name']."','teacher_email'='".$_POST['email']."','phone'='".$_POST['phone']."','salary'='".$_POST['salary']."' WHERE id='".$_POST['id']."'");
           print("<script>window.location='teacher.php?msg=teacher updated succefully'</script>");
	 	   break;
	default:
		# code...
		break;
}


?>