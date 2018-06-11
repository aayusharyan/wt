<!DOCTYPE html>
<html>
	<head>
		<title>Add Data</title>
	</head>
	<body>
	<?php 
		include_once("config.php");
		if(isset($_POST['Submit'])){
			$rollno=mysqli_real_escape_string($mysqli,$_POST['rollno']);
			$name=mysqli_real_escape_string($mysqli,$_POST['name']);
			$dept=mysqli_real_escape_string($mysqli,$_POST['department']);
			$marks=mysqli_real_escape_string($mysqli,$_POST['marks']);
			if(empty($name)||empty($dept)||empty($marks)||empty($rollno)){
				if(empty($rollno)){
					echo "<font color='red'>Roll No is Empty</font><br/>";
				}if(empty($name)){
					echo "<font color='red'>Name is Empty</font><br/>";
				}if(empty($marks)){
					echo "<font color='red'>Marks is Empty</font><br/>";
				}if(empty($dept)){
					echo "<font color='red'>Department is Empty</font><br/>";
				}
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
			}else{
				$result=mysqli_query($mysqli,"INSERT into hello(rollno,name,dept,marks) VALUES('$rollno','$name',
				'$dept','$marks')") or die($mysqli_error($mysqli));
				echo"<font color='green'>Data Inserted Succesfully</font>";
				echo"<br><a href='index.php'>View Results<a>";
			}
		}
	?>
	</body>
</html>