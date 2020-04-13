
    <!DOCTYPE html>
    <html lang="en">
    <?php include "./includes/icono.html" ?>

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="../vendors/jquery/dist/jquery.min.js"></script>
            <title>Tarifas y Costos</title>
            <?php include "./includes/header.html" ?>
        </head>

        <body class="nav-md">
            <div class="container body">
                <div class="main_container">
                    <div class="col-md-3 left_col">
                        <?php include "./includes/navbar.html" ?>
                    </div>

                    <?php include "./includes/top-navigation.html" ?>

                        <!-- page content -->
                        <div class="right_col" role="main">
                            <div class="">
                                <div class="page-title">
                                    <div class="title_left">
                                        <h3>Tarifas y Costos</h3>
                                    </div>

                                    <div class="title_right">
                                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">

                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="col-md-12 col-sm-6">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2> Tarifas y Costos</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>

                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#consolas" role="tab" aria-controls="home" aria-selected="true" >Consolas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="accesorios-tab" data-toggle="tab" href="#accesorios" role="tab" aria-controls="accesorios" aria-selected="false" onclick="getAccesorios()">Accesorios</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="promociones-tab" data-toggle="tab" href="#promociones" role="tab" aria-controls="promociones" aria-selected="false" onclick="getPromociones()">Promociones</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="consolas" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row">
                                                        <!-- Cambiar por mi frontend para precios consolas-->
                                                        <?php include "./modulos/frontend/F_costoConsolas.php"?>
                                                    </div>
                                                </div>

                                                <!--  -->
                                                <div class="tab-pane fade" id="accesorios" role="tabpanel" aria-labelledby="accesorios-tab">
                                                    <div class="row" >
                                      <!-- Cambiar por mi frontend para precios accesorios-->
                                                        <?php include "./modulos/frontend/F_costoAccesorios.php"?>
                                                    </div>
                                                </div>

                                                <!--  -->
                                                <div class="tab-pane fade" id="promociones" role="tabpanel" aria-labelledby="promociones-tab">
                                                    <div class="row">

                                                        <!-- Cambiar por mi frontend para promociones-->
                                                        <?php include "./modulos/frontend/F_promociones.php"?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /page content -->

                        <!-- footer content -->
                        <footer>
                            <?php include "./includes/footer.html" ?>
                        </footer>
                        <!-- /footer content -->
                </div>
            </div>

            <?php include "./includes/scripts.html" ?>
        </body>
        <script>

            //Cambiar por mi back
        function getPlatforms(){
            $.ajax({
                url: './modulos/backend/B_plataforms2Costs.php',
                type: 'GET',
                success: function (r) {
                    $('#platforma').html(r);
                }
            });
        }
        $.ajax({
            url: './modulos/backend/B_costoConsolas.php',
            type: 'GET',
            success: function (r) {
                $('#tablaCostoConsolas').html(r);
            }
        });

        function getPromociones() {
                $.ajax({
                url: './modulos/backend/B_promociones.php',
                type: 'GET',
                success: function (r) {
                    $('#tablaPromociones').html(r);
                }
            });
        }

        function getAccesorios() {
                $.ajax({
                url: './modulos/backend/B_costoAccesorios.php',
                type: 'GET',
                success: function (r) {
                    $('#tablaCostoAccesorios').html(r);
                }
            });
        }

        
        

        $('#setDatos').click(function(){
            costoHoraV = $('#costoHora').val();
             cantidadHorasV = $('#cantidadHoras').val();
             monedasJugadorV = $('#monedasJugador').val();
             monedasCostoV = $('#monedasCosto').val();
             platformaV = $('#platforma').val();

            if (costoHoraV != '' && cantidadHorasV != '' && monedasJugadorV != '' && monedasCostoV != '' && platformaV != '' ){
                  $.ajax({
                      url: './modulos/backend/B_insertCostoConsola.php',
                      type: 'POST',
                      data:{
                            costoMXN: costoHoraV,
                            horas: cantidadHorasV,
                            coinsplayer: monedasJugadorV,
                            costCoin: monedasCostoV,
                            plataformaValor: platformaV
                          },
                      success: function(data){
                          alert('Costo de hora registrado');
                      }
                  });
          }
        });
        </script>

    </html>