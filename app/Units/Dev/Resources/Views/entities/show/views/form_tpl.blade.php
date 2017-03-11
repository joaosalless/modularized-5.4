<pre>
<code class="php blade" id="form_tpl">
@if($entity['columns'])
@foreach($entity['columns'] as $key => $col)
{{{ '<div class="col-md-6">' }}}
    @{{ Form::{!! $col["formInput"] !!}('{!! $col["name"] !!}', $entity->getLabel('{!!$col["name"]!!}'), null, []) }}
{{{ '</div>' }}}

@endforeach
@endif
</code>{{ Html::bsClipboard('form_tpl') }}
</pre>