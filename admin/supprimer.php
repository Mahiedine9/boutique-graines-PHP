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
    <title>supprimer un produit</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    
  </head>


<div class="album py-5 bg-light">
    <div class="container">
 <form method= "post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">identite du produit</label>
    <input type="number" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="supprimer" class="btn btn-primary">supprimer le produit</button>
</form>
      </div></div></div>
    

<?php
if(isset($_POST['supprimer'])){
    if(isset($_POST['id'])){
        if(!empty($_POST['id'])){
            $id = $_POST['id'];
            try{
                supprimer($id);
            }
            catch(exception $e){
                $e->getMessage();
            }


        }
    }
}


?>