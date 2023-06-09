<?php 
  require_once("identifiant.php");
  require_once("bd.php");
  $id=$_POST['id'];  
  $nom=$_POST['nom'];
 $prenom=$_POST['prenom'];
 $poste=$_POST['poste'];
 $email=$_POST['email'];
 $telephone=$_POST['telephone'];
 $departement = $_POST['departement'];
 
  $requete="update employee set nom=?,prenom=?,email=?,deparetement=?,poste=?,telephone=? where idemp=?";
  $params=array($nom,$prenom,$email,$departement,$poste,$telephone,$id);
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
         text: 'Les informations est modifier avec succes!',
         }). then(function(result){
            window.location = "../pages/ListEmploi.php";
             })
         </script>  


     

     </body></html>