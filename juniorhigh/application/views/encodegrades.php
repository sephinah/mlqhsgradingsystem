<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link  href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body>
	<div>
		<!--	<a href='<?php echo site_url('addrole/add_faculty')?>'>Add Faculty</a> |
		<a href='<?php echo site_url('addrole/g7_sec1')?>'>Add Students</a> |
		<a href='<?php echo site_url('firstquarter/g7_sec1')?>'>First Quarter</a> |
		<a href='<?php echo site_url('secondquarter/g7_sec1')?>'>Second Quarter</a> |
		<a href='<?php echo site_url('thirdquarter/g7_sec1')?>'>Third Quarter</a> |
		<a href='<?php echo site_url('fourthquarter/g7_sec1')?>'>Fourth Quarter</a> |
		
		
		
	</div>
	<div style='height:20px;'></div>  -->
	
  
		 
	<div>
 
		<?php 
			foreach($css_files as $file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<?php foreach($js_files as $file): ?>
				<script src="<?php echo $file; ?>"></script>
		<?php endforeach; ?>

			<?php echo $output; ?>
		
    </div>
	
	


</body>
</html>
