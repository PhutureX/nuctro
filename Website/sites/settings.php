<?php

if($_SESSION['login'] !== 1){
    header('Location: Frontpage');
}

?>

<div class="sub-header">
    <h1><a href="../index.php"><img src="../img/logo/logo_full.svg" alt="Logo"></a></h1><a href="Dashboard"><p>Dashboard</p></a>
</div>
<nav class="sort-nav">
    <ul>
        <li><a href="/">Nuctro</a></li>
        <li>></li>
        <li><a href="Dashboard">Dashboard</a></li>
        <li>></li>
        <li>Settings</li>
    </ul>
</nav>
<main>
    <div id="dashboard_menu">
        <a href="Dashboard"><i class="material-icons">home</i><span>Home</span></a>
        <a href="MySubsites"><i class="material-icons">forum</i><span>My Subsites</span></a>
        <a href="Friends"><i class="material-icons">supervisor_account</i><span>Friends</span></a>
        <a href="Messages"><i class="material-icons">chat_bubble</i><span>Messages</span></a>
        <a href="Settings"><i class="material-icons">settings</i><span>Settings</span></a>
        <a href="../logout.php"><i class="material-icons">power_settings_new</i><span>Logout</span></a>
    </div>
    <div class="dashboard_content">
        <div class="dashboard_wrapper">
            <h2>Settings</h2>
            <div class="dashboard_border"></div>
            <nav class="dashboard-settings-nav">
                <ul>
                    <li><a href="#" class="nav-active"><i class="material-icons nav">account_box</i><span>Profile</span></a></li>
                    <li><a href="#"><i class="material-icons">color_lens</i><span>Theme</span></a></li>
                    <li><a href="#"><i class="material-icons">comment</i><span>Site Options</span></a></li>
                    <li><a href="#"><i class="material-icons">report_problem</i><span>Report a Problem</span></a></li>
                    <li><a href="#"><i class="material-icons">delete_forever</i><span>Deactivate Account</span></a></li>
                </ul>
            </nav>
            <div class="settings-box">
                <div class="settings-profile">
                    <div class="settings">
                        <form action="#">
                            <h3>Change Username</h3>
                            <input type="text" value="CurrentUsername" required>
                            <h3>Change Email</h3>
                            <input type="text" value="current@email.com">
                            <h3>Change Password</h3>
                            <label for="current-pw">Current Password*</label>
                            <input type="password" id="current-pw" required>
                            <label for="new-pw">New Password</label>
                            <input type="password" id="new-pw">
                            <input type="submit" value="Save Changes">
                            <p>*Required</p>
                        </form>
                    </div>
                </div>
                <div class="settings-theme">
                    <div class="settings">
                        <form action="#">
                            <h2>Change Theme</h2>
                            <input type="radio" value="normal" name="theme-color" id="theme-color-normal" checked>
                            <label for="theme-color-normal">Normal Theme</label>
                            <br>
                            <input type="radio" value="dark" name="theme-color" id="theme-color-dark">
                            <label for="theme-color-dark">Dark Theme</label>
                            <input type="submit" value="Change Theme">
                        </form>
                    </div>
                </div>
                <div class="settings-site">
                    <div class="settings">
                        <form action="#">
                            <h2>Site Options</h2>
                            <hr>
                            <h3>Media Options</h3>
                            <input type="checkbox" id="show_thumbnails_posts" checked> <label for="show_thumbnails_posts">Show thumbnails in posts</label> <br>
                            <input type="checkbox" id="show_thumbnails_comments" checked> <label for="show_thumbnails_comments">Show thumbnails in comments</label> <br>
                            <input type="checkbox" id="hide_nswf" checked> <label for="hide_nswf">Hide thumbnails for NSFW content</label>
                            <h3>Link Options</h3>
                            <input type="checkbox" id="show_links_upvote"> <label for="show_links_upvote">Don't show links after I upvoted them</label> <br>
                            <input type="checkbox" id="show_links_downvote"> <label for="show_links_downvote">Don't show links after I downvoted them</label> <br>
                            <p>display <select>
                                <option selected>10</option>
                                <option>25</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                                submission at once.
                            </p>
                            <h3>Comment Options</h3>
                            <p>sort comments by:
                                <select>
                                    <option selected>best</option>
                                    <option>new</option>
                                    <option>old</option>
                                </select>
                            </p>
                            <p>display
                                <select>
                                    <option>15</option>
                                    <option selected>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                    <option>250</option>
                                    <option>500</option>
                                </select>
                                comments at once.
                            </p>
                            <h3>Message Options</h3>
                            <input type="checkbox" id="message_admin"><label for="message_admin">Only Admins can message me</label> <br>
                            <input type="checkbox" id="mark_read" checked><label for="mark_read">Mark messages as read when I open my inbox</label><br>
                            <input type="checkbox" id="notify_mention"><label for="notify_mention">Notify me when my username gets mentioned</label>
                            <h3>Privacy Options</h3>
                            <input type="checkbox" id="profile_public" checked><label for="profile_public">Make my profile public</label> <br>
                            <input type="checkbox" id="votes_public" checked><label for="votes_public">Make my votes public</label>
                            <input type="submit" value="Save Changes">
                        </form>
                    </div>
                </div>
                <div class="settings-problem">
                    <div class="settings">
                        <form action="#">
                            <h2>Report a Problem</h2>
                            <select>
                                <option value="general">General Problem</option>
                                <option value="technical">Technical Problem</option>
                                <option value="bug">Report a Bug</option>
                                <option value="other">Other Problem</option>
                            </select>
                            <label for="problem-email" class="block_label">E-Mail*</label>
                            <input type="email" id="problem-email">
                            <label for="problem-subject" class="block_label">Subject*</label>
                            <input type="text" id="problem-subject">
                            <label for="problem-message" class="block_label">Message*</label>
                            <textarea id="problem-message"></textarea>
                            <input type="submit" value="Submit">
                            <p>*Required</p>
                        </form>
                    </div>
                </div>
                <div class="settings-deactivate">
                    <div class="settings">
                        <form action="#">
                            <h2>Deactivate Account</h2>
                            <p><b>WARNING!</b> Deactivating your account will not delete the content of posts and comments you've made on Nuctro. To do so, please delete them individually.</p>
                            <p>Deactivated accounts are not recoverable!</p>
                            <input type="submit" value="Deactivate Account">
                            <input type="checkbox" id="deactivate-confirm">
                            <label for="deactivate-confirm">I agree to deactivate my account & understand that it is not recoverable.</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
