<?php require("../config.php"); ?>
<?php if(isset($_GET['uid'])){
$id = $_GET['uid'];
$sql = mysql_query("SELECT * FROM tbl_students where id = $id");
$row = mysql_fetch_array($sql);
}
?>
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
<h1><b>Student</b></h1>
<div class="mb-3 d-block">
    <a href="add_student.php" class="btn btn-dark">Back</a>
  
</div>

<div class="row">
        <div class="col-md-6">
          <form action="code.php" method="POST">
            <input type="hidden" name="action" value="update_student">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                <label><strong>Name <span class="text-danger">*</span></strong></label>
                <input type="text" name="name" placeholder="name" value="<?php echo $row['2']; ?>" class="form-control" style="text-transform: capitalize;" autofocus required>
            </div>
            
            <div class="form-group">
                <label><strong>Phone <span class="text-danger">*</span></strong></label>
                <input type="phone" name="phone" placeholder="phone" value="<?php echo $row['5']; ?>" class="form-control numbers" required maxlength="15">
            </div>
         </div>

        <div class="col-md-6">
            <div class="form-group">
                <label><strong>Email <span class="text-danger">*</span></strong></label>
                <input type="email" name="email" placeholder="email" value="<?php echo $row['3']; ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label><strong>Class<span class="text-danger">*</span></strong></label>
                <input type="class" name="class" placeholder="class" value="<?php echo $row['8']; ?>" class="form-control" required>
            </div>

        </div>

         <div class="col-md-6">
            
          

             <div class="form-group">
                <label><strong>Father name <span class="text-danger">*</span></strong></label>
                <input type="text" name="father" placeholder="Father name" value="<?php echo $row['6']; ?>" class="form-control" required>
            </div>
        </div>

         <div class="col-md-6">
             
            
             <div class="form-group">
                <label><strong>Mother name <span class="text-danger">*</span></strong></label>
                <input type="text" name="mother" placeholder="Mother name" value="<?php echo $row['7']; ?>" class="form-control" required>
            </div>
        </div>
        
    </div>
   
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="form-group">
            <button class="btn btn-dark form-control">Submit</button>
        </div>  
        </div>
    </div>

    </form>
</div>

<?php include('footer.php'); ?>
    
<script src="assests/js/jquery.js"></script>
<script src="assests/js/script.js"></script>
<script src="assests/data-table/jquery.dataTables.min.js"></script>
<script src="assests/data-table/dataTables.bootstrap4.min.js"></script>
<script src="assests/data-table/dataTables.responsive.min.js"></script>
</body>
</html>