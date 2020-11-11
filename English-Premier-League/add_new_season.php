<?php
include("top.html");
 session_start();
?>
<div class="open_add">
    <p><b><u>New Season Details</u></b></p>
    <form id="form1" action="add_new_season.php"method="POST">
        <div class="row-part">
    <div class="part1">
    <label>Home Team</label>
    <br>
    <input type="text"placeholder="Enter Home team"name="t-home">
    <br>
    <label>Away Team</label>
    <br>
    <input type="text"placeholder="Enter away team" name="t-away">
    <br>
    <label>Win</label>
    <br>
    <input type="number"placeholder="Enter your win" name="t-win">
    </div>
    <div class="part2">
        <br>
        <label> Lose</label>
        <br>
        <input type="number"placeholder="Enter lose" name="t-lose">
        <br>
        <label>Draw</label>
        <br>
        <input type="number"placeholder="Enter draw"name="t-draw">
        <br>
        <br>
        <button type="submit">Add</button>
        <button type="reset">Reset</button>
        </form>

    </div>
    </div>
</div>

<?php
include("bottom.html");
include("common.php");
if(isset($_POST["submit"])){
	$home =filter_input(INPUT_POST,"t-home");
	$away = filter_input(INPUT_POST,"t-away");
	$win = filter_input(INPUT_POST,"t-win");
	$lose = filter_input(INPUT_POST,"t-lose");
	$draw =filter_input(INPUT_POST,"t-draw");
	//  Add data to the new season created.
	function newSeason($name,$home,$away,$win,$lose,$draw){
		$sql = "INSERT INTO `$name`(`Team`,`COL 4`,`COL 55`,`COL 59`,`COL 58`)
		VALUES('$home','$away','$win','$lose','$draw');";
	
			$query = mysqli_query($conn,$sql);
		if(!$query){
			die("Unable to add season".mysqli_error($conn));
		}
	echo"<script type='text/javascript'>alert('Season created successfully')</script>";
	mysqli_close($conn);
	}
	
	newSeason($_SESSION["name"],$home,$away,$win,$lose,$draw);
}
?>