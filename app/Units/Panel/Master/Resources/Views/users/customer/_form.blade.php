<div class="row">

    @if($entity->id)
    <div class="col-md-6">
        {{ Form::bsStatic('id', $entity->getLabel('id'), $entity->id, []) }}
    </div>
    @endif

    <div class="col-md-6">
        {{ Form::bsEmail('email', $entity->getLabel('email'), null, []) }}
    </div>

    <div class="col-md-6">
        {{ Form::bsText('username', $entity->getLabel('username'), null, []) }}
    </div>

    <div class="col-md-6">
        {{ Form::bsSelect('profile_type', $entity->getLabel('profile_type'), $entity->getProfileTypes(), null, []) }}
    </div>

    <div class="col-md-6">
        {{ Form::bsText('role', $entity->getLabel('role'), null, []) }}
    </div>

    <div class="col-md-6">
        {{ Form::bsText('status', $entity->getLabel('status'), null, []) }}
    </div>

    @if($entity->isPerson())
        @include("{$panel->unitAlias()}::profile.fields_person")
    @endif

    @if($entity->isCompany())
        @include("{$panel->unitAlias()}::profile.fields_company")
    @endif

    {{ Form::bsEndereco('profile') }}

    <div class="col-md-3">
        {{ Form::bsCheckbox('active', $entity->getLabel('active'), 1, null, []) }}
    </div>

</div>
