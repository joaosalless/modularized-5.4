<div class="form-group{{ $errors->has(str_array_dot($name)) ? ' has-error' : '' }}">
    {{ Form::bsLabel($name, $label)}}
    <div class="input-group">
        {{ Form::text($name, $value, array_merge([
             'id'           => $name,
             'class'        => 'form-control',
             'autocomplete' => 'off',
             'placeholder'  => '00000-000',
             'data-mask'    => '00000-000',
             'data-mask-reverse' => 'true',
             ], $attributes))
         }}
        <span class="input-group-addon btn">
            <i class="fa fa-search"></i>
        </span>
    </div>
    @if ($errors->has(str_array_dot($name)))
        <span class="help-block">
            <strong>{{ $errors->first(str_array_dot($name)) }}</strong>
        </span>
    @endif
</div>

