<div class="x_panel">
    <div class="x_title">
        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#registrarProducto">
              Registrar Producto
            </button>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <!-- Button trigger modal -->

                    <p class="text-muted font-13 m-b-30">
                        Todos los productos
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Precio MXN</th>
                                <th>Monedas</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody id="tablaProductos">
                            <?php //include "../production/modulos/backend/B_tablaGamers.php" ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="registrarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registrar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- contenido de modal Registrar consola -->
           <form>
              <div class="form-group">
                <label for="nombreProducto" class="col-form-label">Nombre</label>
                <input type="text" name="nombreProducto" class="form-control" id="nombreProducto">

              </div>
              <div class="form-group">
                <label for="costoProducto" class="col-form-label">Costo</label>
                <input type="number" class="form-control" name="costoProducto" id="costoProducto" min="1" pattern="^[0-9]+">

              </div>
                <div class="form-group">
                <label for="monedasProducto">Bonificación de Monedas</label>
                    <input type="number" class="form-control" name="monedasProducto" id="monedasProducto"  min="1" pattern="^[0-9]+">
                </div>
            </form>
        <!-- contenido de modal Registrar consola -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelarConsola">Cancelar</button>
        <button type="button" onclick="registrarProducto()" class="btn btn-success" id="guardarConsola">Guardar Registro</button>
      </div>
    </div>
  </div>
</div>