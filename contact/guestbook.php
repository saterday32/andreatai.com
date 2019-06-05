<h1>Guestbook</h1>

<?php
	if (!(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["comment"])))
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$comment = $_POST["comment"];

		//insert_into
		$con=mysqli_connect('pdb35.awardspace.net', '3009833_omis120database', 'omis120database', '3009833_omis120database');
		$sql="INSERT INTO guestbook(name, email, comment)VALUES('$name', '$email', '$comment')";
		$result=mysqli_query($con,$sql);
		mysqli_close($con);
	}
	else
	{
		if (!empty($_POST["submitted"]))
		{
			$name_error = empty($_POST["name"]) ? '* name is required' : '';
			$email_error = empty($_POST["email"]) ? '* email is required' : '';
			$comment_error = empty($_POST["comment"]) ? '* comment is required' : '';
		}
	}
?>

<form action="guestbook.php" method="post">
	Name: <input type="text" name="name"> <?= $name_error ?><br><br>
	Email: <input type="email" name="email"> <?= $email_error ?><br><br>
	Comment: <input type="text" name="comment"> <?= $comment_error ?><br><br>
	<input type="hidden" name="submitted" value="true">
	<input type="submit">
</form>

<a href="viewguestbook.php"> View Guestbook</a>
