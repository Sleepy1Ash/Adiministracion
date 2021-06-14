	<body>
        <center>
		<div class="card" style="width: 18rem;">
            <img src="<?=$t['Imagen']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$t['Nombre']?></h5>
                <p class="card-text"><?=$t['Descripcion']?></p>
                <p class="card-text"><?='$'.$t['Presio']?></p>
                <p class="card-text">Disponibles: <?=$t['Stock']?></p>
                <a href="/index.php" class="btn btn-outline-primary">Volver</a>
                <a type="button" class="btn btn-outline-success" href="http://example.com/editproducto.php?idt=<?=$t["ID"]?>">Modificar</a><br>
                <a type="button" class="btn btn-outline-danger" href="http://example.com/eliminarproducto.php?ids=<?=$t["ID"]?>">Eliminar</a>
            </div>
        </div>
        </center>
    </body>
</html>