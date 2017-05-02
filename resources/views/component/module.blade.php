<div class="row module-container {!! $module !!}">

    <div class="col-md-3   module-title-menu border___ ">
        {{--TITRE colorer -----------------------------------------------------------------------------------------------------------------}}
        <div class="row module-title ">
            <div class="col-md-12 center b">
                 {{$title or 'Ton titre'}}
            </div>
        </div>
        {{-- FIN TITRE colorer--------------------------------------------------------------------------------------------------------------}}

        {{--debut MENU GAUCHE ---------------------------------------------------------------------------------------------------------------}}
        <div class="row fts_080  module-menu ">
            <div class="col-12">
                {{$menu}}
            </div>
        </div>
        {{--FIN MENU GAUCHE -------------------------------------------------------------------------------------------------------------------}}

    </div>

    {{--Bloc raccourcit + contenue -------------------------------------------------------------------------------------------------------}}
    <div class="col-sm-12 col-md-12 col-lg-9  module-raccourcit-content">

        {{--BARRE DE RACCOURCIT ------------------------------------------------------------------------------------------------------------------}}
        <div class="row module-raccourcit ">
            <div class="col-md-12">
                <div class="row">
                    <a class="col-md-1 " href=""><i class="fa fa-angle-left"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-list"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-plus-square"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-pencil"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-folder-open"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-folder"></i></a>
                    <a class="col-md-1 " href=""><i class="fa fa-bitbucket"></i></a>
                </div>
            </div>
        </div>
        {{----------------------------------------------------------------------------------------------------------------------------------------------------------}}
        <div class="row module-content">
            <div class="col-12">
                <h1>{{$content or ' ton contenu'}}</h1>
            </div>
        </div>


    </div>
    <br/>
</div>


