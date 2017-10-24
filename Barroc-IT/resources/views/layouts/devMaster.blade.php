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
        <li>
            <a class="logout" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form class="logout" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </div>
    <div class="navigation space-between align-center">
        <nav>
            <ul class="space-between">
                <li><a href="/development">Home</a></li>
                <li class="no-border"><a href="/development/done">Closed Projects</a></li>
            </ul>
        </nav>
    </div>
</header>

@yield ('content')

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/show-info.js"></script>
    <footer class="align-center">
        <p>All rights reserved</p>
    </footer>

</body>
</html>
