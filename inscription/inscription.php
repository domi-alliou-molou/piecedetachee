
<link href="inscription.css" rel="stylesheet">
<form action="" method="post">
  <div class="container">
    <h1>Inscription</h1>
    <center>
    <p><b>Votre inscription ne durera que 30 secondes</b></p>
    </center>

    <hr>

    <label>Nom</label>
    <input type="text" name="nom" placeholder="Nom" required>

<label>Prenom</label>
    <input type="text" name="prenom" placeholder="Prenom" required>

<label>numero</label>
    <input type="text" name="numero" placeholder="01020304" required>

<label>Mot de pass</label>
    <input type="password" name="mdp" required>

    <button type="submit" class="registerbtn" name="enregistrer">enregistrer</button>


  <div class="container signin">
    <p>Vous avez deja un compte? <a href="connexion.php">Sign in</a>.</p>
  </div>
</form>
<?php
    include'../config.php';

    if (isset($_POST['enregistrer']) &&isset($_POST['nom']) &&isset($_POST['prenom']) &&isset($_POST['numero'])
    &&isset($_POST['mdp'])) {
       $nom = addslashes($_POST['nom']);
       $prenom = addslashes($_POST['prenom']);
       $numero = addslashes($_POST['numero']);
       $mdp = md5($_POST['mdp']);
       $datepost = date('D, d M Y H:i:s');

        $CheckUser =  mysqli_query($conn, "SELECT * FROM utilisateurs WHERE numero ='$numero'");
        $rows = mysqli_num_rows($CheckUser);
        if($rows!=1){
        $array = $CheckUser->fetch_assoc();
        $insertion = mysqli_query($conn, "INSERT INTO utilisateurs (nom,prenom,numero,mdp) VALUES ('$nom','$prenom','$numero','$mdp')");
            }
        else{
  	      echo "le compte avec ce numero existe deja";
        }
    }
      
      else{
        echo 'insertion error';
    }

?>
