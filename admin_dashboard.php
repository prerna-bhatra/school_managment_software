<?php require("config.php"); ?>
<?php if(!isset($_SESSION['admin_id'])) { header("location:../index.php"); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="assests/css/hover.css">
<link rel="stylesheet" href="assests/css/style.css">
<link rel="stylesheet" href="assests/css/font-awesome.min.css"> 
</head>
<style> 
#panel, #flip {
    text-align: center;
    border: solid 1azpx #c3c3c3;
}

#panel {
    display: none;
}
</style>
<body>
<?php include('header.php'); ?>
            
<div class="content-wrapper">
    
    <h4 class="page-title">Dashboard</h4>
   
</div>





<?php include('footer.php'); ?>
    
<script src="assests/js/jquery.js"></script>
<script src="assests/js/script.js"></script>
<script src="assests/data-table/jquery.dataTables.min.js"></script>
<script src="assests/data-table/dataTables.bootstrap4.min.js"></script>
<script src="assests/data-table/dataTables.responsive.min.js"></script>
a </body>
</html>