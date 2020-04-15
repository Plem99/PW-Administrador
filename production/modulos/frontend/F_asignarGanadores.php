

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

        <div id="premiosModal"></div>

        <form method="post" id="gandoresTorneo">        

          <br> <br> <br> <br>
              
          <label for="primerlugarP">Primer Lugar</label>
          <select id="primerlugarP" name="primerlugarP" class="custom-select custom-select-sm">

                <?php //include "./modulos/backend/B_participants2Ganadores.php"?>
          </select>


          <label for="segundolugarP">Segundo Lugar</label>
          <select id="segundolugarP" name="segundolugarP" class="custom-select custom-select-sm">

                <?php //include "./modulos/backend/B_participants2Ganadores.php"?>
          </select>


          <label for="tercerlugar">Tercer Lugar</label>
          <select id="tercerlugarP" name="tercerlugarP" class="custom-select custom-select-sm">

                <?php //include "./modulos/backend/B_participants2Ganadores.php"?>
          </select>
        

        

        

          <div class="modal-footer" id="btnAgregar">
            
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>