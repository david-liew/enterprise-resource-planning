<?php //include_once("./Controller/headconfig.php") 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Enterprise Resource Planning</title>
	<link rel="icon" type="image/png" href="./src/img/favicon.ico" />

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Brief description of the page">
	<meta name="keywords" content="keyword1, keyword2, keyword3"> <!--used for SEO (Search Engine Optimization)-->
	<meta name="author" content="Liew Yng Jeng">
	<!--<meta http-equiv="refresh" content="5;url=https://.com">-->

	<!-- Offline CSS
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	<!-- Offline Javascript
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>-->
	<!-- Online CSS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<!-- Online JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Online Popper-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<!--Online jQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<style>
		.navbar-brand>img {
			max-height: 40px;
			/* Adjust the max-height according to your logo size */
		}

		@media (min-width: 1400px) {}

        @media (min-width: 1200px) {}

        @media (min-width: 992px) {}

        @media (min-width: 768px) {}

        @media (min-width: 576px) {}

        @media (max-width: 575.98px) {}
	</style>
</head>

<body onresize="jQScreenSize()">
	<nav class="navbar navbar-expand-xxl navbar-light bg-light">
		<div class="container-fluid">
			<!-- Logo / Brand -->
			<a class="navbar-brand" href="main.php">
				<img src="src/img/cg.png" alt="Logo">
			</a>

			<!-- Navbar Toggler and Toolbar -->
			<!--data-bs-toggle="collapse/tab/pill/dropdown", data-bs-target="#id/.class"-->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
				<!-- Toolbar Items <ul class="navbar-nav nav nav-tabs me-auto">-->
				<ul class="nav nav-pills flex-column flex-xxl-row me-auto">
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="region" data-bs-toggle="dropdown" aria-expanded="false" role="button" title="MY-SG Region">
							MY-SG Region
						</a>
						<!-- aria-labelledby="id" -->
						<ul class="dropdown-menu" aria-labelledby="region">
							<li>
								<a href="#" class="dropdown-item" title="MY-CN Region">MY-CN Region</a>
							</li>
							<li>
								<a href="#" class="dropdown-item" title="MY-HK Region">MY-HK Region</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link active" id="tab-home" data-bs-target="#home" data-bs-toggle="pill" onclick="home()" aria-controls="#home" aria-selected="true" role="tab" title="Home">Home</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" id="tab-flow" data-bs-target="#flow" data-bs-toggle="pill" aria-controls="#flow" aria-selected="false" role="tab" title="Flow Center">Flow Center</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" id="tab-app" data-bs-target="#app" data-bs-toggle="pill" onclick="application()" aria-controls="#app" aria-selected="false" role="tab" title="Application Center">Application Center</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" id="tab-knowledge" data-bs-target="#knowledge" data-bs-toggle="pill" aria-controls="#knowledge" aria-selected="false" role="tab" title="Knowledge Center">Knowledge Center</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" id="tab-service" data-bs-target="#service" data-bs-toggle="pill" aria-controls="#service" aria-selected="false" role="tab" title="Service Center">Service Center</a>
					</li>
				</ul>
				<ul class="nav nav-pills flex-column flex-xxl-row ms-auto">
					<li class="nav-item">
						<a href="#" class="nav-link" id="tab-todo" data-bs-target="#todo" data-bs-toggle="pill" aria-controls="#todo" aria-selected="false" role="tab" title="To-Do">To-Do</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" id="tab-toread" data-bs-target="#toread" data-bs-toggle="pill" aria-controls="#toread" aria-selected="false" role="tab" title="To-Read">To-Read</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" id="tab-mail" data-bs-target="#mail" data-bs-toggle="pill" aria-controls="#mail" aria-selected="false" role="tab" title="Mail">Mail</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link d-none d-xxl-block disabled" tabindex="-1" aria-disabled="pill">|</a>
						<hr class="d-xxl-none">
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="login" data-bs-toggle="dropdown" aria-expanded="false" role="button" title="Login">Login</a>
						<ul class="dropdown-menu" aria-labelledby="login">
							<li>
								<a href="#" class="dropdown-item" title="Logout">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var navTabs = document.querySelectorAll('.nav-link');

			navTabs.forEach(function(tab) {
				tab.addEventListener('click', function() {
					navTabs.forEach(function(tab) {
						tab.classList.remove('active');
					});
					this.classList.add('active');
				});
			});
		});
	</script>

	<div class="tab-content">
		<!--class=".fade"/".show active"-->
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="tab-home"></div>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				var home = document.getElementById("home");
				if (home.classList.contains("active")) {
					$('#home').load('home.php', function(responseTxt, statusTxt, xhr) {
						if (statusTxt == 'error') {
							alert('Error: ' + xhr.status + ': ' + xhr.statusText);
						}
					});
				}
			});

			function home() {
				$('#home').load('home.php', function(responseTxt, statusTxt, xhr) {
					if (statusTxt == 'error') {
						alert('Error: ' + xhr.status + ': ' + xhr.statusText);
					}
				});
			}
		</script>
		<div class="tab-pane fade" id="flow" role="tabpanel" aria-labelledby="tab-flow">flow</div>
		<div class="tab-pane fade" id="app" role="tabpanel" aria-labelledby="tab-app"></div>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				var app = document.getElementById("app");
				if (app.classList.contains("active")) {
					$('#app').load('tabpanel.php', function(responseTxt, statusTxt, xhr) {
						if (statusTxt == 'error') {
							alert('Error: ' + xhr.status + ': ' + xhr.statusText);
						}
					});
				}
			});

			function application() {
				$('#app').load('tabpanel.php', function(responseTxt, statusTxt, xhr) {
					if (statusTxt == 'error') {
						alert('Error: ' + xhr.status + ': ' + xhr.statusText);
					}
				});
			}
		</script>
		<div class="tab-pane fade" id="knowledge" role="tabpanel" aria-labelledby="tab-knowledge">knowlege</div>
		<div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="tab-service">service</div>
		<div class="tab-pane fade" id="todo" role="tabpanel" aria-labelledby="tab-todo">todo</div>
		<div class="tab-pane fade" id="toread" role="tabpanel" aria-labelledby="tab-toread">toread</div>
		<div class="tab-pane fade" id="mail" role="tabpanel" aria-labelledby="tab-mail">mail</div>
	</div>

	<script>
		/*javaScript
		window.addEventListener('resize', jSScreenSize);
		jSScreenSize();
		function jSScreenSize() {
		let width = window.innerWidth;
		let fontSize;
		if (width >= 1400) { //xxl
		fontSize = '14px';
		} else if (width >= 1200) { //xl
		fontSize = '14px';
		} else if (width >= 992) { //lg
		fontSize = '13px';
		} else if (width >= 768) { //md
		fontSize = '12px';
		} else if (width >= 576) { //sm
		fontSize = '11px';
		} else { //xs
		fontSize = '10px';
		}
		var describe = document.querySelectorAll('.des-name, .des-cribe');
		describe.forEach(function(element) {
		element.style.fontSize = fontSize;
		});
		}*/

		/*jQuery
		function jQScreenSize() {
		let width = window.innerWidth;
		if (width >= 1400) { //xxl
		$('.des-name, .des-cribe').css('font-size', '14px');
		} else if (width >= 1200) { //xl
		$('.des-name, .des-cribe').css('font-size', '14px');
		} else if (width >= 992) { //lg
		$('.des-name, .des-cribe').css('font-size', '13px');
		} else if (width >= 768) { //md
		$('.des-name, .des-cribe').css('font-size', '12px');
		} else if (width >= 576) { //sm
		$('.des-name, .des-cribe').css('font-size', '11px');
		} else { //xs
		$('.des-name, .des-cribe').css('font-size', '10px');
		}
		}*/
	</script>
</body>

</html>