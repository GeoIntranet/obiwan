@extends('layouts.main')


@section('title')
    Forum
@stop


@section('menu')
    {{--@include('menu.navigation')--}}
    <h1>MENU</h1>
@stop

@section('content')
@php $color = 'white'; @endphp
    @component('component.module',['module' =>'forum'])

        @slot('title') <i class="fa fa-book"></i> Forum @endslot

        @slot('menu') 
            @include('forum.menu.menu')
        @endslot
        
        @slot('raccourcit')
            @include('forum.raccourcit.raccourcit')
        @endslot
        
        @slot('content')
            {{--RESUME EXPLICATIF DES DONNEES AFFICHER SUR LA PAGE--------------------------------------------------------------------------------------------------------}}
            @component('component.panel',['color' =>'blue'])

                @slot('title')
                    forum
                @endslot
                @slot('logo')
                    fa-book
                @endslot
                @slot('content')
                    Cette page vous permet d'afficher les différents sujets qui ont été crée.
                @endslot

            @endcomponent
            {{----------------------------------------------------------------------------------------------------------------------------------------------------------}}

            {!! Form::open(['action' => 'locatorController@postCatalogue', 'method' => 'post']) !!}
            <div class="row">
                <div class="col">
                    @if(session()->has('error_catalogue'))
                        <span class="red b ">{{session()->get('error_catalogue')}}</span>
                    @endif
                </div>
            </div>

            <div class="row ">
                <div class="col-md-10">
                    {!! Form::text('filtre', old('filtre'), ['class' => 'form-control locatorInput']) !!}
                </div>
                <div class="col-md-2 col-sm-2">
                    {!! Form::submit('Recherche', ['class' => "form-controle btn btn-primary $color"]) !!}
                </div>
            </div>
            {!! Form::close() !!}

            <hr>

            <br>

            @foreach($threads as $thread)
                <div class="row  pad10 align-middle">
                    <?php
                    $ico = $thread->createur->USER_icone;
                    $url = url("imgs/trombinoscope/32x32/$ico");
                    ?>

                    <div class=" col-md-1 center">
                        <img class="forum_avatar" src={{$url}} />
                    </div>
                    <div class=" col-md-9 ">
                        <div class="row">
                            <div class="">
                                <a href="{{action('ThreadController@show',[$thread->channel_id,$thread->id])}}">{{$thread->title}}</a>
                            </div>
                        </div>
                        <div class="row fts_080 ">
                            <div class="">
                                par {{userName($thread->createur->USER_id,'noID')}} - {{$thread->created_at->diffForHumans()}}
                            </div>
                        </div>
                        <div class="row padl10 fts_080">
                            <div class="  ">
                                <?php
                                $body = Golonka\BBCode\Facades\BBCodeParser::parse($thread->body);
                                $body = deleteBrPlus($body);
                                $body = strip_tags ($body);
                                $body = htmlspecialchars ($body);
                                $body = substr( $body,0,60);

                                ?>
                                {!! $body !!}...


                            </div>
                        </div>

                    </div>

                    <div class=' col-md-2 b fts_060 ' >
                        <span class="fa-stack fa-3x fts_200 ">
                          <i class="fa fa-square fa-stack-2x text-primary" ></i>
                          <strong class="fa-stack-1x fts_075 text-white" >{{$thread->replies_count}}</strong>
                       </span>
                    </div>
                </div>
                <hr class="emp">
                @endforeach
                </div>
        @endslot

    @endcomponent
    <br/>

@stop