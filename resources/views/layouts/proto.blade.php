<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="pad-15">


<div class="container-fluid">
    <br><br><br>

    <div class="row ">
        <div class="col-1"></div>
        <div class="col-10">
            @component('component.module',['module' =>'incident'])
                @slot('title') <i class="fa fa-bell white"></i> FORUM @endslot
                @slot('menu') incident @endslot
                @slot('raccourcit')
                    <a class="col-md-1 " href=""><i class="fa fa-angle-right"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-list"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-plus-square"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-pencil"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-folder-open"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-folder"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-bitbucket"></i></a>
                @endslot
                @slot('content') @include('proto.forum.content') @endslot
            @endcomponent

        </div>
    </div>
</div>
</body>
</html>
