<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("bd.php");
  $id=$_GET['idemp'];
  $requete2="delete from employee where idemp=$id";
  $requete3="delete from conges where idemp=$id";
  $requete4="delete from congesdemandes where idemp=$id";
  $resultat3=$pdo->prepare($requete3);
  $resultat4=$pdo->prepare($requete4);
  $resultat2=$pdo->prepare($requete2);
  $resultat2->execute();
  $resultat3->execute();
  $resultat4->execute();
  }
?>

<html>
     <body>
  
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal.fire({
         icon: 'success',
         title: 'bon travail !',
         text: 'lemployeé à été supprimé avec succé !',
         }). then(function(result){
            window.location = "../pages/ListEmploi.php";
             })
         </script>     

     </body></html>