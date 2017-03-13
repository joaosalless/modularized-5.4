<pre>
<code class="php" id="translations_tpl">&lt;?php

/*
|----------------------------------------------------------------------------
| {{ $entity['reflectionClass']->getShortName() }} Language Lines
|----------------------------------------------------------------------------
| The following language lines are used by Class {{ $entity['reflectionClass']->getNamespaceName() }}\{{ $entity['reflectionClass']->getShortName() }}
*/

return array_merge(

    Lang::get('abstracts_entities::entity_{{ $entity['entityGender'] === 'M' ? 'male' : 'female' }}'),

    [
        'entityName'            => '{{ $entity['entityName'] }}',
        'entityNamePlural'      => '{{ $entity['entityNamePlural'] }}',
        'entityShortName'       => '{{ $entity['entityShortName'] }}',
        'entityShortNamePlural' => '{{ $entity['entityShortNamePlural'] }}',
    @if($entity['translatableFields'])
@foreach($entity['translatableFields'] as $key => $col)
    '{{ $col }}' => '{{ $entity['instance']->getLabel($col) }}',
    @endforeach
@endif
]
);
</code>{{ Html::bsClipboard('translations_tpl') }}
</pre>