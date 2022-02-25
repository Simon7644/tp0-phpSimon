<?php
if(isset( $_GET['clic']))
{
   if($_GET['clic'] == "chien") echo 'Vous êtes un chien';
   elseif($_GET['clic'] == "chat") echo 'Vous êtes un chat';
}
   ?>