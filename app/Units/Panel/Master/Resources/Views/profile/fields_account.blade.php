
<div class="col-md-6">
    {{ Form::bsStatic('id', $entity->getLabel('id'), $entity->id, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsStatic('email', $entity->getLabel('email'), $entity->email, []) }}
</div>

{{--<div class="col-md-6">--}}
    {{--{{ Form::bsText('username', $entity->getLabel('username'), $entity->username, []) }}--}}
{{--</div>--}}