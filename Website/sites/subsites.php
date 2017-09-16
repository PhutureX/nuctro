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
        <li>My Subsites</li>
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
            <h2>My Subsites</h2>
            <div class="dashboard_border">
                <span>sort by</span>
                <select>
                <option value="">most subscribers</option>
                <option value="">least subscribers</option>
                <option value="">most active</option>
                <option value="">least active</option>
                </select>
            </div>
            <table>
                <tr class="table_33">
                    <th>Subsite</th>
                    <th>Last Visited</th>
                    <th>Subscribers</th>
                    <th></th>
                </tr>
                <tr class="table_33">
                    <td><a href="#">Subsite 1</a></td>
                    <td>1h ago</td>
                    <td>123456</td>
                    <td><a href="#">Unsubscribe</a></td>
                </tr>
                <tr class="table_33">
                    <td><a href="#">Subsite 2</a></td>
                    <td>12h ago</td>
                    <td>12345</td>
                    <td><a href="#">Unsubscribe</a></td>
                </tr>
                <tr class="table_33">
                    <td><a href="#">Subsite 3</a></td>
                    <td>1d ago</td>
                    <td>1234</td>
                    <td><a href="#">Unsubscribe</a></td>
                </tr>
                <tr class="table_33">
                    <td><a href="#">Subsite 4</a></td>
                    <td>42d ago</td>
                    <td>123</td>
                    <td><a href="#">Unsubscribe</a></td>
                </tr>
                <tr class="table_33">
                    <td><a href="#">Subsite 5</a></td>
                    <td>1m ago</td>
                    <td>12</td>
                    <td><a href="#">Unsubscribe</a></td>
                </tr>
                <tr class="table_33">
                    <td><a href="#">Subsite 6</a></td>
                    <td>13h </td>
                    <td>1</td>
                    <td><a href="#">Unsubscribe</a></td>
                </tr>
            </table>
        </div>
    </div>
</main>



