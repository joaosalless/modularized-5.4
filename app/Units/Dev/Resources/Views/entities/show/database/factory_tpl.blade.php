<pre>
<code class="php" id="factory_tpl">&lt;?php

namespace {{ $entity['reflectionClass']->getNamespaceName() }}\Database\Factories;

use {{ $entity['reflectionClass']->getNamespaceName() }}\{{ $entity['reflectionClass']->getShortName() }};
use App\Support\Database\Factory\ModelFactory;

/**
 * Class {{ $entity['reflectionClass']->getShortName() }}Factory
 * @package {{ $entity['reflectionClass']->getNamespaceName() }}
 */
class {{ $entity['reflectionClass']->getShortName() }}Factory extends ModelFactory
{
    protected $model = {{ $entity['reflectionClass']->getShortName() }}::class;

    protected function fields()
    {
    @if($entity['factoryFields'])
    return [
    @foreach($entity['factoryFields'] as $key => $col)
        '{{ $key }}' => null,
    @endforeach
    ];
    @endif}
}
</code>{{ Html::bsClipboard('factory_tpl') }}
</pre>