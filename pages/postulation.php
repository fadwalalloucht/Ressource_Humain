<?php

require_once("bd.php");
require_once("identifiant.php");

  $fichiercv=$_FILES['cv']['name'];
  $fichierlettre=$_FILES['motivation']['name'];
  $cvExt = explode('.',$fichiercv);
  $lettreExt = explode('.',$fichierlettre);
  $cvExtActu = strtolower(end($cvExt));
  $lettreExtActu = strtolower(end($lettreExt));
  $autoriser = array('pdf','PDF');
  $niveau=$_POST['niveau'];
  $deplom=$_POST['deplome'];
  $id=$_SESSION['user']['idcand'];
  $idoff = $_POST['offre'];

  
  
 if (in_array($cvExtActu,$autoriser) && in_array($lettreExtActu,$autoriser) ){
      move_uploaded_file($_FILES['cv']['tmp_name'],"../fichier/".$_FILES['cv']['name']);
      move_uploaded_file($_FILES['motivation']['tmp_name'],"../fichier/".$_FILES['motivation']['name']);
     
      $requete="INSERT INTO postuler (niveau,deplome,cv,lettremotivation,idcand,id_off) VALUES (?,?,?,?,?,?)";
      $params=array($niveau,$deplom,$fichiercv,$fichierlettre,$id,$idoff);
      $resultat=$pdo->prepare($requete);
      $resultat->execute($params);   
      ?>
<html>

<body>

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
   swal({
      icon: "success",
      title: "bon travail !",
      text: " Félicitations ! Merci d'avoir soumis votre candidature ..!",
      showConfirmButton: true,
      confirmButtonText: "Cerrar",
      closeOnConfirm: false
   }).then(function(result) {
      window.location = "../pages/posteOffre.php";
   })
   </script>

</body>

</html>
<?php }
else { ?>
<html>

<body>

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
   swal({
      icon: "warning",
      title: "Erreur !",
      text: "vous ne pouvez pas importer les fichiers de ce type, seuls les fichiers pdf sont autorisés !",
      showConfirmButton: true,
      confirmButtonText: "Cerrar",
      closeOnConfirm: false
   }).then(function(result) {
      window.location = "../pages/";
   })
   </script>

</body>

</html>
<?php } 
?>