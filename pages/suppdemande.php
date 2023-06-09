<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("bd.php");

  $id=$_GET['idpostuler'];
  $requete="delete from postuler where idpostuler=$id";
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
         text: 'Demande à été supprimé avec succés !',
         }). then(function(result){
            window.location = "../pages/Demandeoffre.php";
             })
         </script>     

     </body></html>
