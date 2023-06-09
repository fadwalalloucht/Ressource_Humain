<?php
  require_once("bd.php");
  $titre=$_POST['titre'];
  $type=$_POST['type'];
  $debutdereunion=$_POST['date'];
  $heure=$_POST['heur'];
 
  $requete="INSERT INTO reunion (titre, type, date, heur) VALUES (?,?, ?,?)";
  $params=array($titre,$type,$debutdereunion,$heure);
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
         text: 'Réunion est ajouter avec succés!',
         }). then(function(result){
            window.location = "../pages/AddReunion.php";
             })
         </script>     

     </body></html>