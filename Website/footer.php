<!-- Login Popup -->
<div id="login_popup">
    <?php
    if($errors === true){
        foreach ($errorMsg as $error){
            echo "<p>$error</p>";
        }
    }
    ?>
    <div class="form-box">
        <div class="box-close"><a href="#" class="login_popup_close"><i class="material-icons">close</i></a></div>
        <div class="register-col">
            <h2>Register</h2>
            <form class="" action="" method="post" enctype="multipart/form-data">
                <input type="text" name="username" id="username" placeholder="Choose Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="password" name="password_confirm" id="password_confirm" placeholder="Verify Password">
                <input type="email" name="email" id="email" placeholder="E-Mail">
                <div class="Checkbox-Container">
                    <input type="checkbox" id="Register-Save-Login">
                    <label for="Register-Save-Login">I agree with the <a href="#">Terms & Conditions</a>.</label>
                </div>
                <div class="Checkbox-Container">
                    <input type="checkbox" id="Register-Newsletter">
                    <label for="Register-Newsletter">Send me updates</label>
                </div>
                <input type="submit" value="Register" name="register" id="register">
            </form>
        </div>
        <div class="login-col">
            <?php
            if($errors === true){
                foreach ($errorMsg as $error){
                    echo "<p>$error</p>";
                }
            }
            ?>
            <h2>Login</h2>
            <form class="" action="#" method="post" enctype="multipart/form-data">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <div class="Checkbox-Container">
                    <input type="checkbox" id="Login-Save-Login">
                    <label for="Login-Save-Login">Stay logged in</label>
                </div>
                <a href="#">Reset Password</a>
                <input type="submit" value="Login" name="login" id="login">
            </form>
        </div>
    </div>
</div>

<!-- Post Popup -->
<div id="post_popup">
    <div class="post-form-box">
        <div class="box-close"><a href="#" class="post_popup_close"><i class="material-icons">close</i></a></div>
        <div class="post-form-box-header">
            <h2>Submit to <a href="#">Subsite</a></h2>
            <h3>as: Username</h3>
        </div>
        <hr>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="post_title">Title*</label>
            <input type="text" id="post_title" placeholder="Max 150 characters" required>
            <label for="post_url">URL</label>
            <input type="text" id="post_url">
            <label for="file_upload">File Upload</label>
            <input type="file" name="files" id="file_upload" required>
            <label for="post_text">Text</label>
            <textarea name="post-text" id="post_text" placeholder="Describe your post..."></textarea>
            <label for="post_subsite">Choose Subsite*</label>
            <input type="text" id="post_subsite" required>
            <label for="post_replies">Options</label>
            <div class="Checkbox-Container">
                <input type="checkbox" id="post_replies">
                <label for="post_replies">Send replies to my inbox</label>
            </div>
            <p>Note: Please be mindful of nuctro's <a href="#">rules</a> before submitting</p>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>

<!-- Reply Popup -->
<div id="reply_popup">
    <div class="reply-box">
        <div class="box-close"><a href="#" class="reply_popup_close"><i class="material-icons">close</i></a></div>
        <div class="parent">
            <div class="comment-wrapper">
                <div class="comment-content">
                    <a href="#">Username</a>
                    <b>123 points</b>
                    <i>12 hours ago</i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis dolor eaque nam neque nulla, optio perferendis provident quisquam repellat, sapiente velit, vero! Dolore eos quia quibusdam quo rem suscipit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cum ipsa labore laboriosam laborum omnis velit! Accusantium aliquam cum distinctio excepturi, exercitationem expedita fuga incidunt, ipsam quasi tempore voluptas, voluptatibus?</p>
                </div>
            </div>
        </div>
        <div class="comments-form">
            <form action="#">
                <textarea id="post_reply" placeholder="Write a Reply..." autofocus></textarea>
                <div class="comments-form-bottom">
                    <p>Note: Please be mindful of nuctro's <a href="#">rules</a> before you submit your comment!</p>
                    <button type="submit" id="reply-post-btn" class="post-btn">Reply</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Message Reply Popup -->
