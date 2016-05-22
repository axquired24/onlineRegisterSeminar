<!DOCTYPE html>
<?php include('phpmanage/db.php'); ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online Registration | Seminar #GetYourProfit 'Meraup Dollar dari Toko Online' | HIMATIF UMS</title>
    
    <!-- BS3 Core CSS -->
    <link href="../bs3_dist/css/bootstrap.css" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <style>
		body{
			background-color:#EEEEED;
			background-attachment: fixed;
			background-position: top;
			padding-top:60px;
		  /* Margin bottom by footer height */
  			padding-bottom: 0px;
			}
		/* Sticky Footer style */
		#footer {
		  position: relative;
		  bottom: -1;
		  left:0;
		  width: 100%;
		  margin-top:60px;
		  /* Set the fixed height of the footer here */
		  height: 60px;
		  background-color: #f5f5f5;
		}		
		#footer > .container {
		  padding-right: 15px;
		  padding-left: 15px;
		  padding-top:15px;
		}		
	</style>
</head>

<body>
	<?php 
		$noRek = '900-00-2214001-1 (Bank Mandiri)';
		include('inc/core/navbar.php'); ?>
    
    <div class="container"><!-- Container body -->
	<?php
		$inc = $_GET[ur];
		if(!empty($inc)){
			include('inc/'.$inc.'.php');
		}else{
			include('inc/informasi.php');
		}	
	?>    
    </div><!-- END container body -->

<!-- FOOTER -->
	<?php include('inc/core/footer.php'); ?>
<!-- END of FOOTER -->                 

<!-- JQuery and Bootstrap js -->
<script src="../bs3_dist/js/jquery.js"></script>
<script src="../bs3_dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$("a").tooltip({placement:"bottom"});
	$("abbr").tooltip({placement:"bottom"});
	$("img").tooltip({placement:"top"});
	$(".tip-bottom").tooltip({placement:"bottom"});
</script>  
</body>
</html>
