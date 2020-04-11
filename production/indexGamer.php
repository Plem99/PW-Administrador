<?php
    $id = $_GET['var'];
    include ('./modulos/backend/B_seleccionarGamer.php');
    session_start();
    //Obtener id
  
  if (isset($_SESSION['username']) && $_SESSION['username']!='') {
?>
    <!DOCTYPE html>
    <html lang="en">
    <?php include "./includes/icono.html" ?>
        <header>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Gaming Center | UPV</title>
            <?php include "./includes/header.html" ?>
        </header>

        <body class="nav-md">
            <div class="container body">
                <div class="main_container">
                    <div class="col-md-3 left_col">
                        <?php include "./includes/navbar_Gamer.php" ?>
                    </div>

                    <?php include "./includes/top-navigation.html" ?>

                        <!-- page content -->
                        <div class="right_col" role="main">
                            <!--Contenedor general ""-->
                            <div class="">
                                <div class="page-title">

                                    <!--Title left-->
                                    <div class="title_left">
                                        <h3>Inicio</h3>
                                    </div>

                                </div>
                                <!--End page-title-->

                                <div class="clearfix"></div>

                            </div>
                            <!--End ""-->

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

    </html>
    <?php
  }else{
    header("Location: ../index.php");
  }
 ?>