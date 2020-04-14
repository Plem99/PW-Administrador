<div class="x_panel">
    <div class="x_title">
        <h2>Costo accesorios</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                        Costo accesorios
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            	<th>ID</th>
                                <th>Accesorio </th>
                                <th>Costo</th>
                                <th colspan="2"> <center><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalAgregarCostoAccesorio">Añadir costo de accesorio</button></center> </th>
                            </tr>
                        </thead>
    
                        <tbody id="tablaCostoAccesorios">


                        </tbody>
                    </table>
                    
            </div>
        </div>
    </div>
</div>
</div>


 <!-- Modal  -->
<div class="modal fade" id="modalAgregarCostoAccesorio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar accesorio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombreAccesorio">Nombre</label>
              <input type="text" class="form-control" id="nombreAccesorio" name="nombreAccesorio" placeholder="Nombre de accesorio" min="0">
            </div>
            <div class="form-group col-md-6">
              <label for="costoAccesorio">Costo</label>
              <input type="number" class="form-control" id="costoAccesorio" name="costoAccesorio" placeholder="Costo de accesorio">
            </div>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="button" onclick="insertCostAccesorios()" class="btn btn-success">Agregar</button>
      </div>
    </div>
  </div>
</div>
