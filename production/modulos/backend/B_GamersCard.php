<?php
function top(){
	echo "<div class='col-md-4 col-sm-4  profile_details'>";
	echo "<div class='well profile_view'>";
    echo "<div class='col-sm-12'>";
	echo "<h4 class='brief'><i>"."Gamer"."</i></h4>";
	echo "<div class='left col-sm-7'>";
}
function down($valor){
	echo "</div>";
	echo "<div class='right col-sm-5 text-center'>";
	echo "<img src='images/user.png' class='img-circle img-fluid'>";
	echo "</div>";
	echo "</div>";
	echo "<div class='bottom text-center'>";
	echo "<div class='col-sm-6 emphasis'>";
	echo "</div>";
	echo "<div class='col-sm-6 emphasis'>";
	echo "<a type='button' class='btn btn-round btn-success' href='./Gamer.php?var=".$valor."'>".
		 "<i class='fa fa-user'></i>". "Ver Gamer".
		 "</a>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
}
?>