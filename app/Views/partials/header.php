<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.navbar-nav .nav-link {
			font-weight: 1000;
		}

		.navbar-nav .nav-link.active {
			color: transparent !important;
			-webkit-text-stroke: 2px var(--primary-color);
			font-weight: 700;
			background: none;
		}
	</style>
	<meta charset="UTF-8">
	<title><?= isset($meta_title) ? esc($meta_title) : 'Título por defecto' ?></title>
	<meta name="description" content="<?= isset($meta_description) ? esc($meta_description) : 'Descripción por defecto' ?>">
	<meta name="keywords" content="<?= isset($meta_keywords) ? esc($meta_keywords) : 'palabras, clave, por, defecto' ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS (CDN) -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style-starter.css') ?>">
	<!-- Google Fonts used by the template -->
	<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico">
</head>

<header id="site-header" class="fixed-top">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
			<h1>
				<a class="navbar-brand pe-xl-5 pe-lg-4" href="<?= site_url('/') ?>">
					GG
				</a>
			</h1>
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
				<span class="navbar-toggler-icon fa icon-close fa-times"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarScroll">
				<ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
					<li class="nav-item">
						<a class="nav-link<?= service('uri')->getSegment(1) == '' ? ' active' : '' ?>" href="<?= site_url('/') ?>">Home</a>
					</li>
					<li class="nav-item">
						<span class="nav-link disabled">About</span>
					</li>
					<li class="nav-item">
						<a class="nav-link<?= service('uri')->getSegment(1) == 'servicios' ? ' active' : '' ?>" href="<?= site_url('servicios') ?>">Services</a>
					</li>
					<li class="nav-item">
						<span class="nav-link disabled">Contact</span>
					</li>

				</ul>
				<ul class="navbar-nav search-right mt-lg-0 mt-2">
					<li class="nav-item mr-2" title="Search"><a href="#search" class="search-search">
							<span class="fas fa-search" aria-hidden="true"></span></a></li>
					<li class="nav-item mx-lg-4"><a href="" class="phone-btn btn-white d-none d-lg-block btn-style ms-2"><span class="fas fa-user me-2" aria-hidden="true"></span> User Login</a></li>
				</ul>

				<!-- //toggle switch for light and dark theme -->
				<!-- search popup -->
				<div id="search" class="w3lpop-overlay">
					<div class="w3lpopup">
						<form action="#formsearch" method="GET" class="d-flex">
							<input type="search" placeholder="Search.." name="search" required="required" autofocus>
							<button type="submit"><span class="fas fa-search"></span></button>
							<a class="close" href="#formsearch">&times;</a>
						</form>
					</div>
				</div>
				<!-- /search popup -->
			</div>
			<!-- toggle switch for light and dark theme -->
			<div class="mobile-position">
				<nav class="navigation">
					<div class="theme-switch-wrapper">
						<label class="theme-switch" for="checkbox">
							<input type="checkbox" id="checkbox">
							<div class="mode-container">
								<i class="gg-sun"></i>
								<i class="gg-moon"></i>
							</div>
						</label>
					</div>
				</nav>
			</div>
			<!-- //toggle switch for light and dark theme -->
		</nav>
	</div>
</header>