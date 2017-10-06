<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barroc-IT Sales</title>
    <link rel="stylesheet" href="/css/sales/main.css">
</head>
<body>

<header>
    <div class="title space-between align-center">
        <h1>Sales</h1>
        <form action="#">
            <input class="logout" type="button" name="logout" value="logout">
        </form>
    </div>
    <div class="navigation space-between align-center">
        <nav>
            <ul class="space-between">
                <li><a href="../customers/">Customers</a></li>
                <li><a href="../add_customers/">Add Customers</a></li>
                <li class="no-border"><a href="../edit_customers/">Edit Customers</a></li>
            </ul>
        </nav>
        <?php
        $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

        if ($url !== 'http://localhost/School/Baroc-IT/App/Application/Public/sales/add_customers/index.blade.php') {
            echo '<form class="search" action="">
            <input class="search-button" type="button" name="search">
            <input class="search-input" type="text" name="search" placeholder="Search...">
        </form>';
        }
        else{

        }
        ?>
    </div>
</header>