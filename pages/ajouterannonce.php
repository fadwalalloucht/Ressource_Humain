<?php

require_once("bd.php");
  $titre=$_POST['titre'];
  $description=$_POST['description'];

      $requete = "INSERT INTO annocement (titre,contenu) VALUES (?,?)";
      $params = array($titre,$description);
      $resultat = $pdo->prepare($requete);
      $resultat->execute($params);
 ?>
 <html>
     <body>
     
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal.fire({
         icon: 'success',
         title: 'bon travail !',
         text: 'Votre annonce est ajouter avec succés!',
         }). then(function(result){
            window.location = "../pages/annonce.php";
             })
         </script>     

     </body></html>
  

