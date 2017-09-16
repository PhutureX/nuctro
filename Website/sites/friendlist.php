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
        <li>Friends</li>
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
            <h2>Friendlist</h2>
            <div class="dashboard_border">
                <span>sort by</span>
                <select>
                <option value="">Name</option>
                <option value="">Last Activity</option>
                <option value="">Post Points</option>
                <option value="">Comment Points</option>
                </select>
            </div>
            <table>
                <tr class="table_25">
                    <th>Name</th>
                    <th>Last Activity</th>
                    <th>Post Points</th>
                    <th>Comment Points</th>
                    <th></th>
                </tr>
                <tr class="table_25">
                    <td><a href="#">User 1</a></td>
                    <td>1h ago</td>
                    <td>123</td>
                    <td>123456</td>
                    <td><a href="#">Unfriend</a></td>
                </tr>
                <tr class="table_25">
                    <td><a href="#">User 1</a></td>
                    <td>1h ago</td>
                    <td>123</td>
                    <td>123456</td>
                    <td><a href="#">Unfriend</a></td>
                </tr>
                <tr class="table_25">
                    <td><a href="#">User 1</a></td>
                    <td>1h ago</td>
                    <td>123</td>
                    <td>123456</td>
                    <td><a href="#">Unfriend</a></td>
                </tr>
                <tr class="table_25">
                    <td><a href="#">User 1</a></td>
                    <td>1h ago</td>
                    <td>123</td>
                    <td>123456</td>
                    <td><a href="#">Unfriend</a></td>
                </tr>
                <tr class="table_25">
                    <td><a href="#">User 1</a></td>
                    <td>1h ago</td>
                    <td>123</td>
                    <td>123456</td>
                    <td><a href="#">Unfriend</a></td>
                </tr>
                <tr class="table_25">
                    <td><a href="#">User 1</a></td>
                    <td>1h ago</td>
                    <td>123</td>
                    <td>123456</td>
                    <td><a href="#">Unfriend</a></td>
                </tr>
            </table>
        </div>
    </div>
</main>