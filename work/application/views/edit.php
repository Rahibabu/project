	
	<html>
	<head>
		<title>User info</title>
	</head>
	<body>
	<form action="<?php echo base_url(); ?>index.php/welcome/updatedata" method="post">
		<table >
			<tr>
				<td>
					<label>Name</label>
					<input type="text" name="name" value="<?php echo $edit->name?>">
				</td>
				<td>
					<label>Address</label>

					<input type="text" name="address" value="<?php echo $edit->address?>" >
				</td>
				<td>
					<label>Contact</label>
					<input type="text" name="contact"value="<?php echo $edit->contact?>">
					<input type="hidden" name="ID" value="<?php echo $edit->uid?>">				</td>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</table>
	</form>

	</body>
	</html>