<?php
  require_once("bd.php");
  $id=$_POST['id'];
  $titre=$_POST['titre'];
  $type=$_POST['type'];
  $date=$_POST['date'];
  $heure=$_POST['heur'];

 
  $requete="update reunion set titre=?,type=?,date=?,heur=? where id=?";
  $params=array($titre,$type,$date,$heure,$id);
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
            window.location = "../pages/AddReunion.php";
             })
         </script>  

     </body></html>
