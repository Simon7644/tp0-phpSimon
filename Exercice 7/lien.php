
<?php
if(isset( $_GET['clic']))
{
   if($_GET['clic'] == "pizza") echo 'Une pizza, très bon choix!';
   elseif($_GET['clic'] == "salade") echo 'Rien ne vaut une bonne salade!';
   elseif($_GET['clic'] == "viande") echo 'Votre viande est en cours de cuisson!';
   elseif($_GET['clic'] == "poisson") echo 'Poisson ? Je pensais que vous étiez capricorne..';
}
   ?>