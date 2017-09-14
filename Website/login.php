<!-- Login Popup -->
<div id="login_popup">
    <div class="form-box">
        <div class="box-close"><a href="#" class="login_popup_close"><i class="material-icons">close</i></a></div>
        <div class="register-col">
            <h2>Register</h2>
            <form class="" action="index.php" method="post">
                <input type="text" name="RegisterUsername" placeholder="Choose Username">
                <input type="password" name="RegisterPassword" placeholder="Password">
                <input type="password" name="RegisterPasswordConfirm" placeholder="Verify Password">
                <input type="email" name="RegisterEmail" placeholder="E-Mail">
                <div class="Checkbox-Container">
                    <input type="checkbox" id="Register-Save-Login">
                    <label for="Register-Save-Login">I agree with the <a href="#">Terms & Conditions</a>.</label>
                </div>
                <div class="Checkbox-Container">
                    <input type="checkbox" id="Register-Newsletter">
                    <label for="Register-Newsletter">Send me updates</label>
                </div>
                <input type="submit" value="Register">
            </form>
        </div>
        <div class="login-col">
            <h2>Login</h2>
            <form class="" action="index.php" method="post">
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <div class="Checkbox-Container">
                    <input type="checkbox" id="Login-Save-Login">
                    <label for="Login-Save-Login">Stay logged in</label>
                </div>
                <a href="#">Reset Password</a>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</div>