<?php require("config.php"); ?>
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
<h1><b>Teacher</b></h1>
<div class="mb-3 d-block">
    <a href="teacher.php" class="btn btn-dark">Manage Teacher</a>
    <a href="add_teacher.php" class="btn btn-danger">Add New Teacher</a>
</div>
 <?php if(isset($_GET['msg'])){?>  
 <div class="alert alert-danger"><strong>message:-</strong>
 <?php echo $_GET['msg']; ?>
</div>
<?php } ?>  

 <?php if(isset($_GET['msg'])){?>  
 <div class="alert alert-danger"><strong>message:-</strong>
 <?php echo $_GET['msg']; ?>
</div>
<?php } ?>   
<?php
if(isset($_GET['tid']))
{
  $id=$_GET['tid'];
  $sql=mysql_query("SELECT * FROM tbl_teachers where id =$id");
  $result=mysql_fetch_array($sql);

 ?>
 <h3>Teacher Data</h3>
 <table border="1"  width="100%" >

   <tr>
  <td width="30%"><strong>ID</strong></td>
  <td><?php echo $result['id'] ?></td>
    </tr>
 
    <tr>
  <td><strong>name </strong></td>
  <td><?php echo $result['teacher_name'] ?></td>
    </tr>
  <tr>
  <td><strong>phone </strong></td>
  <td><?php echo $result['phone'] ?></td>
    </tr>
     <tr>
  <td><strong>Email </strong></td>
  <td><?php echo $result['teacher_email'] ?></td>
    </tr>
  <tr>
  <td><strong>Salary </strong></td>
  <td><?php echo $result['salary'] ?></td>
    </tr>
 
 
  </table>
<?php
} 
else
{

?>              
<div class="table-responsive"> 
   <table id="employee_data" class="table-bordered table table-striped">
      
          
              <thead>  
                <tr>  
                      <th>Date</th>   
                      <th>Name / Email</th>  
                      <th>Phone / Address</th>  
                      <th>Action</th>  
                </tr>  
              </thead>  
              <?php 
              $sql = mysql_query("SELECT * FROM  tbl_teachers"); 
              while($row = mysql_fetch_array($sql))  
              {  
              ?> 
              <tr> 
                      <td><?php echo date('d-M-Y',strtotime($row["add_dat"])); ?></td>  
                      <td><?php echo $row["teacher_name"] ?><br><br><?php echo $row["teacher_email"] ?></td>  
                      <td><?php echo $row["phone"] ?><br><br><?php echo $row["address"] ?></td>   
                      <td><a href="teacher.php?tid=<?php echo $row['id']; ?>" ><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;<a href= "update_teacher.php?uid=<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp; <a href="delete.php?action=delete_teacher&tid=<?php echo $row['id']; ?>" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>  
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
