<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Sistem </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="<?php echo base_url(); ?>assets/css/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='<?php echo base_url(); ?>assets/css/fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
	

</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Daftar</h1>
			</div>
			<div class="login-block">
				<div class="login-block">
				<form method="post" action="<?php echo base_url();?>index.php/pegawai/insertpegawai">
					<input type="text" name="username" placeholder="Username" required>
					<input type="password" name="password" class="lock" placeholder="Password">
                    <input type="hidden" name="level" class="lock" placeholder="Password" value="user">
                       <input type="hidden" id="status" name="status" class="lock" placeholder="Password" value="Pending">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <br />
        <div id="success"></div>
        <div class="row">
        
        </div>
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Daftar">	
					<h3>&nbsp;</h3>
					<div class="login-icons"> </div>
				</form>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 Politeknik Pos Indonesia| Design by IdeaSolution</p>
</div>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
