<div class="form-group{{ $errors->has(str_array_dot($name)) ? ' has-error' : '' }}">
    {{ Form::bsLabel($name, $label)}}
    <div>
        {{ Form::hidden($name, 0) }}
        {{ Form::checkbox($name, $value, $checked, array_merge([
        'id'           => $name,
        'class'        => 'checkbox bs-toggle',
        'autocomplete' => 'off',
        'data-toggle'  => 'toggle',
        'data-size'    => 'small',
        'data-on'      => 'On',
        'data-off'     => 'Off',
        ], $attributes))
    }}
    </div>
    @if ($errors->has(str_array_dot($name)))
        <span class="help-block">
            <strong>{{ $errors->first(str_array_dot($name)) }}</strong>
        </span>
    @endif
</div>