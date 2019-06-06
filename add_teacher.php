<?php require("config.php"); ?>
<?php //if(!isset($_SESSION['admin_id'])) { header("location:index.php"); } ?>
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
                   <!-- <?php// if(isset($_GET['msg'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>ERROR</strong>: <?php// echo $_GET['msg']; ?>
                    </div>
                    <?php //} ?>-->
                    
    <div class="row">
        <div class="col-md-6">
          <form action="code.php" method="POST">
            <input type="hidden" name="action" value="add_new_teacher">
                <div class="form-group">
                <label><strong>Name <span class="text-danger">*</span></strong></label>
                <input type="text" name="name" placeholder="name" class="form-control" style="text-transform: capitalize;" autofocus required>
            </div>
            
            <div class="form-group">
                <label><strong>Phone <span class="text-danger">*</span></strong></label>
                <input type="phone" name="phone" placeholder="phone" class="form-control numbers" required maxlength="15">
            </div>
         </div>


        <div class="col-md-6">
            <div class="form-group">
                <label><strong>Email <span class="text-danger">*</span></strong></label>
                <input type="email" name="email" placeholder="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label><strong>Password <span class="text-danger">*</span></strong></label>
                <input type="password" name="password" placeholder="password" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label><strong>Id <span class="text-danger">*</span></strong></label>
                <input type="text" name="id" placeholder="id" class="form-control" required>
            </div>
        </div>

         <div class="col-md-6">
            <div class="form-group">
                <label><strong>Salary <span class="text-danger">*</span></strong></label>
                <input type="number" name="salary" placeholder="salary" class="form-control" required>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label><strong>Address <span class="text-danger">*</span></strong></label>
                <textarea  placeholder="address" name="add" class="form-control" style="text-transform: capitalize;" required></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
           <div class="form-group">
                <label><strong>Status</strong></label>
                <select class="form-control" name="status">
                    <option value="0">Active</option>
                    <option value="1">Padding</option>
                </select>
            </div> 
        </div>
        <div class="col-md-6 mt-4">
            <div class="form-group">
            <button class="btn btn-dark form-control" onClick="return confirm('Are you want to client Add?')">Submit</button>
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