<pre>
<code class="php blade" id="{{$provider}}_form_tpl">@if($entity['columns'])
@foreach($entity['columns'] as $key => $col)
@if($col['type'] == 'datetime' || $col['type'] == 'date' || $col['type'] == 'time')
{{{ '<div class="col-md-6">' }}}
    @{{ Form::{!! $col["formInput"] !!}('{!! $col["name"] !!}', $entity->getLabel('{!!$col["name"]!!}'), $entity->present()->{!! lcfirst(studly_case('get_'.$col['name'])) !!}, []) }}
{{{ '</div>' }}}
@elseif($col['type'] == 'boolean')
{{{ '<div class="col-md-6">' }}}
    @{{ Form::{!! $col["formInput"] !!}('{!! $col["name"] !!}', $entity->getLabel('{!!$col["name"]!!}'), 1, null, []) }}
{{{ '</div>' }}}
@else
{{{ '<div class="col-md-6">' }}}
    @{{ Form::{!! $col["formInput"] !!}('{!! $col["name"] !!}', $entity->getLabel('{!!$col["name"]!!}'), null, []) }}
{{{ '</div>' }}}
@endif

@endforeach
@endif
</code>{{ Html::bsClipboard("{$provider}_form_tpl") }}
</pre>