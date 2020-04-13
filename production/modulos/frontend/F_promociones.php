<div class="x_panel">
    <div class="x_title">
        <h2>Promociones</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                        Promociones
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            	<th>ID</th>
                                <th>Promoción </th>
                                <th>Descripción</th>
                                <th colspan="2"> <center><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalAgregarPromocion">Añadir promoción</button></center> </th>
                            </tr>
                        </thead>
    
                        <tbody id="tablaPromociones">


                        </tbody>
                    </table>
                    
            </div>
        </div>
    </div>
</div>
</div>

 <!-- Modal  -->
<div class="modal fade" id="modalAgregarPromocion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar promoción</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="./modulos/backend/B_insertPromocion.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombrePromo">Nombre</label>
      <input type="text" class="form-control" id="nombrePromo" name="nombrePromo" placeholder="Nombre de promoción" min="0">
    </div>
    <div class="form-group">
      <label for="descripcionPromo"  >Descripción</label>
      <input type="text" class="form-control" id="descripcionPromo" name="descripcionPromo" placeholder="Descripción de la promoción">
    </div>
  </div>
  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-primary" value="Agregar"></input>
      </div>
</form>
    </div>
  </div>
</div>
</div>