<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Select your option:
    <form action="" method="post">
        <input type="radio" name="userOption" id="rock" value="0"> <label for="rock"><img src="img/rock.png" alt=""></label>
        <input type="radio" name="userOption" id="paper" value="1"> <label for="paper"><img src="img/paper.png" alt=""></label>
        <input type="radio" name="userOption" id="scissors" value="2"> <label for="scissors"><img src="img/scissors.png" alt=""></label>
        <br>
        <input type="submit">
    </form>
    
    <?php
        $options = array("rock","paper","scissors");
        $computerOption = rand(0,2);
        if(isset($_POST['userOption'])){
            $userOption = $_POST['userOption'];
            echo "You chose <img src=\"img/",$options[$userOption],".png\" alt=\"\"><br>";
            echo "Computer chose <img src=\"img/$options[$computerOption].png\"><br>";
            if($computerOption == $userOption) echo '<p style="color: gold;">Game is a tie.</p>';
            else if($computerOption == 0){
                if($userOption == 1) echo '<p style="color: green;">You win!</p>';
                else echo '<p style="color: red;">You lose.</p>';
            }
            else if($computerOption == 1){
                if($userOption == 2) echo '<p style="color: green;">You win!</p>';
                else echo '<p style="color: red;">You lose.</p>';
            }
            else if($computerOption == 2){
                if($userOption == 0) echo '<p style="color: green;">You win!</p>';
                else echo '<p style="color: red;">You lose.</p>';
            }
        }
    ?>
</body>
</html>