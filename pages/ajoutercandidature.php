<?php

require_once("bd.php");

  $photo=$_FILES['photo']['name'];

  $photoExt = explode('.',$photo);
  $photoExtActu = strtolower(end($photoExt));
  $autoriser = array('jpg','jpeg','png');

  $email=$_POST['email'];
  $nom=$_POST['nom'];
  $prenom = $_POST['prenom'];
  $telephone=$_POST['telphone'];
  $date=$_POST['date'];
  $sex=$_POST['sex'];
  $password=$_POST['pasword'];
   if (in_array($photoExtActu, $autoriser)) {
      move_uploaded_file($_FILES['photo']['tmp_name'], "../images/" . $_FILES['photo']['name']);

      $requete = "INSERT INTO candidat (nom,prenom,Email,photo,Telephone,DateNaiss,sex,password) VALUES (?,?,?,?,?,?,?,?)";
      $params = array($nom, $prenom, $email, $photo, $telephone, $date, $sex, $password);
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
         text: 'Votre compte est crée avec succes!',
         }). then(function(result){
            window.location = "../pages/connexion.php";
             })
         </script>     

     </body></html>
    <?php 
 }
else { ?>
     <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "warning",
          title: "Erreur !",
          text: "Voulez vous entrez tous les champs!!!!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "../pages/Frcondidat.php";
             })
         </script>     

     </body></html>
 <?php } 
?>
