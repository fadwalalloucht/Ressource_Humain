<?php
  
  require_once("bd.php");

  $id=$_GET['idpostuler'];

  $requete="delete from postuler where idpostuler=$id";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();

  
?>

<html>
     <body>
     <html>
     <body>
     
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal.fire({
         icon: 'success',
         title: 'bon travail !',
         text: 'Votre Postulation à été supprimé avev succé !',
         }). then(function(result){
            window.location = "../pages/mesPostulaton.php";
             })
         </script>     

     </body></html>    