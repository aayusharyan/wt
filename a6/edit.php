<?php 
		include_once("config.php");
		if(isset($_POST['update'])){
			$rollno=mysqli_real_escape_string($mysqli,$_POST['rollno']);
			$name=mysqli_real_escape_string($mysqli,$_POST['name']);
			$dept=mysqli_real_escape_string($mysqli,$_POST['department']);
			$marks=mysqli_real_escape_string($mysqli,$_POST['marks']);
			if(empty($name)||empty($dept)||empty($marks)){
				if(empty($name)){
					echo "<font color='red'>Name is Empty</font><br/>";
				}if(empty($marks)){
					echo "<font color='red'>Marks is Empty</font><br/>";
				}if(empty($dept)){
					echo "<font color='red'>Department is Empty</font><br/>";
				}
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
			}else{
				$result=mysqli_query($mysqli,"UPDATE hello SET name='$name',dept='$dept',
				marks='$marks' WHERE rollno=$rollno") or die(mysqli_error($mysqli));
				echo"<font color='green'>Data Update Succesfully</font>";
				header('location:index.php');
			}
		}
	?>
<?php
	$rollno=$_GET['rollno'];
	$result=mysqli_query($mysqli,"SELECT * FROM hello WHERE rollno=$rollno");
	while($res=mysqli_fetch_array($result)){
		$name=$res['name'];
		$dept=$res['dept'];
		$marks=$res['marks'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Page</title>
	</head>
	<body>
		<a href="index.php">Home</a>
		<br/><br/>
		<form action="edit.php" name="form1" method="post">
			<table border="0">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $name;?>"></td>
				</tr>
				<tr>
					<td>Department</td>
					<td><input type="text" name="department" value="<?php echo $dept;?>"></td>
				</tr>
				<tr>
					<td>Marks</td>
					<td><input type="text" name="marks" value="<?php echo $marks;?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="rollno" value="<?php echo $rollno;?>"></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</body>
</html>