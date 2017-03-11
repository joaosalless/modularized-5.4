<pre>
<code class="php" id="fractal_presenter_tpl">&lt;?php

namespace {{ $entity['reflectionClass']->getNamespaceName() }}\Presenters;

use {{ $entity['reflectionClass']->getNamespaceName() }}\Transformers\{{ $entity['reflectionClass']->getShortName() }}Transformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class {{ $entity['reflectionClass']->getShortName() }}FractalPresenter
 *
 * @package {{ $entity['reflectionClass']->getNamespaceName() }}
 */
class {{ $entity['reflectionClass']->getShortName() }}FractalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new {{ $entity['reflectionClass']->getShortName() }}Transformer();
    }
}
</code>{{ Html::bsClipboard('fractal_presenter_tpl') }}
</pre>