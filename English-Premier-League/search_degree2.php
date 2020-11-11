<<!DOCTYPE html>
  <head>
    <title>search_degree2</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php
        session_start();
    ?>
  </head>

  <body>
  <?php
    $data = filter_input(INPUT_POST,"del");
$_SESSION["name"] = "$data";
    function createSeason($name){
        include("common.php");
        $sql = "CREATE TABLE $name(
                    Home_Team varchar(30),
                    AwayTeam varchar(30),
                    Win int NOT NULL,
                    lose int NOT NULL,
                    Draw int NOT NULL);";
        $query = mysqli_query($conn,$sql);
        if(!$query){
            die("Error:".mysqli_error($conn));
        }else{
            echo('<script>alert("Table created successfully")</script>');
            ob_start();
            header("Location:add_new_season.php");
            exit();
        }
        mysqli_close($conn);
    }
    createSeason($data);
    ?>
  </body>
</html>
