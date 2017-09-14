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

    //Settings Toggle
    $('.dashboard-settings-nav ul li a').click(function(){
        $('.settings-box > div').hide();
        $('.settings-box > div').eq($(this).parent().index()).show();
    });

    function changeActive(){
        $('.dashboard-settings-nav li a').removeClass('nav-active');
        $(this).addClass('nav-active');
    }

    $('.dashboard-settings-nav a').on('click', changeActive);


    //Message Navigation
    function changeActive(){
        $('.message-sort li a').removeClass('nav-active');
        $(this).addClass('nav-active');
    }

    $('.message-sort a').on('click', changeActive);


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
    function changeActive(){
        $('.sort-nav li a').removeClass('nav-active');
        $(this).addClass('nav-active');
    }

    $('.sort-nav a').on('click', changeActive);
</script>
</body>
</html>
