<?php
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "login");
$user_check = $_GET['q'];
$ses_sql=mysqli_query($con, "select * from users where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
?>
<html>
<head>
<title>Your Home Page</title>
</head>
<body>
<center>
<table>
<tr>
<td><b>Welcome :</td><i><td><?php echo $row['username']; ?></i></td></b>
</tr><tr>
<td><b>Account Created at :</td><td> <i><?php echo $row['created_at']; ?></i></td></b>
</tr>
<tr>
</table>
</body>
</html>
<?php
mysqli_close($con); // Closing Connection
?>
