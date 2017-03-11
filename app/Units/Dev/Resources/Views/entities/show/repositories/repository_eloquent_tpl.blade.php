<pre>
<code class="php" id="repository_eloquent_tpl">&lt;?php

namespace {{ $entity['reflectionClass']->getNamespaceName() }}\Repositories;

use {{ $entity['reflectionClass']->getNamespaceName() }}\Entity;
use App\Support\Repositories\RepositoryEloquent;
use {{ $entity['reflectionClass']->getNamespaceName() }}\Presenters\{{ $entity['reflectionClass']->getShortName() }}FractalPresenter;

/**
 * Class {{ $entity['reflectionClass']->getShortName() }}RepositoryEloquent
 * @package {{ $entity['reflectionClass']->getNamespaceName() }}
 */
class {{ $entity['reflectionClass']->getShortName() }}RepositoryEloquent extends RepositoryEloquent implements {{ $entity['reflectionClass']->getShortName() }}Repository
{
    protected $fieldSearchable = [

    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return {{ $entity['reflectionClass']->getShortName() }}::class;
    }

    /**
     * Specify Fractal Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return {{ $entity['reflectionClass']->getShortName() }}FractalPresenter::class;
    }
}
</code>{{ Html::bsClipboard('repository_eloquent_tpl') }}
</pre>