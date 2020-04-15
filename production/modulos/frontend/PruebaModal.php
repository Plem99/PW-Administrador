
<div class="modal fade" id="juegoconsole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Videojuegos en consola x</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="miForm">

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="costoHora">Lista de todos los Videojuegos</label>
      <select id="platforma" name="platforma" class="custom-select form-control custom-select-sm">
        <option>Apex Legends</option>
      </select>
    </div>
    <div class="form-group col-md-1">
      <label for="cantidadHoras"></label>
      
      <button id="btnEliminar" onclick="fdf()" class="btn form-control btn-success btnEliminar" ><i class="fa fa-plus"></i></button>
    </div>
  </div>
  <br>
  <br>
  <div class="form-row">
    <div class="x_panel">
    <div class="x_title">
        <h2>Lista</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                        Todos los Videojuegos en consola x
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Imagen</th>
                                <th>Accion</th>
                            </tr>
                        </thead>

                        <tbody id="tablaVideogamesConsole">
                            <td>Apex Legends</td>
                            <td width="70%"><p style="text-align: center; "><img style="width: 30%; border-radius: 7px;" src="../../assets/img/videogames/apex_legends.jpg" alt="image" /> <p></td>
                            <td>
                            
                                <div class="form-group col-md-1">
                                <button id="btnEliminar" onclick="gg()" class="btn  btn-danger btnEliminar" ><i class="fa fa-times"></i></button>
                              </div>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
  
    
      </form>

          </div> 

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-info" data-dismiss="modal">Cerrar</button>
          </div>

    </div>
  </div>
</div>