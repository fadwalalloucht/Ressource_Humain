<?php
include('../includes/header.php');
include('../includes/navbar.php');

  require_once("identifiant.php");
  require_once("bd.php");

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
   margin-top: 16%;

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
   height: 28rem;
   display: block;
   padding: 38px 40px;
   background: #aaa8b369;

}

.column{
   text-align: center;
   background: #cfb8de;
   padding-top: 15px;
   width:50%;
   height: 28rem;
   margin-left: 11%;
}

.info h6{
   width: 25px;
   

}

.info .row{
   display: flex;
   flex-direction: row;
}



.info .left{
   margin-left: 281px
}


.info .left-1{
   margin-left: 44%;
}



@media (max-width: 767px) {
   .container {
      flex-direction: column;
      align-items: center;
   }
   .image {
      margin-top: 0;
      width: 80px;
      height: 80px;
   }
   .info {
      width: 80%;
      padding: 20px;
   }
   .column {
      width: 80%;
      height: auto;
      margin-right: 11%;
    padding-right: 16%;
    
   }
   .info h6 {
      width: auto;
   }
   .info .left {
      margin-left: 0;
   }
   .info .left-1 {
      margin-left: 0;
   }
}

</style>





<br>

<form method="POST" action="">
   <div class="container">
      <div class="column">
         <!--<i class="fas fa-user-tie fa-7x mt-5"></i>-->
         <img class="image" src="../images/<?php echo $_SESSION['user']['photo'];?>">
         <h2 class=" font-weight-bold mt-4"><?php echo $_SESSION['user']['prenom'];?>&nbsp;<?php echo $_SESSION['user']['nom'];?></h2>
         <button style="background-color: 	#32CD32;margin-top: 30px;"><i class="fas fa-edit"></i></button>
      </div>

      <div class="info">

         <div class="title" style="">Information</div>
         <br><br>


         <div class="row">
            <div>
               <span class="details">Email:</span>
               <h6 class="text-muted"><?php echo $_SESSION['user']['Email']?></h6>
               <br>
            </div>   
            <div class="left">
               <span class="details">Téléphone:</span>
               <h6 class="text-muted"><?php echo $_SESSION['user']['Telephone']?></h6>
            </div>
         </div>

         <div class="title" style="">POSTE</div> <br>


         <div class="row">
            <div>
               <span class="details">Département:</span>
               <h6 class="text-muted"><?php echo $_SESSION['user']['Dep']?></h6>
               <br>
            </div>
            <div class="left-1">
               <span class="details">Fonction:</span>
               <h6 class="text-muted"><?php echo $_SESSION['user']['Poste']?></h6>
            </div>
         </div>
   </div>
   </div>
   </div>
</form>
</div>

<?php
include '../includes/scripts.php';
?>