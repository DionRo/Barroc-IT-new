<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barroc-IT - @yield('title')</title>
    <link rel="stylesheet" href="/css/development/main.css">
</head>
<body>
<header>
    <div class="title space-between align-center">
        <h1>Development - @yield('title')</h1>
        <form action="#">
            <input class="logout" type="button" name="logout" value="logout">
        </form>
    </div>
    <div class="navigation space-between align-center">
        <nav>
            <ul class="space-between">
                <li><a href="/development">Home</a></li>
                <li class="no-border"><a href="/development/{}/edit">Edit</a></li>
            </ul>
        </nav>
        <form class="search" action="#">
            <input class="search-button" type="button" name="search">
            <input class="search-input" type="text" name="search" placeholder="Search...">
        </form>
    </div>
</header>

@yield ('content')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/show-info.js"></script>
</body>
</html>