<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="./index.php" class="site_title"><span>PW_Final</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
            <img src="./images/img.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <!--<span>Bienvenido,</span>-->
            <h2><?php echo $row['name']." ".$row['last_name']?></h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <!--Inicio-->
                <li><a href="./index.php"><i class="fa fa-reply"></i> Atras  <span class="fa fa-chevron"></span></a>
                </li>
                <!--Perfil-->
                <li><a href=<?php echo "./indexGamer.php?var=$id" ?> ><i class="fa fa-male"></i> Perfil de Gamer  <span class="fa fa-chevron"></span></a>
                </li>
                <!--Torneos-->
                <li><a href="" ><i class="fa fa-home"></i> Torneos Registrado  <span class="fa fa-chevron"></span></a>
                </li>
                <!--Promocion-->
                <li><a href=""><i class="fa fa-calendar-o"></i> Promocion <span class="fa fa-chevron"></span></a>
                </li>

            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="./production/modulos/backend/logout.php">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>