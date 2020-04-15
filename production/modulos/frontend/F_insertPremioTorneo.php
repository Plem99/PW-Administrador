
<div class="modal fade" id="modalPremiosTorneo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Premios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h6>Crea un premio para cada lugar</h6>
        <div id="premios"></div>

        <form method="post" id="gandoresTorneo">        

          
            <div >
          <label for="primerlugar">Primer Lugar</label>
          <input type="text" class="form-control" id="primerlugar" placeholder="Premio de primer lugar">
        </div>


        <div >
          <label for="segundolugar">Segundo Lugar</label>
          <input type="text" class="form-control" id="segundolugar" placeholder="Premio de seugndo lugar">
        </div>


        <div >
          <label for="tercerlugar">Tercer Lugar</label>
          <input type="text" class="form-control" id="tercerlugar" placeholder="Premio de tercer lugar">
        </div>


        <div >
          <label for="torneos">Terneos</label>
          <select id="torneos" name="torneos" class="custom-select custom-select-sm">

                <?php //include "./modulos/backend/B_participants2Ganadores.php"?>
          </select>
        </div>
        
        

        

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="setPremiosTorneo()">Agregar</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>