<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barroc-IT Admin</title>
    <link rel="stylesheet" href="/css/admin/main.css">
</head>
<body>

<header>
    <div class="title space-between align-center">
        <h1>Admin</h1>
        <form action="#">
            <input class="logout" type="button" name="logout" value="logout">
        </form>
    </div>
    <div class="navigation space-between align-center">
        <nav>
            <ul class="space-between">
                <li><a href="index.blade.php">Manage Customers</a></li>
            </ul>
        </nav>
        <form class="search" action="">
            <input class="search-button" type="button" name="search">
            <input class="search-input" type="text" name="search" placeholder="Search...">
        </form>
    </div>
</header>