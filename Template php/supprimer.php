<?php
  //connexion a la base de données
  include('db.php'); // on précise a la page de run le fichier db.php avant de run ce fichier ci, il va nous connecter a la db
  if (isset($_POST['enregistrer'])) { //si l'utilisateur a cliqué sur le bouton enregistrer du formulaire HTML ci dessous
  
  
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
//récupération de l'id dans le lien


    else {
      $req = "INSERT INTO user(nom, prenom, age) VALUES(?,?,?)";
      $execute = $pdo->prepare($req);
      $stm = $execute->execute([$nom, $prenom, $age]);
      echo "<center>Inscription effectuée avec succès !</center>";
  }
}

  //requête de suppression

  //redirection vers la page index.php
