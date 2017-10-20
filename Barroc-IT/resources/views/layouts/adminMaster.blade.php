<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barroc-IT  - @yield('title')</title>
    <link rel="stylesheet" href="/css/admin/main.css">
</head>
<body class="divide-light">

<header>
    <div class="title space-between align-center">
        <h1>Admin - @yield('title') </h1>
        <a class="logout" href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <div class="navigation space-between align-center">
        <form class="search" action="#">
            <input class="search-button" type="button" name="search">
            <input class="search-input" type="text" name="search" placeholder="Search...">
        </form>
    </div>
</header>

@yield('content')


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/show-info.js"></script>
<footer class="flex flex-center">
    <p>All rights reserved</p>
</footer>
</body>
</html>