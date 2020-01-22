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

	<!--<div>
		<h4>Super User Access</h4>
	<a>Grade 7</a> ||||| <a>Grade 8</a> ||||| <a>Grade 9</a> ||||| <a>Grade 10</a> <p>
		<a href='<?php echo site_url('admin/g7_sec1')?>'>Section 1</a> 	| <a href='<?php echo site_url('admin/g8_sec1')?>'>Section 1</a> | <a href='<?php echo site_url('admin/g9_sec1')?>'>Section 1</a>   | <a href='<?php echo site_url('admin/g10_sec1')?>'>Section 1</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec2')?>'>Section 2</a> 	| <a href='<?php echo site_url('admin/g8_sec2')?>'>Section 2</a> | <a href='<?php echo site_url('admin/g9_sec2')?>'>Section 2</a>   | <a href='<?php echo site_url('admin/g10_sec2')?>'>Section 2</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec3')?>'>Section 3</a> 	| <a href='<?php echo site_url('admin/g8_sec3')?>'>Section 3</a> | <a href='<?php echo site_url('admin/g9_sec3')?>'>Section 3</a>   | <a href='<?php echo site_url('admin/g10_sec3')?>'>Section 3</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec4')?>'>Section 4</a> 	| <a href='<?php echo site_url('admin/g8_sec4')?>'>Section 4</a> | <a href='<?php echo site_url('admin/g9_sec4')?>'>Section 4</a>   | <a href='<?php echo site_url('admin/g10_sec4')?>'>Section 4</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec5')?>'>Section 5</a> 	| <a href='<?php echo site_url('admin/g8_sec5')?>'>Section 5</a> | <a href='<?php echo site_url('admin/g9_sec5')?>'>Section 5</a>   | <a href='<?php echo site_url('admin/g10_sec5')?>'>Section 5</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec6')?>'>Section 6</a> 	| <a href='<?php echo site_url('admin/g8_sec6')?>'>Section 6</a> | <a href='<?php echo site_url('admin/g9_sec6')?>'>Section 6</a>   | <a href='<?php echo site_url('admin/g10_sec6')?>'>Section 6</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec7')?>'>Section 7</a> 	| <a href='<?php echo site_url('admin/g8_sec7')?>'>Section 7</a> | <a href='<?php echo site_url('admin/g9_sec7')?>'>Section 7</a>   | <a href='<?php echo site_url('admin/g10_sec7')?>'>Section 7</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec8')?>'>Section 8</a> 	| <a href='<?php echo site_url('admin/g8_sec8')?>'>Section 8</a> | <a href='<?php echo site_url('admin/g9_sec8')?>'>Section 8</a>   | <a href='<?php echo site_url('admin/g10_sec8')?>'>Section 8</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec9')?>'>Section 9</a> 	| <a href='<?php echo site_url('admin/g8_sec9')?>'>Section 9</a> | <a href='<?php echo site_url('admin/g9_sec9')?>'>Section 9</a>   | <a href='<?php echo site_url('admin/g10_sec9')?>'>Section 9</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec10')?>'>Section 10</a> 	| <a href='<?php echo site_url('admin/g8_sec10')?>'>Section 10</a> | <a href='<?php echo site_url('admin/g9_sec10')?>'>Section 10</a>   | <a href='<?php echo site_url('admin/g10_sec10')?>'>Section 10</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec11')?>'>Section 11</a> 	| <a href='<?php echo site_url('admin/g8_sec11')?>'>Section 11</a> | <a href='<?php echo site_url('admin/g9_sec11')?>'>Section 11</a>   | <a href='<?php echo site_url('admin/g10_sec11')?>'>Section 11</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec12')?>'>Section 12</a> 	| <a href='<?php echo site_url('admin/g8_sec12')?>'>Section 12</a> | <a href='<?php echo site_url('admin/g9_sec12')?>'>Section 12</a>   | <a href='<?php echo site_url('admin/g10_sec12')?>'>Section 12</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec13')?>'>Section 13</a> 	| <a href='<?php echo site_url('admin/g8_sec13')?>'>Section 13</a> | <a href='<?php echo site_url('admin/g9_sec13')?>'>Section 13</a>   | <a href='<?php echo site_url('admin/g10_sec13')?>'>Section 13</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec14')?>'>Section 14</a> 	| <a href='<?php echo site_url('admin/g8_sec14')?>'>Section 14</a> | <a href='<?php echo site_url('admin/g9_sec14')?>'>Section 14</a>   | <a href='<?php echo site_url('admin/g10_sec14')?>'>Section 14</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec15')?>'>Section 15</a> 	| <a href='<?php echo site_url('admin/g8_sec15')?>'>Section 15</a> | <a href='<?php echo site_url('admin/g9_sec15')?>'>Section 15</a>   | <a href='<?php echo site_url('admin/g10_sec15')?>'>Section 15</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec16')?>'>Section 16</a> 	| <a href='<?php echo site_url('admin/g8_sec16')?>'>Section 16</a> | <a href='<?php echo site_url('admin/g9_sec16')?>'>Section 16</a>   | <a href='<?php echo site_url('admin/g10_sec16')?>'>Section 16</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec17')?>'>Section 17</a> 	| <a href='<?php echo site_url('admin/g8_sec17')?>'>Section 17</a> | <a href='<?php echo site_url('admin/g9_sec17')?>'>Section 17</a>   | <a href='<?php echo site_url('admin/g10_sec17')?>'>Section 17</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec18')?>'>Section 18</a> 	| <a href='<?php echo site_url('admin/g8_sec18')?>'>Section 18</a> | <a href='<?php echo site_url('admin/g9_sec18')?>'>Section 18</a>   | <a href='<?php echo site_url('admin/g10_sec18')?>'>Section 18</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec19')?>'>Section 19</a> 	| <a href='<?php echo site_url('admin/g8_sec19')?>'>Section 19</a> | <a href='<?php echo site_url('admin/g9_sec19')?>'>Section 19</a>   | <a href='<?php echo site_url('admin/g10_sec19')?>'>Section 19</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec20')?>'>Section 20</a> 	| <a href='<?php echo site_url('admin/g8_sec20')?>'>Section 20</a> | <a href='<?php echo site_url('admin/g9_sec20')?>'>Section 20</a>   | <a href='<?php echo site_url('admin/g10_sec20')?>'>Section 20</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec21')?>'>Section 21</a> 	| <a href='<?php echo site_url('admin/g8_sec21')?>'>Section 21</a> | <a href='<?php echo site_url('admin/g9_sec21')?>'>Section 21</a>   | <a href='<?php echo site_url('admin/g10_sec21')?>'>Section 21</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec22')?>'>Section 22</a> 	| <a href='<?php echo site_url('admin/g8_sec22')?>'>Section 22</a> | <a href='<?php echo site_url('admin/g9_sec22')?>'>Section 22</a>   | <a href='<?php echo site_url('admin/g10_sec22')?>'>Section 22</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec23')?>'>Section 23</a> 	| <a href='<?php echo site_url('admin/g8_sec23')?>'>Section 23</a> | <a href='<?php echo site_url('admin/g9_sec23')?>'>Section 23</a>   | <a href='<?php echo site_url('admin/g10_sec23')?>'>Section 23</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec24')?>'>Section 24</a> 	| <a href='<?php echo site_url('admin/g8_sec24')?>'>Section 24</a> | <a href='<?php echo site_url('admin/g9_sec24')?>'>Section 24</a>   | <a href='<?php echo site_url('admin/g10_sec24')?>'>Section 24</a>  <br>  
		<a href='<?php echo site_url('admin/g7_sec25')?>'>Section 25</a> 	| <a href='<?php echo site_url('admin/g8_sec25')?>'>Section 25</a> | <a href='<?php echo site_url('admin/g9_sec25')?>'>Section 25</a>   | <a href='<?php echo site_url('admin/g10_sec25')?>'>Section 25</a>  <br>  
		
  </div>

 

  
		


	<div style='height:20px;'></div>  
    <div> -->
		<?php echo $output; ?>
    </div>

</body>
</html>
