        <div class="container">
            <form method="post" action="http://example.com/crearproducto.php">
              <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input name="Nombre" class="form-control form-control-lg" type="text" placeholder="Ingresa el nombre del producto" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label">Precio</label>
                <input name="Presio" class="form-control form-control-lg" type="number" placeholder="Ingresa el precio del producto" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input name="Descripcion" class="form-control form-control-lg" type="text" placeholder="Ingresa la descripcion del producto" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label">Stock</label>
                <input name="Stock" class="form-control form-control-lg" type="number" placeholder="Ingresa la cantidad de producto en existencia" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label">Imagen</label>
                <input name="Imagen" class="form-control form-control-lg" type="text" placeholder="Ingresa el URL de una imagen del producto" aria-label=".form-control-lg example">
              </div>
              <button type="submit" class="btn btn-primary">Subir</button>
            </form>
        </div>
    </body>
</html>