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
  $dep=$_POST['deparetemant'];
  $password=$_POST['pasword'];
   if (in_array($photoExtActu, $autoriser)) {
      move_uploaded_file($_FILES['photo']['tmp_name'], "../images/" . $_FILES['photo']['name']);

      $requete = "INSERT INTO admin (photo,nom,prenom,Email,Password,Poste,Dep,Telephone) VALUES (?,?,?,?,?,?,?,?)";
      $params = array($photo, $nom, $prenom, $email, $password, $poste, $dep, $telephone);
      $resultat = $pdo->prepare($requete);
      echo $_POST['pasword'];
      $resultat->execute($params);
 ?>
 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "  Félicitations, votre compte est créé, mais temporairement inactif jusqu'à son activation par l'administrateur !",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "../pages/index.php";
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
          text: "vous ne pouvez pas importer les fichiers de ce type!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "../Acceuil.php";
             })
         </script>     

     </body></html>
 <?php } 
?>
