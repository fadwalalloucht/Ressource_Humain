<?php
  require_once("identifiant.php");
  require_once("bd.php");
  $dateC=$_POST['datenow'];
  $datedebut=$_POST['dateDebut'];
  $datefin=$_POST['dateFin'];
  $typeconge=$_POST['type'];
  $nom=$_SESSION['user']['nom'];
  $prenom=$_SESSION['user']['prenom'];
  $id=$_SESSION['user']['idemp'];
  $periode= round((strtotime($datefin) - strtotime($datedebut))/(60*60*24));
  $requete="INSERT INTO congesdemandes (idconge,datecreation,periode,datedebut,datefin,typeconge,nom,prenom,idemp) VALUES (NULL,'$dateC','$periode','$datedebut','$datefin','$typeconge','$nom','$prenom',$id)";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();




?>
 <html>
     <body>
     
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal.fire({
         icon: 'success',
         title: '"damande envoyé !"',
         text: 'votre demande sera examiné le plutôt possible!',
         }). then(function(result){
            window.location = "../pages/demandeConger.php";
             })
         </script>     

     </body></html>