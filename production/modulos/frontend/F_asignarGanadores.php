

<div class="modal fade" id="modalGanadoresTorneo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ganadores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div id="premios"></div>

        <form method="post" id="gandoresTorneo">        

          
            <div class="form-group col-md-4">
          <label for="primerlugar">Primer Lugar</label>
          <select id="primerlugar" name="primerlugar" class="custom-select custom-select-sm">

                <?php //include "./modulos/backend/B_participants2Ganadores.php"?>
          </select>
        </div>


        <div class="form-group col-md-4">
          <label for="segundolugar">Segundo Lugar</label>
          <select id="segundolugar" name="segundolugar" class="custom-select custom-select-sm">

                <?php //include "./modulos/backend/B_participants2Ganadores.php"?>
          </select>
        </div>


        <div class="form-group col-md-4">
          <label for="tercerlugar">Tercer Lugar</label>
          <select id="tercerlugar" name="tercerlugar" class="custom-select custom-select-sm">

                <?php //include "./modulos/backend/B_participants2Ganadores.php"?>
          </select>
        </div>
        
        

        

          <div class="modal-footer" id="btnAgregar">
            
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>