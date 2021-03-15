<?php
include "header.view.php" ;
?>

<h2>Contactez_agent<h2>
<form action="Contacte.view.php" method="POST">
    <div>
        <input type="text" placeholder="Nom complet" name="NomComplet">
        <input type="email" placeholder="Email" name="email">
    </div>
        <input type="text" placeholder="write your message here...">
        <input type="checkbox" id="entreprise" name="entreprise">
        <label for="entreprise">Entreprise</label>
        <input type="checkbox" id="Particulier" name="Particulier">
        <label for="Particulier">Particulier</label>
        <input type="submit" value="send" name="send">
</form>