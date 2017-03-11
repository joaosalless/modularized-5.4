<div class="row">

    <div class="col-md-12">
        {{ Form::bsText('name', $entity->getLabel('name'), null, []) }}
    </div>


    <div class="col-md-6">
        {{ Form::bsText('email', $entity->getLabel('email'), null, []) }}
    </div>


    <div class="col-md-6">
        {{ Form::bsText('phone', $entity->getLabel('phone'), null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsTextarea('reply_message_site', $entity->getLabel('reply_message_site'), null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsTextarea('reply_message_email', $entity->getLabel('reply_message_email'), null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsTextarea('intro', $entity->getLabel('intro'), null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsTextarea('body', $entity->getLabel('body'), null, []) }}
    </div>


    {{--<div class="col-md-6">--}}
        {{--{{ Form::bsToggle('auto_reply', $entity->getLabel('auto_reply'), 1, null, [--}}
            {{--'data-on'  => 'Sim',--}}
            {{--'data-off' => 'Não',--}}
        {{--]) }}--}}
    {{--</div>--}}

    <div class="col-md-6">
        {{ Form::bsCheckbox('auto_reply', $entity->getLabel('auto_reply'), 1, null, []) }}
    </div>


    {{--<div class="col-md-6">--}}
        {{--{{ Form::bsToggle('save_messages', $entity->getLabel('save_messages'), 1, null, [--}}
            {{--'data-on'  => 'Sim',--}}
            {{--'data-off' => 'Não',--}}
        {{--]) }}--}}
    {{--</div>--}}

    <div class="col-md-6">
        {{ Form::bsCheckbox('save_messages', $entity->getLabel('save_messages'), 1, null, []) }}
    </div>


    <div class="col-md-6">
        {{ Form::bsCheckbox('active', $entity->getLabel('active'), 1, null, []) }}
    </div>

</div>