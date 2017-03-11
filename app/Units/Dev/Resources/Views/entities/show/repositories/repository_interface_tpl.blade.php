<pre>
<code class="php" id="repository_interface_tpl">&lt;?php

namespace {{ $entity['reflectionClass']->getNamespaceName() }}\Repositories;

/**
 * Interface {{ $entity['reflectionClass']->getShortName() }}Repository
 * @package {{ $entity['reflectionClass']->getNamespaceName() }}
 */
interface {{ $entity['reflectionClass']->getShortName() }}Repository
{

}
</code>{{ Html::bsClipboard('repository_interface_tpl') }}
</pre>