<?php
 require_once("identifiant.php");
 include('../includes/header.php');
 include('../includes/navbarEmployer.php');
 require_once("bd.php");
 $requete="select * from congesdemandes";
 $resultat=$pdo->query($requete);

 ?>

<section class="main">
   <div class="main-top">
      <h1>Mes Congés</h1>
   </div>
   <div class="users">
   </div>


   <section class="attendance">
      <div class="attendance-list">
         <h1>Congé</h1>
         <button class="btn" id="updateButton"><i class="far fa-calendar-plus"></i>Demander un Congé</button>
         <!-- The modal -->
         <div id="updateModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content" style="width: 57%;">

               <div class="container">
                  <div class="title">Demander un Congé</div>
                  <div class="content">
                     <form method="post" enctype="multipart/form-data" action="ajouterconge.php">
                        <span class="close" style="margin-top: -8%;">&times;</span>
                        <div class="user-details">
                           <div class="input-box">
                              <span class="details">Créé Le</span>
                              <input type="date" name="datenow" placeholder="Entrer datenow" required>
                           </div>
                           <div class="input-box">
                              <span class="details">Date de Début</span>
                              <input type="date" name="dateDebut" placeholder="Entrer Type" required>
                           </div>
                           <div class="input-box">
                              <span class="details">Date de Fin</span>
                              <input type="date" name="dateFin" placeholder="" required>
                           </div>

                           <div class="input-box">
                              <span class="details" for="nivau">Type de congé</span>
                              <select name="type" required>
                                 <option>congé de formation individuelle</option>
                                 <option>congé annuel</option>
                                 <option>congé parental</option>
                                 <option>congé de maladie</option>
                                 <option>congé non payé</option>
                              </select>
                           </div>
                        </div>
                        <div class="button">
                           <input type="button" value="Annuler" name="annuler"
                              style="width: 50%;float: right;margin-top:0%; background-color:rgb(255, 0, 0);" onclick="location.href='demandeConger.php'" >
                           <input type="submit" value="Ajouter" style="width:49%; background-color:rgb(60, 179, 113) ;">
                        </div>
                     </form>
                  </div>

               </div>
            </div>
         </div>




         <table class="table">
            <thead>
               <tr>
                  <th>DATE DE DEBUT</th>
                  <th>DATE DE FIN</th>
                  <th>PERIODE</th>
                  <th>Type de Conges</th>


               </tr>
            </thead>
            <tbody>
            <?php while($congesdemandes=$resultat->fetch()){ ?>
               <tr>
                  <?php if ($congesdemandes['idemp']==$_SESSION['user']['idemp']){?>
                  <td><?php echo $congesdemandes['datedebut'] ?></td>
                  <td><?php echo $congesdemandes['datefin'] ?></td>
                  <td><?php echo $congesdemandes['periode'] ?></td>
                  <td><?php echo $congesdemandes['typeconge'] ?></td>
                  <?php }?>
             
               </tr>
               <?php }?>
              
            </tbody>
         </table>
      </div>
   </section>
</section>



<?php
    include('../includes/scripts.php');
	?>