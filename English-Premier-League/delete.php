<?php
$remove = filter_input(INPUT_POST,"remove");

function removeSeason($throw){
	include("common.php");
	$sql = "DROP TABLE `$throw`";

	$query = mysqli_query($conn,$sql);
	if(!$query){
	die("<script type='text/javascript'>alert('Unable to delete');</script>");
        header("Location: remove_season.php");
}else{
        echo($remove." "."was deleted successfully");
        header("Location: remove_season.php");
	}
	//close connection
	 mysqli_close($conn);
}
removeSeason($remove);
?>