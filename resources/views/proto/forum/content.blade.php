<div class="row">
    <div class="col-12 pad-10">

        <div class="row">

            @component('component.panel',['color' =>'blue'])
                @slot('logo') fa-search @endslot
                @slot('title') Recherche sur le forum @endslot
                @slot('content') Cette page vous permet d'afficher les différents sujets qui ont été crée @endslot
            @endcomponent

        </div>

        <div class="row pad-15">
            <div class="col-12">
                <h1>TEST</h1>
                Cette page vous permet d'afficher les différents sujets qui ont été crée
            </div>
        </div>
    </div>
</div>