 
 <!-- Modal  -->
<div class="modal fade" id="modalNuevaRenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear renta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="./modulos/backend/B_insertRenta.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="fecha">Fecha</label>
              <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Nombre de accesorio" min="0">
            </div>
            <div class="form-group col-md-6">
              <label for="horaInicio">Hora de inicio</label>
              <input type="number" class="form-control" id="horaInicio" name="horaInicio" placeholder="Costo de accesorio">
            </div>
            <div class="form-group col-md-6">
              <label for="horaFin">Hora de finzalización</label>
              <input type="number" class="form-control" id="horaFin" name="horaFin" placeholder="Costo de accesorio">
            </div>
          </div>

		<div class="form-group col-md-4">
		      <label for="consola">Consola</label>
		    </div>
		    <select id="consola" name="consola" class="custom-select custom-select-sm">

		            <?php //include "./modulos/backend/B_plataforms2Costs.php"?>
		      </select>


		      <div class="form-group col-md-4">
		      <label for="gamer">Gamer</label>
		    </div>
		    <select id="gamer" name="gamer" class="custom-select custom-select-sm">

		            <?php //include "./modulos/backend/B_plataforms2Costs.php"?>
		      </select>

		      <div id="accesorios" class="form-group col-md-4">
		      	<label for="">Accesorios</label>
		      	<br>
		      	
					<?php  ?>

					<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>

		      </div>
		      <br>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <input type="submit" class="btn btn-primary" value="Agregar"></input>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>