<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css"><!--already knows to look in public,css,app.css. csswe put in app.scss in sass, assets,resources, will be compiled to app.css in public when we run dev-->
</head>
<body>
@include('includes.navbar')
    <div class="container">
        @if(Request::is('/')){{--at if Request is home route then display welcome 2. will display welcome2 in home route only. not in contact and about. without @if(Request::is('/'), welcome2 contents would be displayed in about and contacts too--}}
            @include('includes.welcome2')
        @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @yield('content')
            </div>
                <div class="col-md-4 col-lg-4">
                  @include('includes.sidebar')
                </div>
        </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2020 &copy; Intro</p>
    </footer>

</body>
</html>