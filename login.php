<?php
    require_once "config.php";
	require_once "config.php";
	
	
	$redirectURL ="http://localhost://sociallogin/login.php/fb-callback.php";
	$permission = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permission);
	
	?>

<!DOCTYPE HTML>

<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport"
         content="width=device-width, userscaleble=no, initial-scale=1.0 maximum-scale=1.0 minimum-scale=1.0">
		 <meta http-equiv="X-UA-Compatible" content="ie-edge">
		 <title>Log in</title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 
</head>
	<body>
		<div class="container" style="margin-top:100px">
			<div class="row justify-content-center">
				<div class="col-md-6  col-md-offset-3" align="center">
					<img src="image/logo.jpg"><br><br>
					<form id="frm_login" method="post" action="">
						<input name="email" placeholder="Email" class="form-control"><br>
						<input name="password" type="password" placeholder="Password" class="form-control"><br>
						<input type="submit" name="btn_login" value="Log In" class="btn btn-primary">
						<input type="button" onclick="window.location = '<?php echo $loginURL ?>';"  name="btn_fb" value="Log In With Facebook" class="btn btn-primary">
					</form>
				</div>
			</div>
		  
		</div>
		 
	</body>




</html>