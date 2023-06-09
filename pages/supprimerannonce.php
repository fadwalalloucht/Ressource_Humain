<?php
  
  require_once("bd.php");

  $id=$_GET['id'];

  $requete="delete from annocement where id=$id";
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
         text: 'Lannonce à été supprimé avev succé !',
         }). then(function(result){
            window.location = "../pages/annonce.php";
             })
         </script>     

     </body></html>