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
        <li class="tab active"><a id="hidden-button" href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="login">
            <h1>WELCOME @ BARROC-IT</h1>

            <form action="" method="post">
                {{csrf_field()}}
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

                <input type="submit" name='submit-login' value="Log In" class='button button-block'/>

            </form>
        </div><!-- tab-content -->

    </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>