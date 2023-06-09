<?php
 require_once("identifiant.php");
 include('../includes/header.php');
 include('../includes/navbarEmployer.php');
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
     if ($nbjoursrestants > "0") {
          echo $nbjoursrestants .' jours';
      } else {
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

<section class="main">
   <div class="main-top">
      <h1>Mes Congés</h1>
   </div>
   <div class="users">
   </div>


   <section class="attendance">
      <div class="attendance-list">
         <table class="table">
            <thead>
               <tr>
               <th>DATE DE DEBUT</th>
            <th>DATE DE FIN</th>
            <th>PERIODE</th>
            <th>JOURS DE CONGE CONSOMMES</th>
            <th>JOURS DE CONGE RESTANTS</th>
            <th>STATUT</th>
               </tr>


            </thead>
            <tbody>
             <?php while($conges=$resultatR->fetch()){ ?>
            <tr class=lignecolor>
            <?php if ($conges['idemp']==$_SESSION['user']['idemp']){?>
            <td ><?php echo $conges['date_debut'] ?></td>
            <td ><?php echo $conges['date_fin'] ?></td>
            <td ><?php $nbjours = round((strtotime($conges['date_fin']) - strtotime($conges['date_debut']))/(60*60*24));
                echo $nbjours .' jours';?></td>
            <td ><?php  nbjoursconsommes($conges); ?></td>
            <td ><?php nbjoursrestants($conges); ?></td>
            <td ><?php statut($conges); ?></td>
            <?php } ?>
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