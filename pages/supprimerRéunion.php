<?php
  
  require_once("bd.php");

  $id=$_GET['id'];

  $requete="delete from reunion where id=$id";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();

  
?>

<html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "la réunion a été supprimé avec succès ! ",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "../pages/AddReunion.php";
             })
         </script>     

     </body></html>