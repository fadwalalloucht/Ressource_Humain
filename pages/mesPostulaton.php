<?php
    include('../includes/header.php');
    include('../includes/navbarCandidat.php');
    require_once("bd.php");
    require_once("identifiant.php");
   $requete="select * from postuler";
   $resultat=$pdo->query($requete);
  
  
	?>

<section class="main">
      <div class="main-top">
        <h1>Postulation</h1>
      </div>
      <div class="users">
      </div>
           

      <section class="attendance">
        <div class="attendance-list">
          <h1>Mes Postulation</h1>
          <table class="table">
            <thead>
              <tr>
               <th>N°POSTE</th>
                <th>N°OFFRE</th>
                <th>DATE</th>
                <th>EMAIL</th>
                <th>NIVEAU</th>
                <th>DEPLOME</th>
                <th>CV</th>
                <th>Lettre</th>
                <th>ACTION</th>
                <th></th>
                
              </tr>
            </thead>
            <tbody>
            <?php while($postuler=$resultat->fetch()){ ?>
              <tr>
              <?php if ($postuler['idcand']==$_SESSION['user']['idcand']){?>
                <td><?php echo $postuler['idpostuler'] ?></td>
                <td><?php echo $postuler['id_off'] ?></td>
                <td><?php echo $current_date = date("Y-m-d");?></td>
                <td><?php echo $_SESSION['user']['Email'] ?></td>
                <td><?php echo $postuler['niveau'] ?></td>
                <td><?php echo $postuler['deplome'] ?></td>
                <td><?php echo $postuler['cv'] ?></td>
                <td><?php echo $postuler['lettremotivation'] ?></td>
              <td><a href="../pages/UpdatePostulation.php?idpostuler=<?php echo $postuler['idpostuler'] ?>"><button style="background-color: 	#32CD32;"><i class="fas fa-edit"></i></button></a></td>
              <td><a onclick="return confirm('Etes vous sûr de vouloir supprimer votre postulation')" href="../pages/suppPostulation.php?idpostuler=<?php echo $postuler['idpostuler']?>"><button style="background-color: #FF0000;"><i class="fas fa-trash"></i></button></a></td>
                <?php }?>
              </tr>
              <?php } ?>
            </tbody>
          </table>
         
         </div>
        </div>
        </div>
      </section>
    </section>


    
	<?php
    include('../includes/scripts.php');
	?>
