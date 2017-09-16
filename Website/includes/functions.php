<?php
$errors = false;
$errorMsg = array();
$success = false;


if( isset($_POST['register']) ){

    if (strlen($_POST['username']) < 3) {
        $errors = true;
        array_push($errorMsg, "Your Username must have at least 3 characters.");
    }


    if (strlen($_POST['password']) < 6) {
        $errors = true;
        array_push($errorsMsg, "Your password must have at least 6 characters.");
    }

    if ($_POST['password'] != $_POST['password_confirm']) {
        $errors = true;
        array_push($errorsMsg, "Your passwords have to match.");
    }

    if (strpos($_POST['email'], "@") === false) {
        $errors = true;
        array_push($errorsMsg, "Please enter a valid E-mail address");
    } else {
        $emailSplit = explode("@", $_POST['email']);

        if (strpos($emailSplit[1], ".") === false) {
            $errors = true;
            array_push($errorsMsg, "Please enter a valid E-mail address");
        }
    }

    if ( $errors === false) {

        $uname = cleanString($dblink, $_POST['username']);
        $email = cleanString($dblink, $_POST['email']);

        $salt = rand(10000, 99999);
        $password = sha1($_POST['password'] . $salt) . ':' . $salt;
        $created_at = time();

        $sql = "INSERT INTO users (username, password, email, created_at, CommentUpvotes, CommentDownvotes, PostUpvotes, PostDownvotes, publicProfile, publicVotes, admin) VALUES ('$uname', '$password', '$email', '$created_at', 0, 0, 0, 0, 1, 1, 0)";
        mysqli_query($dblink, $sql);


        $_SESSION['login'] = 1;
        $_SESSION['uid'] = $row['id'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['$created_at'] = $row['created-at'];
        $_SESSION['admin'] = $row['admin'];

        header('Location: Dashboard');
    }

}

if( isset($_POST['login']) ) {

    $sql = "SELECT * FROM users WHERE username = '{$_POST['username']}' LIMIT 1";
    $res = mysqli_query($dblink, $sql);

    if (mysqli_num_rows($res) == 1) {

        $row = mysqli_fetch_assoc($res);

        $pwHash = explode(":", $row['password']);

        if (sha1($_POST['password'] . $pwHash[1]) == $pwHash[0]) {

            $_SESSION['login'] = 1;
            $_SESSION['uid'] = $row['id'];
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['$created_at'] = $row['created-at'];
            $_SESSION['admin'] = $row['admin'];

            header('Location: Dashboard');

        } else {
            $errors = true;
            array_push($errorsMsg, "Incorrect Username or Password");
        }

    } else {
        $errors = true;
        array_push($errorsMsg, "Incorrect Username or Password");
    }
}



function cleanString( $dblink, $string ){
    $string = str_replace("<!--", "", $string);
    $string = str_replace("-->", "", $string);
    $string = mysqli_real_escape_string($dblink, $string);

    return $string;
}







?>