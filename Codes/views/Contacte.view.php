<?php
include "header.view.php" ;
?>

<section>
<div class="containerContacte">
  <div><h1>Contactez_agent</h1></div>
  <div class="form" >
  <form action="Contacte.view.php" method="POST">
    <div class="felexInput1">
        <input type="text" placeholder="Nom complet" name="NomComplet" class="flexo">
        <input type="email" placeholder="Email" name="email" class="flexo1">
    </div>
        <input class="text" type="text" placeholder="write your message here...">
       <div> 
        <input type="checkbox" id="entreprise" name="entreprise">
        <label for="entreprise">Entreprise</label>
        <input type="checkbox" id="Particulier" name="Particulier">
        <label for="Particulier">Particulier</label>
    </div>
        <input type="submit" value="send" name="send" class="button">

</form>
</div>
</div>
</section>