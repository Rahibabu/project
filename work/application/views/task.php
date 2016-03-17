	
	<html>
	<head>
		<title>User info</title>
	</head>
	<body>
	<form action="<?php echo base_url(); ?>index.php/welcome/insert" method="post">
		<table>
			<tr>
				<td>
					<label>Name</label>
					<input type="text" name="name">
				</td>
				<td>
					<label>Address</label>

					<input type="text" name="address">
				</td>
				<td>
					<label>Contact</label>
					<input type="text" name="contact">
				</td>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</table>
	</form>
<table border="1">
	<tr>
		<td>
			name
		</td>
		<td>
			address
		</td><td>
			contact
		</td>
		<td>
		  Delete
		</td><td>
			Edit
		</td>
	</tr>
	<?php
	$i=1;
	foreach ($student as $row ) 
	{
		?>
		<tr>
			<td>
				<?php echo $row->name; ?>
			</td>
			<td>
				<?php echo $row->address; ?>
			</td>
			<td>
				<?php echo $row->contact; ?>
			</td>
			<td>
				<a href="<?php echo base_url(); ?>index.php/welcome/deldata/<?php echo $row->uid; ?>" >  Delete</a>

			</td>
			<td>
				<a href="<?php echo base_url(); ?>index.php/welcome/edit/<?php echo $row->uid; ?>" >  Edit</a>

			</td>
		</tr>
		<?php $i++; } ?>
	
</table>

	</body>
	</html>