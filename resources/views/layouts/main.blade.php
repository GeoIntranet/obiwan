<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}"></script>

    <title>@yield('title')</title>
</head>
<body id="app" class="">


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 border_">
            @yield('menu')
        </div>
    </div>
</div>
<div class="container-fluid">
    <br><br><br>

    <div class="row ">
        <div class="col-1"></div>
        <div class="col-10">
            @yield('content')
        </div>
    </div>
</div>


<script type="text/javascript">

</script>
</body>
</html>
