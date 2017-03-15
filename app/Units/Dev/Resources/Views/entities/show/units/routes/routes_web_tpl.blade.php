<pre>
<code class="php" id="{{ $provider }}_routes_web_tpl">/*
|--------------------------------------------------------------------------
| {{ $entity['reflectionClass']->getShortName() }} Web {{ ucfirst($provider) }} Routes
|--------------------------------------------------------------------------
*/
$this->router->group([
    'as'        => '{{ $entity['instance']->getEntityRouteAlias() }}.',
    'prefix'    => '{{ $entity['instance']->getEntityRoutePrefix() }}',
    'namespace' => '{{ $entity['instance']->getEntityDomain() }}',
], function () {

    $controller = '{{ $entity['reflectionClass']->getShortName() }}Controller';

    $this->router->get('/',                  ['as' => 'index',         'uses' => "{$controller}{{{'@'}}}index"]);
    $this->router->get('create',             ['as' => 'create',        'uses' => "{$controller}{{{'@'}}}create"]);
    $this->router->get('trashed',            ['as' => 'trashed',       'uses' => "{$controller}{{{'@'}}}getTrashed"]);
    $this->router->post('store',             ['as' => 'store',         'uses' => "{$controller}{{{'@'}}}store"]);
    $this->router->get('{id}',               ['as' => 'show',          'uses' => "{$controller}{{{'@'}}}show"]);
    $this->router->get('{id}/edit',          ['as' => 'edit',          'uses' => "{$controller}{{{'@'}}}edit"]);
    $this->router->post('{id}/update',       ['as' => 'update',        'uses' => "{$controller}{{{'@'}}}update"]);
    $this->router->get('{id}/destroy',       ['as' => 'destroy',       'uses' => "{$controller}{{{'@'}}}destroy"]);
    $this->router->get('{id}/toggle_active', ['as' => 'toggle_active', 'uses' => "{$controller}{{{'@'}}}toggleActive"]);
    $this->router->get('{id}/toggle_trash',  ['as' => 'toggle_trash',  'uses' => "{$controller}{{{'@'}}}toggleTrash"]);
});
</code>{{ Html::bsClipboard("{$provider}_routes_web_tpl") }}
</pre>