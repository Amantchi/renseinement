<?php

               $conn=mysqli_connect('localhost','root','','database') or die(mysqli_error());
                   $nom = $_POST['nom'];
                   $prenom = $_POST['prenom'];
                   $numero_de_telephone = $_POST['numéro-de-téléphone'];
                   $email = $_POST['email'];
                   $req = "INSERT INTO  `enregistrement`(`Nom`, `Prenom`, `Contacte`, `Email`) VALUES('$nom', '$prenom', '$numero_de_telephone', '$email')";
                   $res=mysqli_query($conn,$req);
                  


                 if ($conn->query($rep) === TRUE) {
                  echo "Enregistrement réussi.";
                  } else {
                  echo "Erreur : " . $req . "<br>" . $conn->error;
                  }

                    header("Location:Front.html");
                    

?>







