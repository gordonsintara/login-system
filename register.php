<?php
require_once 'includes/header.php';
?>


<div class="login">
    <h1>Register</h1>
    <p> Already have an account? <a href="login.php">Log in!</a></p>


    <form action="includes/register-inc.php" method = "post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirm-password" placeholder="Confirm Password">
        <input id="login-submit" type="submit" name="submit" placeholder="Submit">

    </form>

</div>



<?php
require_once 'includes/footer.php';
?>