

<form action="" method="post">
  <div class="container">
    <h1>CONNEXION</h1>
    <hr>
   
<label>numero</label>
    <input type="text" name="numero" placeholder="01020304" required>

<label>Mot de pass</label>
    <input type="password" name="mdp" required>

    <button type="submit" class="registerbtn" name="login">login</button>

</form>

<?php
  include 'config.php';
  if(isset($_POST['login'])){

    $numero = addslashes($_POST ['numero']);
    $mdp = md5($_POST ['mdp']);
    $query = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE mdp='$mdp' AND numero ='$numero'");
    $rows = mysqli_num_rows($query);
          if($rows==1){
          $array = $query->fetch_assoc();
          session_start();
          $_SESSION['logged_in']= true;
          $_SESSION['id'] = $array['id'];
          $_SESSION['name'] = $array['name'];
          echo '<script language="Javascript">';
          echo 'document.location.replace("page.php")'; // -->
          echo ' </script>';
          }else{
          echo "</center>";
          echo "<font color = 'red'>";
  	      echo "Unknown user";
          echo "</font>";
          echo "<br>";
          echo "</center>";
          }

  }