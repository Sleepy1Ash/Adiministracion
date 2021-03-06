<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	</head>
	<body style="background-color:#86dbd8;">
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
		<div class="container-fluid">
			<a class="navbar-brand" href="http://example.com">Almacén</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Caramelos</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Paletas</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Compras
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="http://example.com/form.php">Crear</a></li>
					<li><a class="dropdown-item" href="#">Encargo</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="#">Codigos</a></li>
				</ul>
				</li>
				<li class="nav-item">
				<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="false">Direccoion</a>
				</li>
			</ul>
			<form class="d-flex" action="http://example.com">
				<input class="form-control me-2" type="search" name= 'q' placeholder="Buscar" aria-label="search">
				<button class="btn btn-outline-success" type="submit">Buscar</button>
			</form>
			</div>
		</div>
	</nav>