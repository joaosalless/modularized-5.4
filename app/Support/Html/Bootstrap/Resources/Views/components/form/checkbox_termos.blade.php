<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <div class="checkbox {{ isset($attributes['class']) ? $attributes['class'] : 'checkbox-primary' }}">
        {{ Form::checkbox($name, $value, false, array_merge([
            'id'           => $name,
            'class'        => 'checkbox-primary',
            'autocomplete' => 'off',
            'placeholder'  => $label
            ], $attributes))
        }}
        <label for="{{ $name }}">{{ $label }} {{ link_to('/termos', 'Termos') }}</label>
        @if ($errors->has($name))
            <span class="help-block">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
        @endif
    </div>
</div>