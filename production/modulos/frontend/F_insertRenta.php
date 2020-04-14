 
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
        <form method="post" id="miFormRenta">
		<div class="form-group col-md-4">
		      <label for="consola">Consola</label>
		    </div>
		    <select id="consola" name="consola" class="custom-select custom-select-sm">

		            <?php include "./modulos/backend/B_consolas2Rentas.php"?>
		      </select>


		      <div class="form-group col-md-4">
		      <label for="gamer">Gamer</label>
		    </div>
		    <select id="gamer" name="gamer" class="custom-select custom-select-sm">

		            <?php include "./modulos/backend/B_gamers2Rentas.php"?>
		      </select>

		

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="setDatosRenta()">Agregar</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>