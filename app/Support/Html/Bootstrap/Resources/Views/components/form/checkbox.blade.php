<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <div class="checkbox {{ isset($attributes['class']) ? $attributes['class'] : 'checkbox-primary' }}">
        {{ Form::hidden($name, 0) }}
        {{ Form::checkbox($name, $value, $checked, array_merge([
            'id'           => $name,
            'class'        => '',
            'autocomplete' => 'off',
            'placeholder'  => $label
            ], $attributes))
        }}
        <label for="{{ $name }}">{{ $label }}</label>
        @if ($errors->has($name))
            <span class="help-block">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
        @endif
    </div>
</div>