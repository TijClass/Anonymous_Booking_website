
<!-- Success alert -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="./css/style.comp.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
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
<?php
include "footer.view.php"; ?>