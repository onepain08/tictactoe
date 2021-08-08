<?php 
    include './calsses/board.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheet.css">
    <title>Tic Tac</title>
</head>
<body>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php $board = new Board(9, 0); ?>
        
    </form>
    <div class="data">
    <?php 

        if(isset($_POST["box1"])){
            $_POST["box1"] = "X";
            echo $_POST["box1"];
        }
        
        echo $board->getValue();
        
        
        
    
    ?>
    </div>

   

</body>
</html>