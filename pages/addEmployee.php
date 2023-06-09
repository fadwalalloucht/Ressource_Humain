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
  $poste=$_POST['poste'];
  $date = $_POST['dateNaiss'];
  $dep=$_POST['deparetemant'];
  $password=$_POST['pasword'];
   if (in_array($photoExtActu, $autoriser)) {
      move_uploaded_file($_FILES['photo']['tmp_name'], "../images/" . $_FILES['photo']['name']);

      $requete = "INSERT INTO employee (nom,prenom,dateNaiss,email,deparetement,poste,telephone,photo,password) VALUES (?,?,?,?,?,?,?,?,?)";
      $params = array($nom, $prenom, $date, $email, $dep, $poste, $telephone, $photo,$password);
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
         text: 'Lemployee est ajouter avec succés!',
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
     
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal({
          icon: "warning",
          title: "Erreur !",
          text: "vous ne pouvez pas importer les fichiers de ce type!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "../pages/inscriptionEmployee.php";
             })
         </script>     

     </body></html>
 <?php } 
?>
