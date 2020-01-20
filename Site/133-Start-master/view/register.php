<?php
/**
 * ${PROJET_NAME} - register.php
 *
 * Auhor: Dylan.BERNEY
 * Vers:1.0
 * Date: 20.01.2020 14:05
 */
ob_start();
?>
<form action="index.php?action=register" method="post">

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="emailRegister" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="passwordRegister" required>

        <button type="submit">register</button>

        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
    </div>
</form>

<?php
$content = ob_get_clean();
require "gabari.php";
?>