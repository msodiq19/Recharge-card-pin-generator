<?php

    $num = 0;
    
    if(isset($_POST['submit'])){
        /* get the numbers of pins to be generated */
        $num =  $_POST['num'];

        /* checking if the input is empty */
        if(!empty($num)){
        /* function to generate a pin */
        function generatePin($num){
            $pin = [];
        
            for($j=0;$j<15;$j++){
                array_push($pin,mt_rand(0,9));
            }

            return $pin;
        }
        }else{
            echo "Enter an input";
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recharge card pin generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>recharge card pin generator</h1>
        <form action="index.php" method="POST">
            <label for="num">Enter the number of pins to be generated:</label>
            <input type="number" min="200" name="num" id="num">
            <input type="submit" value="Generate" name="submit">
        </form>
        <div class="pin-container">
                <!-- looping through to generate the specified number of pins -->
                <?php for($i=0;$i<$num;$i++){ 
                    $pins = generatePin($num);    
                ?>
                <!-- fitting a pin into a container -->
                <div class="pin">
                    <p>PIN <?php echo $i+1 ?>:</p>
                    <?php foreach($pins as $pin){
                        echo $pin;
                    } ?>
                </div>

                <?php echo '<br>'; } ?>
        </div>
    </div>

</body>
</html>