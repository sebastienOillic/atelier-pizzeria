<?php
require_once __DIR__."/../../bootstrap.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Démo PHP</title>
   <style>
   .header-container, .header-content{
       display: inline-block
   }
   </style>
</head>
<body>
    <header>
    <div class="header-container">
        <div class="header-content"><a href="clients.php">Clients</a></div>
        <div class="header-content"><a href="pizzas.php">Pizzas</a></div>
        <div class="header-content"><a href="commandes.php">Commandes</a></div>
    </div>
    </header>