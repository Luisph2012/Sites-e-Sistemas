<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Compara Preços</title>
        <script src="https://use.fontawesome.com/e506c26381.js"></script>
    </head>
	<body>
		<nav class="navbar navbar-expand-lg navbar bg-dark bg-success">
		<a class="navbar-brand" href="#"><i class="fa fa-area-chart" aria-hidden="true"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Início</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Marca</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=marca_read">Consultar</a>
							<a class="dropdown-item" href="?page=marca_create">Cadastrar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produto</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=produto_read">Consultar</a>
							<a class="dropdown-item" href="?page=produto_create">Cadastrar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loja</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=loja_read">Consultar</a>
							<a class="dropdown-item" href="?page=loja_create">Cadastrar</a>
						</div>
					</li>            
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mt-5">
					<?php
						include("config.php");

						switch (@$_REQUEST["page"]){
							//marca
							case 'marca_create':
								include("marca_create.php");
							break;
							case 'marca_read':
								include("marca_read.php");
							break;
							case 'marca_update':
								include("marca_update.php");
							break;
							case 'marca_save':
								include("marca_save.php");
							break;	
							//produto
							case 'produto_create':
								include("produto_create.php");
							break;
							case 'produto_read':
								include("produto_read.php");
							break;
							case 'produto_update':
								include("produto_update.php");
							break;
							case 'produto_save':
								include("produto_save.php");
							break;
							//loja
							case 'loja_create':
								include("loja_create.php");
							break;
							case 'loja_read':
								include("loja_read.php");
							break;
							case 'loja_update':
								include("loja_update.php");
							break;
							case 'loja_save':
								include("loja_save.php");
							break;
							default:
								include("main.php");
						}
					?>
				</div>
			</div>
		</div>

		<script src="js/jquery-3.5.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>