<?php session_start();?>
<?php
if(isset($_SESSION["movie"])){
	print "Welcome back! Would you like to repeat your recent search for <a href=movie.php?film=".$_SESSION["movie"].">".$_SESSION["title"]."</a>?";
}?>	
<!DOCTYPE html>
<html>
	<head>
		<title> Rancid Tomatoes</title>
	</head>
	<body>
		<p> Select a movie </p>
		<form action="movie.php" method="get">
			<select name="film">
				<option value="fightclub"> Fight Club </option>
				<option value="mortalkombat"> Mortal Kombat </option>
				<option value="princessbride"> Princess Bride </option>
				<option value="tmnt"> Teenage Mutant Ninja Turtles </option>
				<option value="tmnt2"> Teenage Mutant Ninja Turtles II</option>
				<input type="submit" value="submit">
			</select>
		</form>
		
	</body>
</html>