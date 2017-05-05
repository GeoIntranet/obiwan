<div class="row module-container {!! $module !!}">

    <div class="col-sm-12 col-lg-2 col-md-12 hidden-lg-down   module-title-menu border___ ">
        {{--TITRE colorer -----------------------------------------------------------------------------------------------------------------}}
        <div class="row module-title ">
            <div class="col-md-12 center b">
                 {{$title or 'Ton titre'}}
            </div>
        </div>
        {{-- FIN TITRE colorer--------------------------------------------------------------------------------------------------------------}}

        {{--debut MENU GAUCHE ---------------------------------------------------------------------------------------------------------------}}
        <div class="row  module-menu ">
            <div class="col-12">
                {{$menu}}
            </div>
        </div>
        {{--FIN MENU GAUCHE -------------------------------------------------------------------------------------------------------------------}}

    </div>

    {{--Bloc raccourcit + contenue -------------------------------------------------------------------------------------------------------}}
    <div class="col-sm-12 col-md-10 col-lg-10  module-raccourcit-content">

        {{--BARRE DE RACCOURCIT ------------------------------------------------------------------------------------------------------------------}}
        <div class="row module-raccourcit ">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <div class="row">
                    {{$raccourcit}}
                </div>
            </div>
        </div>
        {{----------------------------------------------------------------------------------------------------------------------------------------------------------}}
        <div class="row module-content">
            <div class="col-12">
                {{$content or ' ton contenu'}}
            </div>
        </div>
    </div>
    <br/>
</div>


