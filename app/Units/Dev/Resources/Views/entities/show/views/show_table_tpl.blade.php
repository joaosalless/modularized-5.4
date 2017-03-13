<pre>
<code class="php blade" id="show_table_tpl">
{{{ '<div' }}} class="col-md-12">

    {{'@'}}include("{$panel->unitAlias()}::shared.show_table.header")

    {{{ '<table' }}} class="@{{ $panel->unitConfig()['theme']['table']['class'] }}">

        {{{ '<tbody>' }}}

    @if($entity['columns'])
    @foreach($entity['columns'] as $key => $col)
    @if($col['type'] == 'datetime' || $col['type'] == 'date' || $col['type'] == 'time')
{{ '@' }}if($entity->{!! $col['name'] !!})
            {{{ '<tr>' }}}
                {{{ '<th>' }}}
                    @{{ $entity->getLabel('{!!$col["name"]!!}') }}
                {{{ '<th>' }}}
                {{{ '<td>' }}}
                    @{{ {{{ '$entity' }}}->present()->{!! lcfirst(studly_case('get_'.$col['name'])) !!} }}
                {{{ '<td>' }}}
            {{{ '</tr>' }}}
            {{ '@' }}endif
        @elseif($col['type'] == 'text')
{{{ '<tr>' }}}
                {{{ '<th>' }}}
                    @{{ $entity->getLabel('{!!$col["name"]!!}') }}
                {{{ '<th>' }}}
                {{{ '<td>' }}}
                    @{!!  $entity->present()->{{ lcfirst(studly_case('get_'.$col['name'])) }} !!}
                {{{ '<td>' }}}
                {{{ '</tr>' }}}
        @else
{{{ '<tr>' }}}
                {{{ '<th>' }}}
                    @{{ $entity->getLabel('{!!$col["name"]!!}') }}
                {{{ '<th>' }}}
                {{{ '<td>' }}}
                    @{{ {{{ '$entity' }}}->present()->{!! lcfirst(studly_case('get_'.$col['name'])) !!} }}
                {{{ '<td>' }}}
            {{{ '</tr>' }}}
            @endif

        @endforeach
@endif{{{ '</tbody>' }}}

    {{{ '</table>' }}}

{{{ '</div>' }}}
</code>{{ Html::bsClipboard('show_table_tpl') }}
</pre>