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
      <form method="post"  enctype="multipart/form-data" action="ajoutercandidature.php">
            <div class="user-details">
               <div class="input-box">
                  <span class="details">Nom </span>
                  <input type="text" name="nom" placeholder="Entrer votre nom "  id="nom" required>
               </div>
               <div class="input-box">
                  <span class="details">Prénom</span>
                  <input type="text" name="prenom" placeholder="Entrer votre prénome" id="prenom" required>
               </div>
               <div class="input-box">
                  <span class="details">Photo</span>
                  <input type="file" name="photo" placeholder="choisir votre photo" id="photo" required style="cursor: pointer;">
               </div>
               <div class="input-box">
                  <span class="details">Email</span>
                  <input type="email"  name="email" placeholder="Entrer votre emil"  id="email" required>
               </div>
               <div class="input-box">
                  <span class="details">Téléphone</span>
                  <input type="number"  name="telphone" placeholder="Entrer votre numéro" id="telphone" required>
               </div>
               <div class="input-box">
                  <span class="details">Date De Naissance</span>
                  <input type="date"  name="date" placeholder="Entrer votre numéro" id="date" required>
               </div>
               <div class="input-box">
               <span class="details">sex</span>
               <select name="sex" id="sex" required>
                  <option>Femme</option>
                  <option>Homme</option>
               </select>
            </div>
               <div class="input-box">
                  <span class="details">Mot de passe</span>
                  <input type="password"  name="pasword" placeholder="**************" id="pasword"  required>
               </div>
            </div>
            <div class="button">
          <input type="submit" value="S''inscrire" style="background-color:rgba(86, 16, 157);">
        </div>
        <p style="margin-top: -3%; text-align: center;">vous avez un compte? <a href="../pages/connexion.php" style="color:rgb(86, 16, 157); cursor: pointer;">connexion</a>
         </form>
      </div>
   </div>

</body>

</html>