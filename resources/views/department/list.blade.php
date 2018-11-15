<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
<div>
	<table>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Description</td>
			<td>Action</td>
		</tr>
		<?php foreach ($allDeparement as $deparement):  ?>
			<tr>
				<td><?php echo $deparement['id']; ?></td>
				<td><?php echo $deparement['name']; ?></td>
				<td><?php echo $deparement['description']; ?></td>
				<td>
					<a href='deparement/<?php echo  $deparement['id'];?>/edit'>Edit</a>
					<a href='deparement/<?php echo  $deparement['id'];?>/delete'>Delete</a>
				</td>
			<?php endforeach: ?>
			</tr>
	</table>
</div>
</body>
</html>