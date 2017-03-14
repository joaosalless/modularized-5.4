<pre>
<code class="php" id="model_tpl">&lt;?php

namespace {{ $entity['reflectionClass']->getNamespaceName() }};

use {{ $entity['reflectionClass']->getNamespaceName() }}\Presenters\{{ $entity['reflectionClass']->getShortName() }}ViewPresenter;
use {{ $entity['reflectionClass']->getNamespaceName() }}\Rules\{{ $entity['reflectionClass']->getShortName() }}Rules;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class {{ $entity['reflectionClass']->getShortName() }}
 * @package {{ $entity['reflectionClass']->getNamespaceName() }}
 */
class {{ $entity['reflectionClass']->getShortName() }} extends Model
{
    use SoftDeletes;

    protected $columnTitle           = '{{ $entity['entityTitleColumn'] }}';
    protected $entityGender          = '{{ $entity['entityGender'] }}';
    protected $entityIcon            = '{{ $entity['entityIcon'] }}';
    protected $entityRouteAlias      = '{{ $entity['entityRouteAlias'] }}';
    protected $entityViewsAlias      = '{{ $entity['entityViewsAlias'] }}';
    protected $entityRoutePrefix     = '{{ $entity['entityRoutePrefix'] }}';
    protected $table                 = '{{ $entity['table'] }}';
    protected $rulesFrom             = {{ $entity['reflectionClass']->getShortName() }}Rules::class;
    protected $presenter             = {{ $entity['reflectionClass']->getShortName() }}ViewPresenter::class;

    protected $entityAllowedMedias   = [
        'images',
        'documents',
    ];

@if($entity['dates'])
    protected $dates = [
    @foreach($entity['dates'] as $key => $col)
    '{{ $col }}',
    @endforeach
];
@endif

@if($entity['fillable'])
    protected $fillable = [
    @foreach($entity['fillable'] as $key => $col)
    '{{ $col }}',
    @endforeach
];
@endif

}</code>{{ Html::bsClipboard('model_tpl') }}
</pre>