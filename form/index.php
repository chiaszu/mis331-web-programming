<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="./jquery-ui.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="./jquery-ui.min.js"></script>
	<script src="mode.js" type=text/javascript></script>
    <title>Kuo, Chia-szu</title>
</head>
<body>
	<button id="theme_button">Dark Mode</button>
	<?php 
	if (isset($_POST["user"])) {
		if (($_POST["user"]=="web") && ($_POST["pwd"]=="programming")) { ?>
			<div class="login"><p>Web Logged In.</p></div>
		<?php 
		} else { ?>
			<div class="login">
				<form action="" method="post">
					<p id="x">Incorrect.</p><br>
					<p>Username: <input type="text" name="user"></p><br>
					<p>Password: <input type="password" name="pwd"></p><br>
					<input id="bt" type="submit" value="Submit">
				</form>
			</div>
		<?php 
		} ?>
	<?php 
	} else { ?>
		<div class="login">
			<form action="" method="post">
				<p>Username: <input type="text" name="user"></p><br>
				<p>Password: <input type="password" name="pwd"></p><br>
				<input id="bt" type="submit" value="Submit">
			</form>
		</div>
	<?php 
	} ?>

	<h1>Kuo, Chia-szu </h1>
	<!--The image is not showing, oh no!-->
	<img src="kuo.png" alt="Picture of me." width="auto" height="400" />
	<p> visits: <?php $count = file_get_contents("count.txt");
								$count += 1;
								file_put_contents("count.txt", $count);
								print($count);
								?> <br>

	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">About me</a></li>
			<li><a href="#tabs-2">Travels</a></li>
		</ul>
		<div id="tabs-1">
			<p>Hello, My name is Chia-szu. I am <em>studying</em>
			<strong>Foreign Language and Literature</strong>, and have a double major in
			Information Management at National Sun Yat-sen University.
			<br>
			<a href="https://www.instagram.com/p/CUqbZoGp7uk/?utm_medium=copy_link">stuDYING be like</a>
			<blockquote>Stay warm, stay calm.</blockquote>
			<p><strong><h3>Expertise</strong></h3><p>
			<ol>
					<li> <span id='a'>English</li>
					<li>Français</li>
					<li>Have fun!</li>
			</ol>
			</p>
		</div>
		<div id="tabs-2">
			<p>
				<strong><h3>Travels</h3></strong>
			</p>
			<table>
					<tr>
							<th>Year</th>
							<th>Country</th>
					</tr>
					<tr>
							<td>2019</td>
							<td>14 days in <strong>UK</strong> with 3 of my girl friends. It is quite adventurous!</td>
					</tr>
					<tr>
							<td>2018</td>
							<td>Universal Studio in <strong>Singapore</strong> is fun. Happy Minions!</td>
					</tr>
			</table>
		</div>
	</div>
</body>

</html>