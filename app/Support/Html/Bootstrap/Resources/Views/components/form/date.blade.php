<div class="form-group{{ $errors->has(str_array_dot($name)) ? ' has-error' : '' }}">
    {{ Form::bsLabel($name, $label)}}
    <div class="input-group date">
        {{ Form::text($name, $value, array_merge([
            'id'               => $name,
            'class'            => 'form-control',
            'autocomplete'     => 'off',
            'placeholder'      => '00/00/0000',
            'data-mask'        => '00/00/0000',
            'data-date-format' => 'dd/mm/yyyy',
            ], $attributes))
        }}
        <span class="input-group-addon btn">
            <i class="fa fa-calendar"></i>
        </span>
    </div>
    @if ($errors->has(str_array_dot($name)))
        <span class="help-block">
            <strong>{{ $errors->first(str_array_dot($name)) }}</strong>
        </span>
    @endif
</div>