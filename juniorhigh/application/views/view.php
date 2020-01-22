<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="C:\xampp\htdocs\grocery-crud-demo\application\views\css\bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div>
	
		<a href='<?php echo site_url('addrole/g7_sec1')?>'>Add Students</a> |
		<a href='<?php echo site_url('addrole/add_faculty')?>'>Add Faculty</a> |
		
		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>

</body>
</html>
