<?php include("top.html"); ?>
<p style="color:gold;text-align:center;text-decoration:underline;font:bold 22px Arial;">Remove Season</p>
<div class="result-container">
	<div class="row-result">
		<div class="table-results">
			<table>
				<tr>
					<th>
						Available Seasons
					</th>
				</tr>
					<?php
						include("common.php");
						function availableSeasons(){
							include("common.php");
							$sql = "SHOW TABLES FROM `football`";
							$query = mysqli_query($conn,$sql);
							if(!$query){
								die("Error:".mysqli_error($conn));
							}else{
								while($data = mysqli_fetch_assoc($query)){
									echo("<tr>");
									echo("<td>".$data["Tables_in_football"]."</td>");
									echo("</tr>");
								}
							}
							mysqli_close($conn);
						}
						availableSeasons();
// 				Delete season
 ?>
	</table>
	</div>
	<div class="form-part">
		<p>Type below the season you want to delete </p>
		<form action="delete.php"method="POST">
				<input type="search" id="remove-s"name="remove"placeholder="Enter the season to remove..">
				<button type="submit"> Remove</button>
		</form>
		
	</div>
	</div>
</div>
<?php include("bottom.html"); ?>