<div id="message_reply_popup">
    <div class="reply-box">
        <div class="box-close"><a href="#" class="message_reply_popup_close"><i class="material-icons">close</i></a></div>
        <div class="dashboard-message">
            <h3>Message Headline</h3>
            <span>from <a href="#">Username</a> <i>12 hours ago</i></span>
            <p>Commodi eveniet facere illo impedit nobis perspiciatis quae quo repudiandae rerum, sit totam, vel!</p>
        </div>
        <form action="#">
            <input type="text" placeholder="Subject" id="message_reply_subject">
            <textarea id="post_reply" placeholder="Message..."></textarea>
            <div class="comments-form-bottom">
                <button type="submit" id="reply-post-btn" class="post-btn">Reply</button>
            </div>
        </form>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="footer-item">
        <a href="#"><img src="img/logo/logo.svg" alt="Logo"></a>
    </div>
    <div class="footer-item">
        <h2>About Nuctro</h2>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Careers</a></li>
        </ul>
    </div>
    <div class="footer-item">
        <h2>Need Help?</h2>
        <ul>
            <li><a href="#">Rules</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Guidelines</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    <div class="footer-item">
        <h2>Social</h2>
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">YouTube</a></li>
        </ul>
    </div>
</footer>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
<!-- Popup Plugin -->
<script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script>
<!-- Fileuploader Plugin -->
<script src="libraries/Fileuploader/jquery.fileuploader.min.js" type="text/javascript"></script>
<!-- Lightbox Plugin -->
<script src="libraries/lightbox/js/lightbox.min.js"></script>
<script>

    //Login Popup
    $(document).ready(function() {
        $('#login_popup').popup({
            transition: 'all 0.3s',
            scrolllock: true
        });
    });

    //Create Post Popup
    $(document).ready(function() {
        $('#post_popup').popup({
            transition: 'all 0.3s',
            scrolllock: true
        });
    });

    //Comment Reply Popup
    $(document).ready(function() {
        $('#reply_popup').popup({
            transition: 'all 0.3s',
            scrolllock: true
        });
    });

    //Message Reply Popup
    $(document).ready(function() {
        $('#message_reply_popup').popup({
            transition: 'all 0.3s',
            scrolllock: true
        });
    });


    //Fileuploader Library Settings
    $('input[name="files"]').fileuploader({
        limit: 1,
        maxSize: 15,
        extensions: ['jpg', 'jpeg', 'png', 'bmp', 'gif', 'svg', 'avi', 'mp4']
    });

    //Open Sidebar
    function openSidebar() {
        document.getElementById("sidebar").style.width = "85%";
    }

    //Close Sidebar
    function closeSidebar() {
        document.getElementById("sidebar").style.width = "0px";
    }

    //Open Mobile Menu
    function openMobileMenu() {
        document.getElementById("mobile_menu").style.width = "75%";
    }

    //Close Mobile Menu
    function closeMobileMenu() {
        document.getElementById("mobile_menu").style.width = "0";
    }

    //Sort Nav Toggle
    $('.sort-nav ul li a').click(function(){
        $('.top-select').hide();
    });

    $('#sort-nav-top').click(function(){
        $('.top-select').show();
    });


    //Sort Nav Change Active
    function changeActiveSort(){
        $('.sort-nav li a').removeClass('nav-active');
        $(this).addClass('nav-active');
    }

    $('.sort-nav li a').on('click', changeActiveSort);

    //Message Navigation
    function changeActiveMsg(){
        $('.message-sort li a').removeClass('nav-active');
        $(this).addClass('nav-active');
    }

    $('.message-sort li a').on('click', changeActiveMsg);


    //Settings Toggle
    $('.dashboard-settings-nav ul li a').click(function(){
        $('.settings-box > div').hide();
        $('.settings-box > div').eq($(this).parent().index()).show();
    });

    function changeActiveSettings(){
        $('.dashboard-settings-nav li a').removeClass('nav-active');
        $(this).addClass('nav-active');
    }

    $('.dashboard-settings-nav a').on('click', changeActiveSettings);
</script>
</body>
</html>

