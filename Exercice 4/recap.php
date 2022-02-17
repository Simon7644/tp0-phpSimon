Votre pseudo est <?php echo $_POST["pseudo"]; ?> <br>
Votre Mdp est <?php echo $_POST["mdp"]; ?><br>
Votre Email est <?php echo $_POST["email"]; ?><br>

<?php

$pseudoErr ="ERREUR: Votre pseudo doit contenir entre 3 et 10 caractères."; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if((strlen($_POST["pseudo"]) > 10) OR (strlen($_POST["pseudo"]) < 3))
        {
            echo $pseudoErr;
        } else {
            
        }

}
  ?>
  
