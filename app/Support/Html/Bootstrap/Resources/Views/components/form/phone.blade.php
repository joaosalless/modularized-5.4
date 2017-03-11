<div class="form-group{{ $errors->has(str_array_dot($name)) ? ' has-error' : '' }}">
    {{ Form::bsLabel($name, $label)}}
    {{ Form::text($name, $value, array_merge([
        'id'                => $name,
        'class'             => 'form-control',
        'autocomplete'      => 'off',
        'placeholder'       => '00 0000-0000',
        'data-mask'         => '00 000000000',
         ], $attributes))
     }}
    @if ($errors->has(str_array_dot($name)))
        <span class="help-block">
            <strong>{{ $errors->first(str_array_dot($name)) }}</strong>
        </span>
    @endif
</div>

