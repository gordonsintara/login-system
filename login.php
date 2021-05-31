<?php
require_once 'includes/header.php';
?>


<div class="login">
    <h1>  Log in</h1>
    <p> Not registered? <a href="register.php">Sign Up Now!</a></p>


    <form action="" method = "post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input id="login-submit" type="submit" name="submit" placeholder="Submit">

    </form>

</div>



<?php
require_once 'includes/footer.php';
?>