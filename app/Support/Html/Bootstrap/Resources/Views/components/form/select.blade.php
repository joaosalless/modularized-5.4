<div class="form-group{{ $errors->has(str_array_dot($name)) ? ' has-error' : '' }}">
    {{ Form::bsLabel($name, $label)}}
    {{ Form::select($name, $list, $value, array_merge([
        'id'           => $name,
        'class'        => 'form-control',
        'autocomplete' => 'off',
        'placeholder'  => 'Escolher ' . $label,
        ], $attributes))
    }}
    @if ($errors->has(str_array_dot($name)))
        <span class="help-block">
            <strong>{{ $errors->first(str_array_dot($name)) }}</strong>
        </span>
    @endif
</div>