<?php 
  require_once("bd.php");
  $id = $_POST['id'];
  $fichiercv=$_FILES['cv']['name'];
  $fichierlettre=$_FILES['motivation']['name'];
  $cvExt = explode('.',$fichiercv);
  $lettreExt = explode('.',$fichierlettre);
  $cvExtActu = strtolower(end($cvExt));
  $lettreExtActu = strtolower(end($lettreExt));
  $autoriser = array('pdf','PDF');
  $niveau=$_POST['niveau'];
  $deplom=$_POST['deplome'];

if (in_array($cvExtActu, $autoriser) && in_array($lettreExtActu, $autoriser)) {
   move_uploaded_file($_FILES['cv']['tmp_name'], "../fichier/" . $_FILES['cv']['name']);
   move_uploaded_file($_FILES['motivation']['tmp_name'], "../fichier/" . $_FILES['motivation']['name']);

   $requete = "update postuler set niveau=?,deplome=?,cv=?,lettremotivation=? where idpostuler=?";
   $params = array($niveau, $deplom, $fichiercv, $fichierlettre, $id);
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
         text: 'Votre Postulation a été modifier avec succés!',
         }). then(function(result){
            window.location = "../pages/mesPostulaton.php";
             })
         </script>  

     </body></html>

     <?php }
else { ?>
   <body>
       
         <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal.fire({
         icon: 'warning',
         title: 'Erreur...',
         text: 'vous ne pouvez pas importer les fichiers de ce type, seuls les fichiers pdf sont autorisés !',
         }). then(function(result){
            window.location = "../pages/UpdatePostulation.php";
             })
         </script>  

     </body></html>  

     </body></html>
 <?php } 
?>




