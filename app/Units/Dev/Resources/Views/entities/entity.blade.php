
<code>
@if($entity['fillable'])
<span class="class_visibility">protected</span> <span class="class_field">$fillable</span> = [
@foreach($entity['fillable'] as $key => $col)
    '{{ $col }}',
@endforeach
];
@endif

<span class="class_visibility">protected</span> <span class="class_field">$dates</span> = [
@foreach($entity['dates'] as $key => $col)
    '{{ $col }}',
@endforeach
];

<span class="class_visibility">protected</span> <span class="class_field">$rules</span> = [
@foreach($entity['rules'] as $key => $col)
    '{{ $key }}' => '{{ $col }}',
@endforeach
];

<span class="class_visibility">protected</span> <span class="class_field">$searchable</span> = [
@foreach($entity['searchable'] as $key => $col)
    '{{ $key }}' => '{{ $col }}',
@endforeach
];

<span class="class_visibility">$transformer</span> <span class="class_field">return</span> = [
@foreach($entity['columns'] as $key => $col)
    '{{ $key }}' => $model->{{ $key }},
@endforeach
];

@foreach($entity['columns'] as $key => $col)
<code>
{{{ '<div class="col-md-6">' }}}
    @{{ Form::{!! $col["formInput"] !!}('{!! $col["name"] !!}', trans('{!!$entity['entityDomainAlias']!!}::{!!$entity['entityTranslationKey']!!}.{!!$col["name"]!!}'), null, []) }}
{{{ '</div>' }}}
</code>
@endforeach

@foreach($entity['columns'] as $key => $col)
<code>
{{{ '<tr>' }}}
    {{{ '<th>' }}}
        @{{ trans('{!!$entity['entityDomainAlias']!!}::{!!$entity['entityTranslationKey']!!}.{!!$col["name"]!!}') }}
    {{{ '<th>' }}}
    {{{ '<td>' }}}
        @{{ {{{ '$entity' }}}->{!! $col['name'] !!} }}
    {{{ '<td>' }}}
{{{ '</tr>' }}}
</code>
@endforeach
</code>