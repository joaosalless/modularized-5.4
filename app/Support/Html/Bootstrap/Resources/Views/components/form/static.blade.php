<div class="form-group">
    <label class="control-label">{{ $label }}</label>
    <p class="form-control-static">{{ $value }}</p>
    {{ Form::hidden($name, $value) }}
</div>