<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("bd.php");

  $id=$_GET['idcand'];
  $requete="delete from candidat where idcand=$id";
  $requete2="delete from postuler where idcand=$id";
  $resultat=$pdo->prepare($requete);
  $resultat2=$pdo->prepare($requete2);
  $resultat->execute();
  $resultat2->execute();

  }

?>

<html>
     <body>
  
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal.fire({
         icon: 'success',
         title: 'bon travail !',
         text: 'lemployeé a été supprimé avec succès !',
         }). then(function(result){
            window.location = "../pages/Demandeoffre.php";
             })
         </script>     

     </body></html>

