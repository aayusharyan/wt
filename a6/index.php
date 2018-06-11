<?php
	include_once("config.php");
	$result=mysqli_query($mysqli,"SELECT * FROM hello ORDER BY rollno ASC");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
	</head>
	<body>
		<a href="add.html" align="center">Add new Data</a><br/><br/>
		<table width="80%" border="0" align="center">
			<tr bgcolor="#CCCCCC">
				<td>Rollno</td>
				<td>Name</td>
				<td>Department</td>
				<td>Marks</td>
			</tr>
			<?php while($res=mysqli_fetch_array($result)){?>
			<tr>
				<td><?php echo $res['rollno'];?></td>
				<td><?php echo $res['name'];?></td>
				<td><?php echo $res['dept'];?></td>
				<td><?php echo $res['marks'];?></td>
				<td><a href="edit.php?rollno=<?php echo $res['rollno'];?>">Edit</a>|
				<a href="delete.php?rollno=<?php echo $res['rollno'];?>">Delete</a></td>
			</tr>
			<?php }?>
		</table>
	</body>
</html>