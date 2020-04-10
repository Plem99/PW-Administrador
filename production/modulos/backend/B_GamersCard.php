<?php
function top($valor){
	echo "<div class='col-md-4 col-sm-4  profile_details'>";
	echo "<div class='well profile_view'>";
    echo "<div class='col-sm-12'>";
	echo "<h4 class='brief'><i class='fa fa-info-circle'> ".$valor."</i></h4>";
	echo "<div class='left col-sm-7'>";
}
function down($valor){
	echo "</div>";
	echo "<div class='right col-sm-5 text-center'>";
	echo "<img src='images/img.jpg' class='img-circle img-fluid'>";
	echo "</div>";
	echo "</div>";
	echo "<div class='bottom text-center'>";
	echo "<div class='col-sm-6 emphasis'>";
	echo "</div>";
	echo "<div style='display: flex;' class='col-sm-12 emphasis'>";
	echo "<a type='button' class='btn  btn-success' href='./Gamer.php?var=".$valor."'>".
		 "<i class='fa fa-pencil'></i>". " Modificar"."</a>";
	echo "<a type='button' class='btn  btn-danger' href='./Gamer.php?var=".$valor."'>".
		 "<i class='fa fa-times'></i>". " Eliminar"."</a>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
}
?>