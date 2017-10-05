<?php
//if(isset($_SESSION['username']) ) {
//    header("Location: ../index.php");
//}
if(isset($_POST['submit-login'])){
    $errMsg = '';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == '')
        $errMsg .= 'You must enter your Username';

    if($password == '')
        $errMsg .= 'You must enter your Password';


    if($errMsg == ''){
        $sql = "SELECT username,password FROM  `tbl_users` WHERE username = :username AND password = :password";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($results) >= 1){

            $_SESSION['username'] = $results[0]['username'];
            header('location:../index.php');
        }else{
            $errMsg .= 'Username and Password are not found';
        }
    }
}
?>
        <!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Barroc-IT</title>
    <meta name="description"
          content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.scss">
</head>
<body class="login">

<div class="form">
    <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="login">
            <h1>Welcome,</h1>
            <?php
            if(isset($errMsg)){
                echo '<div style="color:#FF0000;text-align:center;font-size:16px;margin: 10px;">'.$errMsg.'</div>';
            }
            if(isset($successMsg)){
                echo '<div style="color:#00ff00;text-align:center;font-size:12px;">'.$successMsg.'</div>';
            }
            ?>
            <form action="" method="post">

                <div class="field-wrap">
                    <label>
                        Username<span class="req">*</span>
                    </label>
                    <input type="text" name="username" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password" name="password" required autocomplete="off"/>
                </div>

                <p class="forgot"><a href="#">Forgot Password?</a></p>

                <input type="submit" name='submit-login' value="Log In" class='button button-block'/>

            </form>
        </div><!-- tab-content -->

    </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../assets/js/index.js"></script>