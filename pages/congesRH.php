<?php
    include('../includes/header.php');
	include('../includes/navbar.php');
   require_once("identifiant.php");
  require_once("bd.php");
  $requete="select *from conges"; // la table conges contient les conges accepter par l'administrateur 
  $resultatR=$pdo->query($requete);

  function nbjoursconsommes($conges){
      $currentDateTime = date('Y-m-d');
      $nbjoursconso = round((strtotime($currentDateTime) - strtotime($conges['date_debut']))/(60*60*24));
      if (round((strtotime($currentDateTime) - strtotime($conges['date_fin']))/(60*60*24))>0){
          echo round((strtotime($conges['date_fin']) - strtotime($conges['date_debut']))/(60*60*24)) .' jours';
      }
      else if ($nbjoursconso > "0") {
          echo $nbjoursconso .' jours';
       } 
      else {
           echo 0 .' jours';
       } 
  }
 function nbjoursrestants($conges){
     $currentDateTime = date('Y-m-d');
      $nbjoursrestants = round((strtotime($conges['date_fin']) - strtotime($currentDateTime))/(60*60*24));
     if (round((strtotime($currentDateTime) - strtotime($conges['date_debut']))/(60*60*24))<0){
          echo round((strtotime($conges['date_fin']) - strtotime($conges['date_debut']))/(60*60*24)) .' jours';
      } 
     
     else if ($nbjoursrestants > "0") {
           echo $nbjoursrestants .' jours';
       } 
      else {
           echo 0 .' jours';
       } 
  }
 function statut($conges){
     $currentDateTime = date('Y-m-d');
      $nbjoursrestants = round((strtotime($conges['date_fin']) - strtotime($currentDateTime))/(60*60*24));
      if ($nbjoursrestants > "0") {
           echo 'En cours';
       } else {
           echo 'Terminer';
       } 
  }
	?>
<link rel="stylesheet" href="../css/congesRH.css">
<section class="main">
   <div class="main-top">
      <h1>Congés</h1>
   </div>


   <section class="attendance">
      <div class="attendance-list">
         <h1>Rapport des Congés</h1>

         <table class="table">
            <thead>
               <tr>
                  <th>NOM</th>
                  <th>PRENOM</th>
                  <th>DATE DE DEBUT</th>
                  <th>DATE DE FIN</th>
                  <th>PERIODE</th>
                  <th>JOURS DE CONGE CONSOMMES</th>
                  <th>JOURS DE CONGE RESTANTS</th>
                  <th>STATUT</th>
                  <th>ACTION</th>
               </tr>

            </thead>
            <tbody>
               <?php while($conges=$resultatR->fetch()){ ?>
               <tr>
                  <td><?php echo $conges['nom'] ?></td>
                  <td><?php echo $conges['prenom'] ?></td>
                  <td><?php echo $conges['date_debut'] ?></td>
                  <td><?php echo $conges['date_fin'] ?></td>
                  <td><?php $nbjours = round((strtotime($conges['date_fin']) - strtotime($conges['date_debut']))/(60*60*24));
                echo $nbjours .' jours';?></td>
                  <td><?php  nbjoursconsommes($conges); ?></td>
                  <td><?php nbjoursrestants($conges); ?></td>
                  <td><?php statut($conges); ?></td>
                  <td> <a onclick="return confirm('Etes vous sûr de vouloir supprimer le congé')" href="supprimercongeaccepter.php?id_conge=<?php echo $conges['id_conge']?>"><button style="background-color: #FF0000;"><i class="fas fa-trash"></i></button></a></td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </section>
</section>

<?php
    include('../includes/scripts.php');
	?>