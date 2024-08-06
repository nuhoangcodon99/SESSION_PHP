<?php
    session_start();
?>
<div class="login-form">
    <form method="post">
        <span>Email:</span> <input type="email" name="email" require>
        <span>Password:<span> <input type="password" name="pass" require>
        <input type="submit" name="login" style="font-size: 1.1em;margin-left: 0px;background-color: #659b4c;" value="Se connecter">
    </form>
        <?php
        if (isset($_POST['login'])) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['pass'] = $_POST['pass'];
            header("location: showSession.php");
        } 
        ?>
</div>
