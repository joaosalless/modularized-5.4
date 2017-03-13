<div class="row">

    <div class="col-md-12">
        {{ Form::bsText('title', $entity->getLabel('title'), null, []) }}
    </div>

    <div class="col-md-12">
        {{ Form::bsText('slug', $entity->getLabel('slug'), null, []) }}
    </div>

    <div class="col-md-12">
        {{ Form::bsTextarea('intro', $entity->getLabel('intro'), null, []) }}
    </div>

    <div class="col-md-12">
        {{ Form::bsTextarea('body', $entity->getLabel('body'), null, []) }}
    </div>

    <div class="col-md-12">
        {{ Form::bsCheckbox('active', $entity->getLabel('active'), 1, null, []) }}
    </div>

</div>