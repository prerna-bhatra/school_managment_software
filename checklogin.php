<?php
include('config.php');

if($_POST)
{
	$type = $_POST['type'];
	$username = $_POST['name'];
	$password = $_POST['password'];	 
	 
	 if($type == 'admin')
	 {
		$query = mysql_query("select * from tbl_admin where admin_email ='$username' and admin_password = '".md5($password)."'");
		$count = mysql_num_rows($query);
		if($count == '1'){
			$row = mysql_fetch_array($query);
			$_SESSION['admin_id'] = $row['id'];
			$_SESSION['admin_name'] = $row['admin_name'];
			print('<script>window.location="admin/dashboard.php"</script>');
			}
			else
			{
			print('<script>window.location="index.php?msg=Invalid username and password ."</script>');
			}

			}
	
	if($type == 'teacher')
	{
		$query = mysql_query("select * from  tbl_teachers where teacher_email ='$username' and teacher_password = '".md5($password)."'");
		$count = mysql_num_rows($query);
		if($count == '1'){
			$row = mysql_fetch_array($query);
			$_SESSION['teacher_id'] = $row['id'];
			$_SESSION['teacher_name'] = $row['teacher_name'];
			print('<script>window.location="teacher/dashboard.php"</script>');
			}
			else
			{
			print('<script>window.location="index.php?msg=Invalid username and password ."</script>');
			}
			
	}
	
	if($type == 'student')
	{
	$query=mysql_query("select * from tbl_students where student_email ='$username' and student_password='".md5($password)."'");
	 $count = mysql_num_rows($query);
	  if($count== '1')
	  {
		$row=mysql_fetch_array($query);
		echo $row;
		$_SESSION['student_id']=$row['id'];
		$_SESSION['student_name']=$row['student_name'];
		print('<script>window.location="student/dashboard.php"</script>');

		 
	  }
	  else
	  {
		print('<script>window.location="index.php?msg=Invalid username and password ."</script>'); 
	  }
	
	}
		
}
?>