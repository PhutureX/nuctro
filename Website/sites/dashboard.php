<?php

if($_SESSION['login'] !== 1){
    header('Location: Frontpage');
}

$sql = "SELECT * FROM users WHERE username = '{$_SESSION['username']}'";
$res = mysqli_query($dblink, $sql);
$row = mysqli_fetch_assoc($res);

$PostPoints = $row['PostUpvotes'] - $row['PostDownvotes'];
$CommentPoints = $row['CommentUpvotes'] - $row['CommentDownvotes'];
?>


<div class="sub-header">
        <h1><a href="/"><img src="img/logo/logo_full.svg" alt="Logo"></a></h1><a href="Dashboard"><p>Dashboard</p></a>
    </div>
    <nav class="sort-nav">
        <ul>
            <li><a href="/">Nuctro</a></li>
            <li>></li>
            <li>Dashboard</li>
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
                <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
                <div class="dashboard_border">
                    You can find Statistics & Informations about your Account here.
                    <br>
                    Member since: <?php echo date('d.m.Y', $row['created_at']); ?>
                </div>
                <div class="dashboard_items">
                    <div class="dashboard_widget">
                        <h3>Post Stats</h3>
                        <p class="dashboard_widget_green">Upvotes: <span><?php echo $row['PostUpvotes']; ?></span></p>
                        <p class="dashboard_widget_red">Downvotes: <span><?php echo $row['PostDownvotes']; ?></span></p>
                        <p class="dashboard_widget_blue">Points: <span><?php echo $PostPoints; ?></span></p>
                    </div>
                    <div class="dashboard_widget">
                        <h3>Comment Stats</h3>
                        <p class="dashboard_widget_green">Upvotes: <span><?php echo $row['CommentUpvotes']; ?></span></p>
                        <p class="dashboard_widget_red">Downvotes: <span><?php echo $row['CommentDownvotes']; ?></span></p>
                        <p class="dashboard_widget_blue">Points: <span><?php echo $CommentPoints; ?></span></p>
                    </div>
                    <div class="dashboard_widget full-size">
                        <h3>Recent Upvoted Posts</h3>
                        <ul>
                            <li>
                                <div class="article">
                                    <div class="article-wrapper">
                                        <div class="votes">
                                            <a href="#" class="upvote"><i class="material-icons">arrow_drop_up</i></a>
                                            <h3>1337</h3>
                                            <a href="#" class="downvote"><i class="material-icons">arrow_drop_down</i></a>
                                        </div>
                                        <div class="thumbnail">
                                            <a href="../img/thumbnails/picture.jpg" data-lightbox="picture.jpg"><img src="../img/thumbnails/picture.jpg" alt=""></a>
                                        </div>
                                        <div class="article-content">
                                            <div class="article-title">
                                                <a href="sites/comments.html"><h2>Generic Dog Picture</h2></a>
                                            </div>
                                            <div class="article-bottom">
                                                <div class="article-info">
                                                    <p>Submittet 9hours ago in <a href="#">Subsite</a></p>
                                                    <p>by <a href="#">Username</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="article">
                                    <div class="article-wrapper">
                                        <div class="votes">
                                            <a href="#" class="upvote"><i class="material-icons">arrow_drop_up</i></a>
                                            <h3>1337</h3>
                                            <a href="#" class="downvote"><i class="material-icons">arrow_drop_down</i></a>
                                        </div>
                                        <div class="thumbnail">
                                            <a href="../sites/comments.html"><img src="../img/thumbnails/discussion_w.png" alt=""></a>
                                        </div>
                                        <div class="article-content">
                                            <div class="article-title">
                                                <a href="sites/comments.html"><h2>If all of a sudden all humans simultaneously lost the ability to sneeze, how long do you think it would take mankind as a collective to realize?</h2></a>
                                            </div>
                                            <div class="article-bottom">
                                                <div class="article-info">
                                                    <p>Submittet 9hours ago in <a href="#">Subsite</a></p>
                                                    <p>by <a href="#">Username</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="dashboard_widget full-size">
                        <h3>Recent Upvoted Comments</h3>
                        <ul>
                            <li>
                                <div class="parent">
                                    <div class="comment-wrapper">
                                        <div class="comment-votes">
                                            <a href="#" class="upvote"><i class="material-icons">arrow_drop_up</i></a>
                                            <a href="#" class="downvote"><i class="material-icons">arrow_drop_down</i></a>
                                        </div>
                                        <div class="comment-content">
                                            <a href="#">Username</a>
                                            <b>123 points</b>
                                            <i>12 hours ago</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis dolor eaque nam neque nulla, optio perferendis provident quisquam repellat, sapiente velit, vero! Dolore eos quia quibusdam quo rem suscipit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cum ipsa labore laboriosam laborum omnis velit! Accusantium aliquam cum distinctio excepturi, exercitationem expedita fuga incidunt, ipsam quasi tempore voluptas, voluptatibus?</p>
                                            <a href="#">Go to Comment ></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="parent">
                                    <div class="comment-wrapper">
                                        <div class="comment-votes">
                                            <a href="#" class="upvote"><i class="material-icons">arrow_drop_up</i></a>
                                            <a href="#" class="downvote"><i class="material-icons">arrow_drop_down</i></a>
                                        </div>
                                        <div class="comment-content">
                                            <a href="#">Username</a>
                                            <b>123 points</b>
                                            <i>12 hours ago</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis dolor eaque nam neque nulla, optio perferendis provident quisquam repellat, sapiente velit, vero! Dolore eos quia quibusdam quo rem suscipit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cum ipsa labore laboriosam laborum omnis velit! Accusantium aliquam cum distinctio excepturi, exercitationem expedita fuga incidunt, ipsam quasi tempore voluptas, voluptatibus?</p>
                                            <a href="#">Go to Comment ></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="parent">
                                    <div class="comment-wrapper">
                                        <div class="comment-votes">
                                            <a href="#" class="upvote"><i class="material-icons">arrow_drop_up</i></a>
                                            <a href="#" class="downvote"><i class="material-icons">arrow_drop_down</i></a>
                                        </div>
                                        <div class="comment-content">
                                            <a href="#">Username</a>
                                            <b>123 points</b>
                                            <i>12 hours ago</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis dolor eaque nam neque nulla, optio perferendis provident quisquam repellat, sapiente velit, vero! Dolore eos quia quibusdam quo rem suscipit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cum ipsa labore laboriosam laborum omnis velit! Accusantium aliquam cum distinctio excepturi, exercitationem expedita fuga incidunt, ipsam quasi tempore voluptas, voluptatibus?</p>
                                            <a href="#">Go to Comment ></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>