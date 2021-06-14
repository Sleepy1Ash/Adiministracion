	<body>
		<?php
			if(count($dulces)==0){
		?>
		<h1>No se encontraron coincidencias</h1>
		<?php
			}
		?> 
		<div class="container">
			<div class="row">
				<?php
					foreach($dulces as $dulce){
				?>
				<div class="col-sm">
				<div class="card my-3" style="width: 18rem;">
					<img src="<?=$dulce['Imagen']?>" class="card-img-top" width="200" height="150">
					<div class="card-body">
						<h5 class="card-title"><?=$dulce['Nombre']?></h5>
						<p class="card-text">Presio <?= '$'.$dulce['Presio']?></p>
						<p class="card-text"><?= $dulce['Descripcion']?></p>
						<a href="/dulce.php?id=<?=$dulce["ID"]?>" class="btn btn-outline-primary">Pedir</a>
						<a type="button" class="btn btn-outline-success" href="http://example.com/editproducto.php?idt=<?=$dulce["ID"]?>">Editar</a>
						<a type="button" class="btn btn-outline-danger" href="http://example.com/eliminarproducto.php?ids=<?=$dulce["ID"]?>">Eliminar</a>
					</div>
				</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</body>
</html>