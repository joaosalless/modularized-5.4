<div class="row">

    <div class="col-md-12">
        {{ Form::bsText('title', trans('pages::category.title'), null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsText('slug', trans('pages::category.slug'), null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsTextarea('intro', trans('pages::category.intro'), null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsTextarea('body', trans('pages::category.body'), null, []) }}
    </div>


    <div class="col-md-6">
        {{ Form::bsCheckbox('active', $entity->getLabel('active'), 1, null, []) }}
    </div>

</div>