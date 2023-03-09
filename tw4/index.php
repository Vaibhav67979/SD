<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport">
</head>
<body bgcolor="yellow">
<div style="text-align:center;">
<h1>Register</h1>
<form action="connection.php" method="post">
<label for="fname">First Name : </label>
<input type="text" name="fname" required>
<label for="lname">Last Name : </label>
<input type="text" name="lname" required>
<label for="age">Age : </label>
<input type="text" name="age" required>
<label for="email">Email : </label>
<input type="email" name="email" required>
<input type="submit" name="submit" value="Submit">
</form>

</div>
<div style="text-align:center;">
<h1>Search</h1>
<form action="search.php" method="post">
<label for="fname">First Name : </label>
<input type="text" name="fname" required>
<label for="lname">Last Name : </label>
<input type="text" name="lname" required>
<input type="submit" name="submit" value="Submit">
</form>

</div>
</body>
</html>