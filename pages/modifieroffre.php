<?php 
  require_once("bd.php");
  $id=$_POST['id']; 
  $titre=$_POST['titre'];
  $poste=$_POST['poste'];
  $description = $_POST['description'];
  $date=$_POST['date'];
  $niveau=$_POST['niveau'];
  $deplome=$_POST['deplome'];
  $experience=$_POST['expe'];
  $photo=$_FILES['photo']['name'];
  move_uploaded_file($_FILES['photo']['tmp_name'], "../images/" . $_FILES['photo']['name']);
  $requete="update offre set photo=?,titre=?,poste=?,description=?,deplome=?,date=?,niveau=?,experience=? where id_off=?";
  $params=array($photo,$titre,$poste,$description,$deplome,$date,$niveau,$experience,$id);
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
         text: 'Votre offre a été modifier avec succés!',
         }). then(function(result){
            window.location = "../pages/ListOffer.php";
             })
         </script>  

     </body></html>

