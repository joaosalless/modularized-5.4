<pre>
<code class="php" id="repository_interface_tpl">&lt;?php

namespace {{ $entity['reflectionClass']->getNamespaceName() }}\Repositories;

use App\Support\Repositories\RepositoryContract;

/**
 * Interface {{ $entity['reflectionClass']->getShortName() }}Repository
 * @package {{ $entity['reflectionClass']->getNamespaceName() }}
 */
interface {{ $entity['reflectionClass']->getShortName() }}Repository extends RepositoryContract
{

}
</code>{{ Html::bsClipboard('repository_interface_tpl') }}
</pre>