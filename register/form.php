<!DOCTYPE html>
<html>
<head>
	<title>Register!</title>
</head>
<body>
	<form action="insert.php" method="POST">
		<table>
			<tr>
				<td>Name :</td>
				<td><input type="text" placeholder="name" name="username" required></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="Password" placeholder="password" name="password" required></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="email" placeholder="email" name="email" required></td>
			</tr>
			<tr>
				<td>
					<input type="Submit" value="Submit" name="">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>