<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("bd.php");
  $id=$_GET['id_off'];
  $requete="delete from offre where id_off=$id";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();

  }
?>
<html>
     <body>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal.fire({
         icon: 'success',
         title: 'bon travail !',
         text: 'Offre à été supprimé avec succé !',
         }). then(function(result){
            window.location = "../pages/ListOffer.php";
             })
         </script>     
     </body></html>