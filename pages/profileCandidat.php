<?php
include('../includes/header.php');
include('../includes/navbar.php');

  require_once("identifiant.php");
  require_once("bd.php");

  $id=$_GET['idcand'];
  $requete="select p.idpostuler, p.niveau, p.deplome, p.cv, p.lettremotivation,c.idcand,c.nom,c.prenom,c.Email,c.Telephone,c.DateNaiss,c.sex,c.photo
  from postuler p
  Join candidat c
  ON p.idcand=c.idcand
  where p.idcand =$id";
  $resultatR=$pdo->query($requete);
  $cand=$resultatR->fetch();

?>

<style>
.container {
   width: 99%;
   height: 20%;
   /* background: #cfb8de; */
   margin: 50px auto;
   border-radius: 0.3rem;
   display: flex;
   flex-direction: row;
   flex-wrap: nowrap;
   justify-content: flex-start;
   align-items: flex-start;
}

.image {
   padding: 5px;
   display: block;
   margin-left: auto;
   margin-right: auto;
   margin-top: 38%;

   flex-direction: column;
   align-items: center;
   width: 110px;
   height: 110px;
   border-radius: 500px;
   /* margin-top: 2rem; */
   background: #cfb8de;

}


.info {
   width: 50%;
   height: 38rem;
   display: block;
   padding: 38px 40px;
   background: #aaa8b369;

}
</style>

<br>

<form method="POST" action="envoyeremail.php">
 
   <div class="container">
      <div style="text-align: center;background: #cfb8de;padding-top: 15px;width:30%;height: 38rem;margin-left: 11%;">
         <!--<i class="fas fa-user-tie fa-7x mt-5"></i>-->
         <img class="image" src="../images/<?php echo $cand['photo'];?>">
         <h2 class=" font-weight-bold mt-4"><?php echo $cand['prenom'];?>&nbsp;<?php echo $cand['nom'];?></h2>
         <button style="background-color:#32CD32;margin-top: 30px;"><i class="fas fa-edit"></i></button>
      </div>

      <div class="info">

         <div class="title" style="">Information</div>
         <hr style=" width: 25px;background-color: #0ae7f4;">
       
         <br><br>


         <div style="display: flex;flex-direction: row">
            <div>
               <span class="details">Email:</span>
               <h6 class="text-muted"><?php echo $cand['Email']?></h6>
               <br>
            </div>
            <div style="margin-left: 342px;">
               <span class="details">Téléphone:</span>
               <h6 class="text-muted"><?php echo $cand['Telephone']?></h6>
            </div>
         </div>


         <div style="display: flex;flex-direction: row">
            <div>
               <span class="details">Date De Naissance:</span>
               <h6 class="text-muted"><?php echo $cand['DateNaiss']?></h6>
               <br>
            </div>
            <div style="margin-left: 291px;">
               <span class="details">Genre:</span>
               <h6 class="text-muted"><?php echo $cand['sex']?></h6>
            </div>
         </div>

        


         <div style="display: flex;flex-direction: row">
            <div>
               <span class="details">Niveau d'étude:</span>
               <h6 class="text-muted"><?php echo $cand['niveau']?></h6>
               <br>
            </div>
            <div style="margin-left: 324px;">
               <span class="details">Deplome:</span>
               <h6 class="text-muted"><?php echo $cand['deplome']?></h6>
            </div>
         </div>

         <br>
         <h4 class="title">DOCUMENT ATTACHÉ</h4>
         <br>
         <div style="display: flex;flex-direction: row">
            <div>
               <span class="details">cv:</span>
               <h6 class="text-muted"><?php echo $cand['cv'];?></h6>
               <a href="telechargementcv.php?idpostuler=<?php echo $cand['idpostuler'];?>"><i class='bx bx-download'
                     title="download" style="font-size: 177%;"></i></a>
               <br>
            </div>
            <div style="margin-left: 300px;">
               <span class="details">Lettre de Motivation:</span>
               <h6 class="text-muted"><?php echo $cand['lettremotivation'];?></h6>
               <a href="telechargementlettre.php?idpostuler=<?php echo $cand['idpostuler'];?>"><i class='bx bx-download'
                     title="download" style="font-size: 177%;"></i></a>
            </div>
         </div>



         <div class="button">
           <a href="../emailconfirmation.php?id=<?php  echo $cand['idcand'];?>"> <input type="submit" value="Envoyer un email de confirmation"
               style="background-color:rgba(86, 16, 157,0.6);">
         </div>

      </div>
   </div>
   </div>
   </div>
</form>

</div>