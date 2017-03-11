<pre>
<code class="php" id="view_presenter_tpl">&lt;?php

namespace {{ $entity['reflectionClass']->getNamespaceName() }}\Presenters;

use App\Support\Database\Eloquent\Presenters\ViewPresenter;

/**
 * Class {{ $entity['reflectionClass']->getShortName() }}ViewPresenter
 * @package {{ $entity['reflectionClass']->getNamespaceName() }}
 */
class {{ $entity['reflectionClass']->getShortName() }}ViewPresenter extends ViewPresenter
{
@if($entity['columns'])
@foreach($entity['columns'] as $key => $col)
@if($col['type'] == 'datetime')
@if(!in_array($col['name'], config('code_generator.excludes.fields.presenter_eloquent', [])))
    public function {{ lcfirst(studly_case('get_'.$key)) }}()
    {
        return $this->{{ $key }}->format('d/m/Y H:i:s');
    }


    public function {{ lcfirst(studly_case('get_'.$key)) }}Date()
    {
        return $this->{{ $key }}->format('d/m/Y');
    }


    public function {{ lcfirst(studly_case('get_'.$key)) }}Time()
    {
        return $this->{{ $key }}->format('H:i:s');
    }


    public function {{ lcfirst(studly_case('get_'.$key)) }}ForHumans()
    {
        return $this->{{ $key }}->diffForHumans();
    }
    @endif
@else
    public function {{ lcfirst(studly_case('get_'.$key)) }}()
    {
        return $this->{{ $key }};
    }

@endif
@endforeach
@endif
}
</code>{{ Html::bsClipboard('view_presenter_tpl') }}
</pre>