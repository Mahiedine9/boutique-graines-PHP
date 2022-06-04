<?php

include "cnx.php";

function ajouter($nom , $famille , $periode_plantation, $periode_recolte, $conseils, $image, $quantite)
  {
    if(require("cnx.php"))
    {
      $req =$access->prepare("INSERT INTO graines (nom, famille , periode_plantation, periode_recolte, conseils, image, quantite) VALUES ('$nom' , '$famille' , '$periode_plantation', '$periode_recolte', '$conseils', '$image', '$quantite')");
      $req->execute(array($nom ,$famille , $periode_plantation, $periode_recolte, $conseils, $image, $quantite));
      $req ->closeCursor();
    }
  }
 function afficher()
{
	if (require("cnx.php"))
	{
		$req=$access->prepare("SELECT * FROM graines" );
        $req ->execute();
        $data= $req ->fetchAll(PDO::FETCH_OBJ);
        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if (require("cnx.php"))
	{
		$req = $access->prepare("DELETE FROM graines WHERE  id=?");
		$req->execute(array($id));
		$req->closeCursor();
	}
}




?>