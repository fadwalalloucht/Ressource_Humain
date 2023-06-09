<?php
  require_once("bd.php");
  $id=$_POST['id'];
  $titre=$_POST['titre'];
  $description=$_POST['description'];
 
  $requete="update annocement set titre=?,contenu=? where id=?";
  $params=array($titre,$description,$id);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);

?>
 <html>
     <body>
     
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal.fire({
         icon: 'success',
         title: 'bon travail !',
         text: 'La réunion est modifier avec succes!',
         }). then(function(result){
            window.location = "../pages/annonce.php";
             })
         </script>  

     </body></html>
