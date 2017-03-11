<pre>
<code class="php" id="seeder_tpl">&lt;?php

namespace {{ $entity['reflectionClass']->getNamespaceName() }}\Database\Seeders;

use Illuminate\Database\Seeder;
use {{ $entity['reflectionClass']->getNamespaceName() }}\{{ $entity['reflectionClass']->getShortName() }};

/**
 * Class {{ $entity['reflectionClass']->getShortName() }}Seeder
 * @package {{ $entity['reflectionClass']->getNamespaceName() }}
 */
class {{ $entity['reflectionClass']->getShortName() }}Seeder extends Seeder
{
    public function run()
    {

    }
}
</code>{{ Html::bsClipboard('seeder_tpl') }}
</pre>