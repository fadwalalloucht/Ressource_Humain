<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
   <meta charset="UTF-8">
   <!---<title> Responsive Registration Form | CodingLab </title>--->
   <link rel="shortcut icon" href="../images/rs.png" type="image/x-icon">
   <link rel="shortcut icon" href="../MiniProjt/images/rs.png" type="image/x-icon">
   <link rel="stylesheet" href="../css/styleinscription.css">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <div class="container">
      <div class="title">Formulaire de condidature</div>
      <div class="content">
         <form enctype="multipart/form-data" method="post" action="addadmin.php">
            <div class="user-details">
               <div class="input-box">
                  <span class="details">Nom </span>
                  <input type="text" name="nom" placeholder="Entrer votre nom " id="nom" required>
               </div>
               <div class="input-box">
                  <span class="details">Prénom</span>
                  <input type="text" name="prenom" placeholder="Entrer votre prénome" id="prenom" required>
               </div>
               <div class="input-box">
                  <span class="details">Email</span>
                  <input type="email" name="email" placeholder="Entrer votre emil" id="email" required>
               </div>
               <div class="input-box">
                  <span class="details">Téléphone</span>
                  <input type="number" name="telphone" placeholder="Entrer votre numéro" id="telphone" required>
               </div>

               <div class="input-box">
                  <span class="details">Photo</span>
                  <input type="file" name="photo" placeholder="choisir votre photo" id="photo" required
                     style="cursor: pointer;">
               </div>
               <div class="input-box">
                  <span class="details">Poste</span>
                  <input type="text" name="poste" placeholder="" id="poste" required>
               </div>
               <div class="input-box">
                  <span class="details">Departement</span>
                  <input type="text" name="deparetemant" placeholder="" id="departement" required>
               </div>
               <div class="input-box">
                  <span class="details">Mot de passe</span>
                  <input type="password" name="pasword" placeholder="" id="pasword" required>
               </div>
            </div>
            <div class="button">
               <input type="submit" value="Soumetter">
            </div>
         </form>
      </div>
   </div>

</body>

</html>