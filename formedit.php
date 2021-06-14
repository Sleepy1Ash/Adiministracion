        <div class="container">
            <form method="post" action="http://example.com/modificar.php?idts=<?=$t["ID"]?>">
              <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input name="Nombre" class="form-control form-control-lg" type="text" value="<?=$t["Nombre"]?>" placeholder="" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label">Precio</label>
                <input name="Presio" class="form-control form-control-lg" type="number" step="0.01" value="<?=$t["Presio"]?>" placeholder="" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input name="Descripcion" class="form-control form-control-lg" type="text" value="<?=$t["Descripcion"]?>" placeholder="" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label">Stock</label>
                <input name="Stock" class="form-control form-control-lg" type="number" value="<?=$t["Stock"]?>" placeholder="" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label">Imagen</label>
                <input name="Imagen" class="form-control form-control-lg" type="text" value="<?=$t["Imagen"]?>" placeholder="" aria-label=".form-control-lg example">
              </div>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </body>
</html>