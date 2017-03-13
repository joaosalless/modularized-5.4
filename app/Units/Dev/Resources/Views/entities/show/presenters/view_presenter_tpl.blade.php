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
@if($col['type'] == 'datetime' || $col['type'] == 'date' || $col['type'] == 'time')
@if(!in_array($col['name'], config('code_generator.excludes.fields.presenter_eloquent', [])))
    public function {{ lcfirst(studly_case('get_'.$key)) }}()
    {
        return $this->{{ $key }} ? $this->{{ $key }}->format('d/m/Y H:i:s') : null;
    }

    public function {{ lcfirst(studly_case('get_'.$key)) }}Date()
    {
        return $this->{{ $key }} ? $this->{{ $key }}->format('d/m/Y') : null;
    }

    public function {{ lcfirst(studly_case('get_'.$key)) }}Time()
    {
        return $this->{{ $key }} ? $this->{{ $key }}->format('H:i:s') : null;
    }

    public function {{ lcfirst(studly_case('get_'.$key)) }}ForHumans()
    {
        return $this->{{ $key }} ? $this->{{ $key }}->diffForHumans() : null;
    }
@endif
@elseif($col['type'] == 'boolean')

    public function {{ lcfirst(studly_case('get_'.$key)) }}()
    {
        return $this->{{ $key }} ? $this->entity->getLabel('boolean_yes') : $this->entity->getLabel('boolean_no');
    }
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