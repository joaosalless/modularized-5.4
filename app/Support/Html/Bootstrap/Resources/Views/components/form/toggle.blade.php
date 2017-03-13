<div class="form-group{{ $errors->has(str_array_dot($name)) ? ' has-error' : '' }}">
    {{ Form::bsLabel($name, $label)}}
    <div>
        {{ Form::hidden($name, $value['off']) }}
        {{ Form::checkbox($name, $value['on'], $checked, array_merge([
        'id'            => $name,
        'class'         => 'checkbox bs-toggle',
        'autocomplete'  => 'off',
        'data-toggle'   => 'toggle',
        'data-size'     => 'small',
        'data-on'       => 'On',
        'data-off'      => 'Off',
        'data-onstyle'  => 'primary',
        'data-offstyle' => 'primary',
        ], $attributes))
    }}
    </div>
    @if ($errors->has(str_array_dot($name)))
        <span class="help-block">
            <strong>{{ $errors->first(str_array_dot($name)) }}</strong>
        </span>
    @endif
</div>

@section('scripts')
    <script>
        $('.bs-toggle')
            .bootstrapToggle()
            .change(function() {
                    $(this).val($(this).prop('checked') ? '{{ $value['on'] }}' : '{{ $value['off'] }}');
                }
            );
    </script>
@endsection