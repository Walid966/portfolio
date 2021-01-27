<?php
require_once 'pdo.php';
require_once 'form.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/ba3779d8d2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css" />
	<title>Walid El Ahmadi | Web Developer</title>
</head>

<body>
	<div class="wrap">
		<header>
			<div class="container">
				<nav class="nav-bar">
					<div class="bg-b">
						<a class="logo" href="#main">WEA</a>
					</div>
					<ul class="nav">
						<li class="nav-links">
							<a href="#about">About</a>
						</li>
						<li class="vl"></li>
						<li class="nav-links">
							<a href="#work">Work</a>
						</li>
						<li class="vl"></li>
						<li class="nav-links">
							<a href="#contact">Contact</a>
						</li>

						<li class="copy-right">
							<p>&copy; 2021 Walid El Ahmadi. All rights reserved</p>
						</li>
					</ul>

					<div class="hamburger">
						<div class="line1"></div>
						<div class="line2"></div>
						<div class="line3"></div>
					</div>
				</nav>
			</div>
		</header>
		<main id="main">
			<div class="container">
				<div class="info" id="about">
					<h1 class="name">Hi I'm Walid</h1>
					<p>I code stuff for the web</p>
				</div>

				<div id="work">
					<h2>Personal Projects</h2>
					<div class="flex">
						<div class="proj-container">
							<div class="project project-1">
								<span class="rest-name">
									cafe<span class="red">Lorem</span>
									<br />
									<span class="des">CAFE - RESTAURANT - PIZZERIA</span>
								</span>

								<a class="proj-link" href="https://cafelorem.herokuapp.com/" target="_blank">
									Visit website <i class="fas fa-external-link-alt"></i>
								</a>
								<a class="proj-link" href="https://github.com/Walid966/cafe-lorem" target="_blank">
									Source Code <i class="fab fa-github"></i></i>
								</a>
							</div>
							<span class="proj-name">Restaurant Web App</span>
						</div>

						<div class="proj-container">
							<div class="project project-2">
								<span class="rest-name">
									Lorem Store
									<br />
									<span class="des">E-commerce</span>
								</span>

								<a class="proj-link" href="https://loremstore.herokuapp.com/" target="_blank">
									Visit website <i class="fas fa-external-link-alt"></i>
								</a>
								<a class="proj-link" href="https://github.com/Walid966/lorem-store" target="_blank">
									Source Code <i class="fab fa-github"></i></i>
								</a>
							</div>
							<span class="proj-name">E-commerce Website</span>
						</div>
					</div>
				</div>

				<div id="contact">
					<h2>Contact</h2>

					<p id="status-message"></p>

					<input type="text" name="name" id="name" placeholder="Name">
					<input type="text" name="email" id="email" placeholder="Email">
					<textarea name="message" id="message" placeholder="Message"></textarea>
					<button id="send">Send</button>

				</div>
			</div>
		</main>

		<footer id="footer">
			<div class="container">
				<p>&copy; 2020 Walid El Ahmadi. All rights reserved</p>
			</div>
		</footer>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="app.js"></script>
</body>

</html>