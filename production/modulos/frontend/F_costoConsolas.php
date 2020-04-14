<div class="x_panel">
    <div class="x_title">
        <h2>Costo consolas</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                        Costo consolas
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            	<th>ID</th>
                                <th>Consola </th>
                                <th>Costo</th>
                                <th>Costo en monedas</th>
                                <th>Horas</th>
                                <th>Monedas para el jugador</th>
                                <th colspan="2"> <center><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalAgregarCostoConsola" onclick="getPlatforms()">Añadir costo de hora</button></center> </th>
                            </tr>
                        </thead>

                        <tbody id="tablaCostoConsolas">


                        </tbody>
                    </table>
                    
            </div>
        </div>
    </div>
</div>
</div>


 <!-- Modal  -->
<div class="modal fade" id="modalAgregarCostoConsola" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar costo de hora</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="miForm">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="costoHora">Costo de la hora</label>
      <input type="number" class="form-control" id="costoHora" name="costoHora" placeholder="Costo de la hora" min="0">
    </div>
    <div class="form-group col-md-6">
      <label for="cantidadHoras">Cantidad de horas</label>
      <input type="number" class="form-control" id="cantidadHoras" name="cantidadHoras" placeholder="Cantidad de horas">
    </div>
  </div>
  <div class="form-group">
    <label for="monedasJugador">Monedas al jugador</label>
    <input type="number" class="form-control" id="monedasJugador" name="monedasJugador" placeholder="Mondes que recibe el jugador">
  </div>
  <div class="form-group">
    <label for="monedasCosto">Costo en monedas</label>
    <input type="number" class="form-control" id="monedasCosto" name="monedasCosto" placeholder="Costo de la hora en monedas">
  </div>
    <div class="form-group col-md-4">
      <label for="platforma">Plataforma</label>
    </div>
    <select id="platforma" name="platforma" class="custom-select custom-select-sm">

            <?php //include "./modulos/backend/B_plataforms2Costs.php"?>
      </select>
      </form>

          </div> 

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-success" onclick="insertCostConsola()" id="setDatos">Agregar</button>
          </div>

    </div>
  </div>
</div>

