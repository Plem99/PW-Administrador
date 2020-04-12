<div class="x_panel">
    <div class="x_title">
        <h2>Torneos</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                        Todos los torneos
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Torneo </th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Modalidad</th>
                                <th>Max. Jugadores</th>
                                <th>Estatus</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody id="tablaTorneos">
                            <?php //include "../production/modulos/backend/B_allTournaments.php" ?>
                        </tbody>
                    </table>
                   <!-- Modal -->
                   <div class='modal fade' id='modalAllInfo' role='dialog'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                             <?php //include "../production/modulos/backend/B_allInfoTournamentID.php" ?>

                   </div>
                  </div>
                  </div> 
            </div>
        </div>
    </div>
</div>
