<?php
include("top.html");
include("common.php");
$team = filter_input(INPUT_POST,'season_s');
echo"<b><p>Search results for " ."<img src='' id='img2'> ".$team."</p></b>";
//Selecting specific data from different seasons
$sql = "SHOW TABLES FROM `football`";
$query = mysqli_query($conn,$sql);
echo("<table><tr><th>Available seasons</th></tr>");
if(!$query){
	die("Error:".mysqli_error($conn));
	}else{
	
			while($row = mysqli_fetch_assoc($query)){
				echo("<tr><td>".$row["Tables_in_football"]."</td>");
				echo"</tr>";
				
			}
	
		echo"</table>";
echo"<b><p>\nEnd of search results for\t".$team. "</p></b>";
}
//close database connection.
mysqli_close($conn);
include("bottom.html");
?>