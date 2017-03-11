<div class="form-group{{ $errors->has(str_array_dot($name)) ? ' has-error' : '' }}">
    {{ Form::bsLabel($name, $label)}}
    {{ Form::file($name, array_merge([
        'id'                => $name,
        'class'             => 'filestyle',
        'autocomplete'      => 'off',
        'data-icon'         => 'false',
        'data-buttonText'   => 'Selecionar arquivo',
        'data-buttonName'   => 'btn-default',
        'data-buttonBefore' => 'true'
        ], $attributes))
    }}
    @if ($errors->has(str_array_dot($name)))
        <span class="help-block">
            <strong>{{ $errors->first(str_array_dot($name)) }}</strong>
        </span>
    @endif
</div>