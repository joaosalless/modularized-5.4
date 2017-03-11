<pre>
<code class="php" id="rules_tpl">&lt;?php

namespace {{ $entity['reflectionClass']->getNamespaceName() }}\Rules;

use App\Support\Rules\Rules;
use {{ $entity['reflectionClass']->getNamespaceName() }}\{{ $entity['reflectionClass']->getShortName() }};

/**
 * Class {{ $entity['reflectionClass']->getShortName() }}Rules
 * @package {{ $entity['reflectionClass']->getNamespaceName() }}
 */
class {{ $entity['reflectionClass']->getShortName() }}Rules extends Rules
{
    protected $entity = {{ $entity['reflectionClass']->getShortName() }}::class;

    public function defaultRules()
    {
    @if($entity['rules'])
    return [
    @foreach($entity['rules'] as $key => $col)
        '{{ $key }}' => '{{ $col }}',
    @endforeach
    ];
    @endif
}

    public function creating($callback = null)
    {
        return $this->returnRules([

        ], $callback);
    }

    public function updating($callback = null)
    {
        return $this->returnRules([

        ], $callback);
    }
}
</code>{{ Html::bsClipboard('rules_tpl') }}
</pre>