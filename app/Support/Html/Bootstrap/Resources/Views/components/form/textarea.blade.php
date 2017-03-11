<div class="form-group{{ $errors->has(str_array_dot($name)) ? ' has-error' : '' }}">
    {{ Form::bsLabel($name, $label)}}
    {{ Form::textarea($name, $value, array_merge([
        'id'           => $name,
        'class'        => 'form-control textarea',
        'autocomplete' => 'off',
        'rows'         => '3',
        'placeholder'  => $label
        ], $attributes))
    }}
    @if ($errors->has(str_array_dot($name)))
        <span class="help-block">
            <strong>{{ $errors->first(str_array_dot($name)) }}</strong>
        </span>
    @endif
</div>