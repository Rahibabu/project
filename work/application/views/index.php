<html>
<head>
	<title>Login </title>
</head>
<body >


<?php echo form_open(base_url().'index.php/login/se');?>
	
<label>Username</label>
		<input type="text" name="username">
		<label>Password</label>
		<input type="password" name="password">
		<input type="submit" value="Login" name="authenticate">
<?php echo form_close();?>
</body>
</html>