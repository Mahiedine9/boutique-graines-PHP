<?php
require("../config/commande.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Album example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    
  </head>


<div class="album py-5 bg-light">
    <div class="container">
       <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <form method= "post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nom du produit</label>
    <input type="name" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">famille</label>
    <input type="name" class="form-control" name="famille" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">periode de plantation</label>
    <input type="text" class="form-control" name="periode_plantation" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">periode de recolte</label>
    <input type="text" class="form-control" name="periode_recolte" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">conseils d utilisation</label>
    <input type="text" class="form-control" name="conseils"  id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">chemin de l image correspondante</label>
    <input type="text" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">quatite en stock</label>
    <input type="number" class="form-control" name="quantite" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="ajouter" class="btn btn-primary">ajouter mon produit</button>
</form>

      </div>
    </div>
</div>
<?php 
if(isset($_POST['ajouter']))
{
    if(isset($_POST['nom']) AND isset($_POST['famille']) AND isset($_POST['periode_plantation']) AND isset($_POST['periode_recolte']) AND isset($_POST['conseils']) AND isset($_POST['image']) AND isset($_POST['quantite']))
    {
        if(!empty($_POST['nom']) AND !empty($_POST['famille']) AND !empty($_POST['periode_plantation']) AND !empty($_POST['periode_recolte']) AND !empty($_POST['conseils']) AND !empty($_POST['image']) AND !empty($_POST['quantite']))
        {
            $nom= $_POST['nom'];
            $famille= $_POST['famille'];
            $periode_plantation= $_POST['periode_plantation'];
            $periode_recolte= $_POST['periode_recolte'];
            $conseils=$_POST['conseils'];
            $image= $_POST['image'];
            $quantite= $_POST['quantite'];

            try{
                ajouter($nom, $famille, $periode_plantation, $periode_recolte, $conseils, $image, $quantite);
            }
            
            catch(exception $e)
            {
            die('Erreur : ' . $e->getMessage());
            }   

        }
    }
}


    

