<div class="row">

    {{ Form::hidden('redirect_url', request()->get('redirect_url')) }}

    <div class="col-md-12">
        {{ Form::bsText('title', trans('medias::media.title'), null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsTextarea('description', trans('medias::media.description'), null, []) }}
    </div>


    @if($entity->isImage())
        <div class="col-md-6">
            {{ Form::bsText('dominant_color', trans('medias::media.dominant_color'), null, []) }}
        </div>

        <div class="col-md-6">
            {{ Form::bsCheckbox('is_cover', $entity->getLabel('is_cover'), null, []) }}
        </div>

        <div class="col-md-6">
            {{ Form::bsCheckbox('in_carousel', $entity->getLabel('in_carousel'), null, []) }}
        </div>
    @endif


    <div class="col-md-6">
        {{ Form::bsToggle('active', $entity->getLabel('active'), ['on' => 1, 'off' => 0], null, [
            'data-on'  => 'Sim',
            'data-off' => 'Não',
        ]) }}
    </div>

</div>