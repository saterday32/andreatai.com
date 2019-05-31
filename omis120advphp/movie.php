<?php
if (!isset($_REQUEST["film"]) || !is_dir($_REQUEST["film"])) {
	die("Illegal movie");
}

$movie_name = $_REQUEST["film"];

list($title, $year, $rating) = file("$movie_name/info.txt");
$review_files = glob("$movie_name/review*.txt");
$reviews = count($review_files);
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?= $title ?> - Rancid Tomatoes</title>
		<meta charset="utf-8" />
		<link href="movie.css" type="text/css" rel="stylesheet" />
		<link href="rotten.gif" type="image/gif" rel="shortcut icon" />
	</head>

	<body>
		<div id="topbanner">
			<img src="banner.png" alt="Rancid Tomatoes" />
		</div>

		<h1>
			<?= $title ?> (<?= (int) $year ?>)
		</h1>

		<div id="overall">
			<div id="generaloverview">
				<img src="<?= $movie_name ?>/overview.png" alt="general overview" />

				<dl>
					<?php 
					foreach (file("$movie_name/overview.txt", FILE_IGNORE_NEW_LINES) as $info_line) {
						if (strlen(trim($info_line)) == 0) { continue; }
						list($term, $defn) = explode(":", $info_line);
						?> 
						<dt> <?= $term ?> </dt>
						<dd> <?= $defn ?> </dd>
						<?php
					}
					?> 
				</dl>
			</div>

			<div id="reviews">
				<div id="rottenpane">
					<img class="icon" src="<?= $rating >= 60 ? "fresh" : "rotten" ?>big.png" alt="big rating" />
					<span class="rating"><?= (int) $rating ?>%</span>
				</div>

				<div class="column">
					<?php
					$left = ceil($reviews / 2);
					for ($i = 0; $i < $left; $i++) {
						display_review($review_files[$i]);
					}
					?>
				</div>

				<div class="column">
					<?php
					for ($i = $left; $i < $reviews; $i++) {
						display_review($review_files[$i]);
					}
					?>
				</div>
			</div>

			<p id="footer">(1-<?= $reviews ?>) of <?= $reviews ?></p>
		</div>

		<div id="w3c">
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="http://webster.cs.washington.edu/w3c-html.png" alt="Valid HTML5" /></a> <br />
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="http://webster.cs.washington.edu/w3c-css.png" alt="Valid CSS" /></a>
		</div>
	</body>
</html>

<?php
function display_review($filename) {
	list($review, $rating, $critic, $publication) = file($filename);
	?>

	<div class="review">
		<p class="quotebubble">
			<img class="icon" src="<?= strtolower(trim($rating)) ?>.gif" alt="Rotten" />
			<q><?= trim($review) ?></q>
		</p>

		<p>
			<img class="icon" src="critic.gif" alt="Critic" />
			<?= $critic ?> <br />
			<span class="publication"><?= $publication ?></span>
		</p>
	</div>

	<?php
}
?>
