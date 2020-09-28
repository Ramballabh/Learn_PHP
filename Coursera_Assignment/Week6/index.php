<!DOCTYPE html>
<html lang="en">
<body>
    <title>Ramballabh agrawal  2b93fa3f</title>
    <h1>Welcome to Guessing Game</h1>
    <?php
        $correctnumber=26; //change this number //
        if(isset($_GET['guess']))
        {
            if (is_numeric($_GET['guess'])===FALSE)
            {
            echo "Your guess is not a number";
            }
            else if ($_GET['guess']<$correctnumber)
            {
            echo "Your guess is too low";
            }
            else if ($_GET['guess']>$correctnumber)
            {
            echo "Your guess is too high";
            }
            else if ($_GET['guess']==$correctnumber)
            {
            echo "Congratulations - You are right";
            }
        }
        else
        {
        echo "Missing guess parameter <br> Your guess is too short";
        }
    ?>
</body>
</html>