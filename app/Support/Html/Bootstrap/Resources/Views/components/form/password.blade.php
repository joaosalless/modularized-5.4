<div class="form-group{{ $errors->has(str_array_dot($name)) ? ' has-error' : '' }}">
    {{ Form::bsLabel($name, $label)}}
    <div class="input-group">
        {{ Form::password($name, array_merge([
            'id'          => $name,
            'class'       => 'form-control password',
            'placeholder' => $label
            ], $attributes))
        }}
        <span class="input-group-addon btn showHidePasswordBtn">
            <i class="fa fa-eye showHidePasswordIcon"></i>
        </span>
    </div>
    @if ($errors->has(str_array_dot($name)))
        <span class="help-block">
            <strong>{{ $errors->first(str_array_dot($name)) }}</strong>
        </span>
    @endif
</div>

@section('scripts')
    <script>
        $('.showHidePasswordBtn').click(function(e) {
            e.preventDefault();
            if ($(".password").prop("type") == "password") {
                $('.container').find('input:password').prop({
                    type: "text"
                }).addClass("changed-input-type");
                $(".container").find(".showHidePasswordIcon")
                    .addClass("fa-eye-slash")
                    .removeClass("fa-eye");
            } else {
                $('.container').find('.changed-input-type').prop({
                    type: "password"
                }).removeClass("changed-input-type");
                $(".container").find(".showHidePasswordIcon")
                    .removeClass("fa-eye-slash")
                    .addClass("fa-eye");
            }
        });
    </script>
@endsection