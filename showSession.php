<?php
    session_start();
?>
<div>
    <div>Show resultat</div>
        <?php
           if (isset($_SESSION['email']) && isset($_SESSION['pass'])) {
            echo ("Email: ". $_SESSION['email']);
            echo ("Votre pass". $_SESSION['pass']);
        }  else {
            echo "Session n'existe pas!";
        }
        ?>
        <a href="index.php">Acceuil</a>
        <a href="deleteSession.php">Delete Session </a>
</div>
