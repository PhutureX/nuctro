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
        <li>Messages</li>
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
            <h2>Messages</h2>
            <nav class="message-sort">
                <ul>
                    <li><a href="#" class="nav-active">All</a></li>
                    <li>|</a></li>
                    <li><a href="#">Unread</a></li>
                    <li>|</a></li>
                    <li><a href="#">Comment Replies</a></li>
                    <li>|</a></li>
                    <li><a href="#">Post Replies</a></li>
                </ul>
            </nav>
            <div class="dashboard_border"></div>
            <div class="dashboard-message">
                <div class="dashboard-message-wrapper">
                <h3>Message Headline</h3>
                <span>from <a href="#">Username</a> <i>12 hours ago</i></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi commodi corporis dolores, exercitationem hic impedit ipsa itaque labore laborum molestias nihil odit officiis praesentium quaerat quas repellat vitae voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita id iure, non ratione rem soluta voluptatem. Commodi eveniet facere illo impedit nobis perspiciatis quae quo repudiandae rerum, sit totam, vel!</p>
                <a href="#" class="message_reply_popup_open">Reply</a>
                <a href="#">Delete</a>
                <a href="#">Report</a>
                <a href="#">Block User</a>
                </div>
            </div>
            <div class="dashboard-message">
                <div class="dashboard-message-wrapper">
                <h3>Message Headline</h3>
                <span>from <a href="#">Username</a> <i>12 hours ago</i></span>
                <p>Commodi eveniet facere illo impedit nobis perspiciatis quae quo repudiandae rerum, sit totam, vel!</p>
                <a href="#" class="message_reply_popup_open">Reply</a>
                <a href="#">Delete</a>
                <a href="#">Report</a>
                <a href="#">Block User</a>
                </div>
            </div>
            <div class="dashboard-message">
                <div class="dashboard-message-wrapper">
                <h3>Message Headline</h3>
                <span>from <a href="#">Username</a> <i>12 hours ago</i></span>
                <p>Commodi eveniet facere illo impedit nobis perspiciatis quae quo repudiandae rerum, sit totam, vel! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci corporis, dolor excepturi illum iste mollitia officiis quis sint? Ad, asperiores consequatur distinctio esse labore laboriosam nihil qui quos ratione voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto dicta enim eos est, et facere iste itaque, molestiae nobis nostrum obcaecati officiis quibusdam, rem repellendus sit sunt voluptates voluptatibus. Assumenda blanditiis cupiditate dolores enim esse expedita fugiat ipsa itaque iure laboriosam molestias neque odio optio placeat quam recusandae, sint vitae voluptate?</p>
                <a href="#" class="message_reply_popup_open">Reply</a>
                <a href="#">Delete</a>
                <a href="#">Report</a>
                <a href="#">Block User</a>
                </div>
            </div>
            <div class="dashboard-message">
                <div class="dashboard-message-wrapper">
                <h3>Message Headline</h3>
                <span>from <a href="#">Username</a> <i>12 hours ago</i></span>
                <p>Commodi eveniet facere illo impedit nobis perspiciatis quae quo repudiandae rerum, sit totam, vel!</p>
                <a href="#" class="message_reply_popup_open">Reply</a>
                <a href="#">Delete</a>
                <a href="#">Report</a>
                <a href="#">Block User</a>
                </div>
            </div>
        </div>
    </div>
</main>
