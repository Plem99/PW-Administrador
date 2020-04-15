<div class="modal fade" id="modalNuevoTorneo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear torneo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" id="miFormTorneo">

       <div class="form-group">
            <label for="tituloTorneo">Titulo del torneo</label>
            <input type="text" class="form-control" id="tituloTorneo" placeholder="Titulo del torneo">
          </div>
          
          <div class="container">
            
            <div class="form-group col-md-6">
            <label for="videoJuegoTorneo">Juego del torneo</label>
            <select class="form-control custom-select custom-select-sm" id="videoJuegoTorneo" name="videoJuegoTorneo">
                <?php include './modulos/backend/B_juegos2Torneo.php';  ?>
            </select>
          </div>

          <div class="form-group col-md-6">
          <label for="costoTorneo">Costo del torneo</label>
            <input type="number" class="form-control" id="costoTorneo" min="1" placeholder="Costo del torneo">
          </div>
          </div>
          
          <div class="container">
            <div class="col-md-6">
          <label for="fechaTorneo">Fecha del torneo</label>
            <input type="date" class="form-control" id="fechaTorneo" placeholder="Fecha del torneo">
          </div>

          <div class="col-md-6">
          <label for="horaTorneo">Hora del torneo</label>
            <input type="time" class="form-control" id="horaTorneo" placeholder="Fecha del torneo">
          </div>
          </div>
		
             <div>
          <label for="cantidadGamersTorneo">Cantidad de competidores</label>
            <input type="number" class="form-control" id="cantidadGamersTorneo" min="1" placeholder="Cantidad de competidores">
          </div>

          <div>
          <label for="descTorneo">Descripción del torneo</label>
            <textarea class="form-control" id="descTorneo" rows="3"></textarea>
          </div>
          
            <div class="container">
              <div class="form-group col-md-6">
          <label for="modalidadTorneo">Modalidad</label>
          <select id="modalidadTorneo" name="modalidadTorneo" class="form-control  custom-select custom-select-sm">

                 <option value="Solo">Solo</option>
                  <option value="Duos">Duos</option>
                  <option value="4vs4">4vs4</option>
          </select>
            </div>
        

           <div class="form-group col-md-6">
          <label for="presenciaTorneo">Presencia</label>
          <select id="presenciaTorneo" name="presenciaTorneo" class="form-control  custom-select custom-select-sm">

                <option value="Presencial">Presencial</option>
                  <option value="En linea">En línea</option>
                  <option value="Mixto">Mixto</option>
          </select>
        </div>
            </div>
        

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="setDatosTorneo()">Agregar</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>