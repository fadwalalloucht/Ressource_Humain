<?php
include '../includes/header.php';
include '../includes/navbar.php';
require_once("bd.php");
require_once("identifiant.php");
$requete="select * from employee";
$resultatR2=$pdo->query($requete);
$resultatR1=$pdo->query($requete);
?>
<section class="main">

   <div class="main-top">
      <h1>Employées</h1>
   </div>
   <div class="users">
   <?php while($employe=$resultatR1->fetch()){ ?>
        <div class="card">
          <img src="../images/<?php echo $employe['photo']?>">
          <h4><?php echo $employe['nom'] ?>&nbsp;<?php echo $employe['prenom'] ?></h4>
          <p><?php echo $employe['poste'] ?></p>
          <p><?php echo $employe['email'] ?><p>
          <p><?php echo $employe['telephone'] ?></p>
   
        </div>
  <?php } ?>
   </div>
   <section class="attendance">
      <div class="attendance-list">
         <table class="table">
            <thead>
               <tr>
                  <th>PHOTO</th>
                  <th>NOM</th>
                  <th>PRENOM</th>
                  <th>POSTE</th>
                  <th>EMAIL</th>
                  <th>TELEPHONE</th>
                  <th>DEPARETEMENT</th>
                  <th>ACTION</th>
                  
               </tr>
            </thead>
            <tbody>
               <?php while($employe=$resultatR2->fetch()){ ?>
               <tr>
                  <td><img style="width:80px;height:80px;border-radius:500px;"src="../images/<?php echo $employe['photo']?>" /></td>
                  <td><?php echo $employe['nom'] ?></td>
                  <td><?php echo $employe['prenom'] ?></td>
                  <td><?php echo $employe['poste'] ?></td>
                  <td><?php echo $employe['email'] ?><td>
                  <?php echo $employe['telephone'] ?>
                  <td><?php echo $employe['deparetement']?></td>
                  <td>
                     <a href="../pages/UpdateEmployee.php?idemp=<?php echo $employe['idemp']?>">
                        <button style="background-color: 	#32CD32;"><i class="fas fa-edit"></i></button></a>
                  
                  <a onclick="return confirm('Etes vous sûr de vouloir supprimer')" href="../pages/supprimerEmployer.php?idemp=<?php echo $employe['idemp']?>"><button
                            style="background-color: #FF0000;"><i class="fas fa-trash"></i></button></a>
                  </td>
               </tr>   
               <?php } ?>
            </tbody>
         </table>
      </div>
   </section>
</section>








<?php
include '../includes/scripts.php';
?>