<?php require("../config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="assests/css/hover.css">
<link rel="stylesheet" href="assests/css/style.css">
<link rel="stylesheet" href="assests/css/font-awesome.min.css"> 
<link rel="stylesheet" href="assests/data-table/responsive.bootstrap4.min.css"> 
</head>

<body>
<?php include('header.php'); ?>
            
<div class="content-wrapper">
<h1><b>Students</b></h1>
<div class="mb-3 d-block">
    <a href="student.php" class="btn btn-dark">Manage Student</a>
    <a href="add_student.php" class="btn btn-danger">Add New Student</a>
</div>

 <?php if(isset($_GET['msg'])){?>  
 <div class="alert alert-danger"><strong>message:-</strong>
 <?php echo $_GET['msg']; ?>
</div>
<?php } ?> 
<?php if(isset($_GET['sid'])){
  $id = $_GET['sid'];
  $sql = mysql_query("SELECT * FROM tbl_students where id =$id");
  $result = mysql_fetch_array($sql);
  ?>
  <h3>Student Data</h3>
  <table border="1px" width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td width="30%"><strong>Id</strong></td>
      <td><?php echo $result['id'];?></td>
    </tr>
    <tr>
      <td width="30%"><strong>Name</strong></td>
      <td><?php echo $result['student_name'];?></td>
    </tr>
   <tr>
      <td width="30%"><strong>Father</strong></td>
      <td><?php echo $result['father_name'];?></td>
    </tr>
    <tr>
      <td width="30%"><strong>Mother</strong></td>
      <td><?php echo $result['mother_name'];?></td>
    </tr>
    <tr>
      <td width="30%"><strong>Address</strong></td>
      <td><?php echo $result['address'];?></td>
    </tr>
    <tr>
      <td width="30%"><strong>Phone</strong></td>
      <td><?php echo $result['phone'];?></td>
    </tr>
    <tr>
      <td width="30%"><strong>Attendance</strong></td>
      <td><?php ?></td>
    </tr>
    <tr>
      <td width="30%"><strong>Marks</strong></td>
      <td><?php ?></td>
    </tr>
  </table>
<?php
}else{
  ?>     

                    
<div class="table-responsive"> 
   <table id="employee_data" class="table-bordered table table-striped">
      
          
              <thead>  
                <tr>    
                      <th>Name /   Email</th>  
                      <th>Phone / Address</th>  
                      <th>father / mother</th>
                      <th>Action</th>  
                </tr>  
              </thead>  
              <?php 
              $sql = mysql_query("SELECT * FROM  tbl_students"); 
              while($row = mysql_fetch_array($sql))  
              {  
              ?> 
              <tr> 
                      
                      <td><?php echo $row["student_name"] ?><br><br><?php echo $row["student_email"] ?></td>  
                      <td><?php echo $row["phone"] ?><br><br><?php echo $row["address"] ?></td>  
                      <td><?php echo $row["father_name"] ?><br><br><?php echo $row["mother_name"] ?></td>   
                      <td><a href="student.php?sid=<?php echo $row['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;<a href="update.php?uid=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp; <a href="action.php?action=delete_student&sid=<?php echo $row['id']; ?>" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>  
              </tr>  
              <?php
              }  
              ?>  

          </table>




     </div>
   <?php } ?>
</div>

<?php include('footer.php'); ?>
    
<script src="assests/js/jquery.js"></script>
<script src="assests/js/script.js"></script>
<script src="assests/data-table/jquery.dataTables.min.js"></script>
<script src="assests/data-table/dataTables.bootstrap4.min.js"></script>
<script src="assests/data-table/dataTables.responsive.min.js"></script>
</body>
</html>
