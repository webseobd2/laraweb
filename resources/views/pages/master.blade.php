<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="header">
        @include('pages.partials.header')
        <div class="topnav">
            @include('pages.partials.nav')
        </div> 
    </div>

        <div class="row">
            <div class="leftcolumn">
                @yield('content')
            </div>

            <div class="rightcolumn">
                @include('pages.partials.right_sidebar')
            </div>
        </div>

    <div class="footer">
        @include('pages.partials.footer')
    </div>
</body>
</html>