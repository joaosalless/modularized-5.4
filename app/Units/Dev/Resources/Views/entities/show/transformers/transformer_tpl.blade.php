<pre>
<code class="php" id="transformer_tpl">&lt;?php

namespace {{ $entity['reflectionClass']->getNamespaceName() }}\Transformers;

use {{ $entity['reflectionClass']->getNamespaceName() }}\{{ $entity['reflectionClass']->getShortName() }};
use League\Fractal\TransformerAbstract;

/**
 * Class {{ $entity['reflectionClass']->getShortName() }}Transformer
 * @package {{ $entity['reflectionClass']->getNamespaceName() }}
 */
class {{ $entity['reflectionClass']->getShortName() }}Transformer extends TransformerAbstract
{
    protected $availableIncludes = [

    ];

    protected $defaultIncludes = [

    ];

    /**
     * Transform the {{ $entity['reflectionClass']->getNamespaceName() }}\{{ $entity['reflectionClass']->getShortName() }} entity
     * @param {{ $entity['reflectionClass']->getShortName() }} $model
     *
     * @return array
     */
    public function transform({{ $entity['reflectionClass']->getShortName() }} $model)
    {
        return [
    @if($entity['transformableFields'])@foreach($entity['transformableFields'] as $key => $col)
        '{{ $col }}' => $model->{{ $col }},
    @endforeach
    @endif];
    }
}
</code>{{ Html::bsClipboard('transformer_tpl') }}
</pre>