<?php
    include('../includes/header.php');
include('../includes/navbar.php');
require_once("identifiant.php");
require_once("bd.php");
$requete="select *from congesdemandes";
$resultatR=$pdo->query($requete);
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
                  <th>TYPE DE CONGE</th>
                  <th>ACTION</th>
               </tr>

            </thead>
            <tbody>
               <?php while($congesdemandes=$resultatR->fetch()){ ?>
               <tr>
                  <td><?php echo $congesdemandes['nom'] ?></td>
                  <td><?php echo $congesdemandes['prenom'] ?></td>
                  <td><?php echo $congesdemandes['datedebut'] ?></td>
                  <td><?php echo $congesdemandes['datefin'] ?></td>
                  <td><?php $nbjours = round((strtotime($congesdemandes['datefin']) - strtotime($congesdemandes['datedebut']))/(60*60*24));
                echo $nbjours .' jours';?></td>
                  <td><?php echo $congesdemandes['typeconge'] ?></td>
                  <td> <a href="accepterconge.php?idemp=<?php echo $congesdemandes['idemp']?>"><button style="background-color: #3CB371;"><i class="fas fa-chevron-circle-down"></i></button></a>
                  <a href="refuserconge.php?idemp=<?php echo $congesdemandes['idemp']?>">  <button style="background-color: #FF0000;"><i class="fas fa-trash"></i></button></a>
                  </td>
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