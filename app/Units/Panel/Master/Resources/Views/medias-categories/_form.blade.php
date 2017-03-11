<div class="row">

    <div class="col-md-12">
        {{ Form::bsText('title', trans('medias::category.title'), null, []) }}
    </div>


{{--    @if(preg_match("/create$/", request()->route()->getName()))--}}
    <div class="col-md-12">
        {{ Form::bsText('slug', trans('medias::category.slug'), null, []) }}
    </div>
    {{--@endif--}}


    <div class="col-md-12">
        {{ Form::bsTextarea('intro', trans('medias::category.intro'), null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsTextarea('body', trans('medias::category.body'), null, []) }}
    </div>


    <div class="col-md-6">
        {{ Form::bsCheckbox('active', $entity->getLabel('active'), 1, null, []) }}
    </div>

</div>