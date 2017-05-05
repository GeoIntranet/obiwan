
<a class="col-sm-4" href="{{route('statEnvoie')}}" data-toggle="tooltip" data-html="true" title="Vous etes sur l'acceuil du <b>Forum</b>">
    @if(isset($nameFilter))
        {{$nameFilter}}
    @else
        Acceuil
    @endif
</a>

<a class="col-sm-1"
   href="{{url()->previous()}}"
   data-toggle="tooltip"
   title="Précedent"
>
   <i class="fa fa-reply"></i>
</a>



<a class="col-sm-1"
   href="{{action('RepliesController@toggleWriteMode')}}"
   data-toggle="tooltip"
   title="Ajouter un sujet"
>
    <i class="fa fa-file"></i>
</a>

<a class="col-sm-1"
   href="{{action('RepliesController@toggleWriteMode')}}"
   data-toggle="tooltip"
   title="Reponse au sujet"
>
    <i class="fa fa-pencil"></i>
</a>

<a class="col-sm-5"
   href="{{action('locatorController@noSession')}}"
   data-toggle="tooltip"
   title="Acceuil Forum"
>
    <i class="fa fa-home"></i>
</a>
