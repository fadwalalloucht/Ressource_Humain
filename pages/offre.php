<?php

require_once("bd.php");

  $photo=$_FILES['photo']['name'];

  $photoExt = explode('.',$photo);
  $photoExtActu = strtolower(end($photoExt));
  $autoriser = array('jpg','jpeg','png');

  $titre=$_POST['titre'];
  $poste=$_POST['poste'];
  $description = $_POST['description'];
  $date=$_POST['date'];
  $niveau=$_POST['niveau'];
  $deplome=$_POST['deplome'];
  $experience=$_POST['expe'];
   if (in_array($photoExtActu, $autoriser)) {
      move_uploaded_file($_FILES['photo']['tmp_name'], "../images/" . $_FILES['photo']['name']);
      $requete = "INSERT INTO offre (photo,titre,poste,description,deplome,date,niveau,experience) VALUES (?,?,?,?,?,?,?,?)";
      $params = array($photo, $titre, $poste, $description, $deplome, $date, $niveau, $experience);
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
         text: 'Votre offre est ajouter avec succes!',
         }). then(function(result){
            window.location = "../pages/ListOffer.php";
             })
         </script>     

     </body></html>
     <?php }
else { ?>
     <html>
     <body>
     
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal({
          icon: "warning",
          title: "Erreur !",
          text: "vous ne pouvez pas importer les fichiers de ce type, seuls les fichiers pdf sont autorisés !",
         }). then(function(result){
            window.location = "candidature.php.php";
             })
         </script>     

     </body></html>
 <?php } 
?>

