<div class="form-group{{ $errors->has(str_array_dot($name)) ? ' has-error' : '' }}">
    {{ Form::bsLabel($name, $label)}}
    <div class="input-group time">
        {{ Form::text($name, $value, array_merge([
            'id'           => $name,
            'class'        => 'form-control',
            'autocomplete' => 'off',
            'placeholder'  => '00:00:00',
            'data-mask'    => '00:00:00',
            ], $attributes))
        }}
        <span class="input-group-addon">
            <i class="fa fa-clock-o"></i>
        </span>
    </div>
    @if ($errors->has(str_array_dot($name)))
        <span class="help-block">
            <strong>{{ $errors->first(str_array_dot($name)) }}</strong>
        </span>
    @endif
</div>