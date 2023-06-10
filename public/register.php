<!-- // require head here  -->
<?php require_once "components/register_login/head.php" ?>

<div>
    <form id="registrationForm" action="../controllers/user.php" method="POST">

        <input type="text" placeholder="Name" name="name" id="name">
        <p id="name_empty" style="font-size:12px; color:red; margin:0px;"></p>

        <input type="email" placeholder="Email" name="email" id="email">
        <p id="email_empty" style="font-size:12px; color:red; margin:0px;"></p>

        <input type="password" placeholder="Password" name="password" id="password">
        <p id="password_empty" style="font-size:12px; color:red; margin:0px;"></p>

        <input type="password" placeholder="Confirm Password" name="confirm-password" id="confirm_password">
        <p id="Cpassword_empty" style="font-size:12px; color:red; margin:0px;"></p>
        <p>I have an account ? <span><a href="login.php">Login</a></span></p>

        <button type="submit" id="submit" value="submit" onclick="validation(event)">Register</button>

    </form>
</div>

<!-- // require foot here  -->
<?php require_once "components/register_login/foot.php" ?>

<!-- // form validation js -->
<script src="js/register_validation.js"></script>

