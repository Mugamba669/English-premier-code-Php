<?php
include("top.html");
include("common.php");
$val = 0;
$id = '';
$season = filter_input(INPUT_POST,"team_s");
echo("<b><p style='color:gold;'>Search results for<u>"." ".$season."</u>...</p></b>");
echo"<table>";
	echo("<tr><th colspan='13'>".$season."</th></tr>");
	echo"<tr>";
			echo"<th>Home</th>";
			echo"<th>Away</th>";
			echo"<th>Date</th>";
			echo"<th>FTGH</th>";
			echo"<th>FTAG</th>";
			echo"<th>FTR</th>";
			echo"<th>HTHG</th>";
			echo"</tr>";
$sql ="SELECT * FROM `table_five`
		WHERE Team LIKE '$season%'
		UNION
SELECT * FROM `table_three`
		WHERE Team LIKE '$season%'
		UNION
SELECT * FROM `table_two`
		WHERE Team LIKE '$season%'";
$query = mysqli_query($conn,$sql);
if(!$query){
die("Failed to get required data".mysqli_error($conn));
}else{
	while($row = mysqli_fetch_assoc($query)){
		//outputdata in forman associated array into html table.
			 $id = $val % 2;
		echo"<tr>";
		echo"<td>{$row['Team']}</td>";
		echo"<td>{$row['COL 4']}</td>";
		echo"<td>{$row['COL 2']}</td>";
		echo"<td>{$row['COL 5']}</td>";
		echo"<td>{$row['COL 6']}</td>";
		echo"<td>{$row['COL 7']}</td>";
		echo"<td>{$row['COL 8']}</td>";
		echo"</tr>";
		
		 $val++;
		}
		
}
	


echo"<b><p>\nEnd of search results for\t".$season. "</p></b>";
// mysql_free_result($query);
//
	if($val < 2){//statement to check if team exists or not
echo"<tr><td colspan='7'style='text-align:center;'>Team\t".$season."\tnot found!!</td></tr>";
exit(1);
}
echo"</table>";
//close connection.
mysqli_close($conn);
include("bottom.html");
?>
</body>
</html>