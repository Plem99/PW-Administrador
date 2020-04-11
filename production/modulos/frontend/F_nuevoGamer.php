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
                                        <h2>Datos generales</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!--End title-->
                                    <div class="x_content">
                                        <br />
                                        <!--<form id="demo-form" data-parsley-validate class="form-horizontal form-label-left">-->

                                            <div class="col-md-3 col-sm-12 form-group">
                                                <i class='fa fa-pencil'></i> <label for="name">Nombre(s)* :</label>
                                                <input type="text" id="name" class="form-control" name="name" required />
                                            </div>

                                            <div class="col-md-3 col-sm-12 form-group">
                                                <i class='fa fa-pencil'></i> <label for="last_name">Apellidos* :</label>
                                                <input type="text" id="last_name" class="form-control" name="last_name" required />
                                            </div>

                                            <div class="col-md-3 col-sm-12 form-group">
                                                <i class='fa fa-google'></i> <label for="email">Correo electrónico* :</label>
                                                <input type="text" id="email" class="form-control" name="email" required />
                                            </div>

                                            <div class="col-md-3 col-sm-12 form-group">
                                                <i class='fa fa-exclamation-circle'></i> <label for="tipoUsuario">Tipo de Usuario* :</label>
                                                <div class="radio" >
                                                    <label>
                                                      <input type="radio" class="flat" name="adminGamerRadio" checked="checked" value="0"> Administrador
                                                    
                                                      <input type="radio" class="flat" name="adminGamerRadio" value="1"> Gamer
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <i class='fa fa-pencil'></i> <label for="username">Username* :</label>
                                                <input type="text" id="username" class="form-control" name="username" required />
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <i class='fa fa-pencil'></i> <label for="password">Password* :</label>
                                                <input type="password" id="password" class="form-control" name="password" required />
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <i class='fa fa-male'></i> <label for="genero">Genero* :</label>
                                                <select id="gender" name="gender" class="form-control" name="gender" required>
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Femenino</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <i class='fa fa-pencil'></i> <label for="birthdate">Fecha de Nacimiento* :</label>
                                                <input type="date" id="birthdate" class="form-control" name="birthdate" required />
                                            </div>


                                        <!--</form>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End datos generales form-->

                        <div class="clearfix"></div>

                        <div class="row">
                            <!--End col left-->

                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Redes Sociales</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <!--<form id="demo-form" data-parsley-validate class="form-horizontal form-label-left">-->

                                            <div class="col-md-4 col-sm-12 form-group">
                                                <i class='fa fa-twitch'></i> <label for="twitch"> Twitch:</label>
                                                <input type="text" id="twitch" class="form-control" name="twitch" />
                                            </div>

                                            <div class="col-md-4 col-sm-12 form-group">
                                                <i class='fa fa-twitter'></i> <label for="twitter"> Twitter:</label>
                                                <input type="text" id="twitter" class="form-control" name="twitter"  />
                                            </div>

                                            <div class="col-md-4 col-sm-12 form-group">
                                                <i class='fa fa-facebook-square'></i> <label for="facebook"> Facebook:</label>
                                                <input type="text" id="facebook" class="form-control" name="facebook"  />
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <i class='fa fa-youtube-play'></i> <label for="youtube"> Youtube:</label>
                                                <input type="text" id="youtube" class="form-control" name="youtube" />
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <label for="mixer"> Mixer:</label>
                                                <input type="text" id="mixer" class="form-control" name="mixer"  />
                                            </div>

                                        <!--</form>-->
                                    </div>
                                </div>
                                <!--End estilo de vida-->
                            </div>
                            <!--End col right-->
                        </div>
                        <!--End row-->

                        <button onclick="agregarGamer()" id="btnGamer" class="btn btn-success">Agregar Gamer</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--End button agregar paciente-->