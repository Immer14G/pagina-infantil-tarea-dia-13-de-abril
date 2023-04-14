<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page kids</title>
    <style>
        .box{
            display: inline-block;
            text-align: center;
            margin-left: 120px;
            margin-bottom: 90px;
        }
    </style>
</head>
<body>
    <!--Image and text -->
    <nav class="navbar navbar-light bg-light">
<a class="navbar-brand" href="#">
<img src="./img/juego.png" width="30" class="d-inline-block align-top" alt="">
 PageKids
</a>
</nav>

<div class="jumbotron">
<form action="index.php" method="POST">
<div class="box">
    <div class="card" style="width: 16rem; height:14rem;">
 <img class="card" src="./img/gato.jpg" alt="card image cap" style="width: 15rem; height:13rem;">
<div class="card-body">
    <h5 class="card-title">Gato</h5>
<input type="submit" class="btn btn-primary" name="gato" value="reproducir">
</div>
</div>
</div>

<div class="box">
    <div class="card" style="width: 16rem; height:14rem;">
 <img class="card" src="./img//perro.jpg" alt="card image cap" style="width: 15rem; height:13rem;">
<div class="card-body">
    <h5 class="card-title">Perro</h5>
<input type="submit" class="btn btn-primary" name="perro" value="reproducir">
</div>
</div>
</div>

<div class="box">
    <div class="card" style="width: 16rem; height:14rem;">
 <img class="card" src="img/vaca.jpg" alt="card image cap" style="width: 15rem; height:13rem;">
<div class="card-body">
    <h5 class="card-title">Vaca</h5>
<input type="submit" class="btn btn-primary" name="vaca" value="reproducir">
</div>
</div>
</div>

<div class="box">
    <div class="card" style="width: 16rem; height:14rem;">
 <img class="card" src="img/abc.png" alt="card image cap" style="width: 15rem; height:13rem;">
<div class="card-body">
    <h5 class="card-title">abecedario</h5>
<input type="submit" class="btn btn-primary" name="abecedario" value="reproducir">
</div>
</div>
</div>



</div>
</form>
</body>
</html>
<?php
include_once("Animales.php");
?>

