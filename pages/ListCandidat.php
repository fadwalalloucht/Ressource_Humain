<?php
    include('../includes/header.php');
include('../includes/navbar.php');

  require_once("bd.php");
  $requete="select * from candidat";
  $resultatR=$pdo->query($requete);
	?>

<section class="main">
      <div class="main-top">
        <h1>Candidat</h1>
      </div>
      <div class="users">
      </div>
      <section class="attendance">
        <div class="attendance-list">
          <h1>List Des Candidats</h1>
          <table class="table">
            <thead>
              <tr>
                <th>PHOTO</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>EMAIL</th>
                <th>TELEPHONE</th>
                <th>DATE DE NAISSANCE</th>
                <th>ACTION</th>
            
                
              </tr>
            </thead>
            <tbody>
            <?php while($candidat=$resultatR->fetch()){ ?>
              <tr>
                <td><img style="width:80px;height:80px;border-radius:500px;" src="../images/<?php echo $candidat['photo']?>"/></td>
                <td><?php echo $candidat['nom'] ?></td>
                <td><?php echo $candidat['prenom'] ?></td>
                <td><?php echo $candidat['Email'] ?></td>
                <td><?php echo $candidat['Telephone'] ?></td>
                <td><?php echo $candidat['DateNaiss'] ?></td>
                <td><a onclick="return confirm('Etes vous sûr de vouloir supprimer')" href="suppcandidat.php?idcand=<?php echo $candidat['idcand'] ?>"><button style="background-color: #FF0000;"><i class="fas fa-trash"></i></button></a></td>
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
