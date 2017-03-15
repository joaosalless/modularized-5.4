<pre>
<code class="php" id="{{ $provider }}_controller_api_tpl">&lt;?php

namespace {{ panel()->getNamespace($provider) }}\Http\Controllers\Api\{{ $entity['instance']->getEntityDomain() }};

use {{ $entity['instance']->getDomainClasses()['Repository']['className'] }};
use {{ panel()->getNamespace($provider) }}\Http\Controllers\Api\Controller;

/**
 * Class {{ $entity['reflectionClass']->getShortName() }}Controller
 * @package {{ panel()->getNamespace($provider) }}\Http\Controllers\Api\{{ $entity['instance']->getEntityDomain() }}
 */
class {{ $entity['reflectionClass']->getShortName() }}Controller extends Controller
{
    protected $repository;

    /**
     * {{ $entity['reflectionClass']->getShortName() }}Controller constructor.
     *
     * @param {{ $entity['reflectionClass']->getShortName() }}Repository $repository
     */
    public function __construct({{ $entity['reflectionClass']->getShortName() }}Repository $repository)
    {
        parent::__construct($repository);
    }

    /**
     * Get Entity Relations
     *
     * Specify the entity relationships to be loaded
     *
     * @return array
     */
    public function getEntityRelations(): array
    {
        return [

        ];
    }

    /**
     * Format Request Data
     *
     * Format form data before save.
     *
     * @param array $data
     * @return array
     */
    public function formatData(array $data): array
    {
        return $data;
    }
}
</code>{{ Html::bsClipboard("{$provider}_controller_api_tpl") }}
</pre>