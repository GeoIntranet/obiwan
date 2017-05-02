<div class="row">
    <div class="col-12">
        <div class="row">
            @component('component.panel',['extra' =>'extra'])

                @slot('title')
                    Title
                @endslot

                @slot('content')
                    Content
                @endslot

            @endcomponent
        </div>
    </div>
</div>