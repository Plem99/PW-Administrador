<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <div id="formGamer" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="col-md-12 col-sm-12 offset-md-3 form-group ">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Registrar Venta</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!--End title-->
                                    <div class="x_content">
                                        <br />
                                        <!--<form id="demo-form" data-parsley-validate class="form-horizontal form-label-left">-->

                                            <div class="col-md-4 col-sm-12 form-group">
                                                <i class='fa fa-user'></i> <label for="gamer">Gamer* :</label>
                                                <select type="text" id="gamer" class="form-control" name="gamer" required >
                                                </select>
                                            </div>

                                            <div class="col-md-4 col-sm-12 form-group">
                                                <i class='fa fa-shopping-cart'></i> <label for="producto">Producto* :</label>
                                                <select type="text" id="producto" oninput="calcularCosto();" class="form-control" name="producto" required >
                                                </select>
                                            </div>

                                            <div class="col-md-4 col-sm-12 form-group">
                                                <i class='fa fa-money'></i> <label for="costo">Costo en MXN :</label>
                                                <input type="number" id="costo" class="form-control" name="costo" disabled="" />
                                            </div>

                                            <div class="col-md-4 col-sm-12 form-group">
                                                <i class='fa fa-usd'></i> <label for="pagas">Pagas* :</label>
                                                <input type="number" oninput="cambio();" id="pagas" class="form-control" name="pagas" required />
                                            </div>

                                            <div class="col-md-4 col-sm-12 form-group">
                                                <i class='fa fa-money'></i> <label for="cambio">Cambio :</label>
                                                <input type="text" id="cambio" name="cambio" class="form-control" name="cambio" disabled="" />
                                            </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        <!--End datos generales form-->
                        <button onclick="registrarVenta()" id="btnVenta" class="btn btn-success">Registrar Venta</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--End button agregar -->