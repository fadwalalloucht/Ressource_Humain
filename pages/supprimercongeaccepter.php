<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("bd.php");

  $id=$_GET['id_conge'];
  $requete="delete from conges where id_conge=$id";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();

  }
?>
<html>
     <body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal.fire({
          icon: "success",
          title: "bon travail !",
          text: "le congé a été supprimé avec succès!",
         }). then(function(result){
            window.location = "../pages/congesRH.php";
             })
         </script>     
     </body>
</html>