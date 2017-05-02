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
<body>


<div class="container">
    <br><br><br>
    <div class="row">
        <div class="col-12">

            @component('component.module',['module' =>'incident'])
                @slot('title')
                    <i class="fa fa-bell white"></i> FORUM
                @endslot

                @slot('menu')
                    incident
                @endslot

                @slot('raccourcit')
                    raccourcit_1
                @endslot

                @slot('content')
                    @include('proto.forum.content')
                @endslot
            @endcomponent

        </div>
    </div>
</div>
</body>
</html>
