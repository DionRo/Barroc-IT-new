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
                <li><a href="/sales">Customers</a></li>
                <li><a href="/sales/create">Add Customers</a></li>
                <li class="no-border"><a href="/sales/{}/edit">Edit Customers</a></li>
            </ul>
        </nav>

        @yield('content')

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="/js/show-info.js"></script>
        <footer class="align-center">
            <p>All rights reserved</p>
        </footer>

</body>
</html>