
@if( in_array('toggle_active', $actionRoutes['model']) && $actionRoutes['model']['toggle_active'] )
    <td>
        <a href="{{ route($panel->routeAlias().'.'.$model->getEntityRouteAlias().'.toggle_active', ['id' => $model->id]) }}"
           class="btn btn-{{ $model->active ? 'default' : 'danger' }} btn-xs btn-disable"
           data-toggle="tooltip"
           data-placement="top"
           title="Deseja realmente {{ $model->active ? 'desativar' : 'ativar' }} este registro?">
           {{ $model->active ? 'SIM' : 'NÃO' }}
        </a>
    </td>
@endif

<td class="text-right">
    <div class="btn-group btn-group-xs">

        @if( in_array('show', $actionRoutes['model']) && $actionRoutes['model']['show'] )
            <a href="{{ route($panel->routeAlias().'.'.$model->getEntityRouteAlias().'.show', ['id' => $model->id]) }}"
                class="btn btn-default"
                data-toggle="tooltip"
                data-placement="top"
                title="Exibir o registro de {{ Str::lower($model->getEntityName()) }}">
                <i class="fa fa-fw fa-eye"></i>
            </a>
        @endif

        @if($model->trashed())

            @if( in_array('destroy', $actionRoutes['model']) && $actionRoutes['model']['destroy'] )
                <a href="{{ route($panel->routeAlias().'.'.$model->getEntityRouteAlias().'.destroy', ['id' => $model->id]) }}"
                    class="btn btn-default btn-disable"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Deseja excluir o registro de {{ Str::lower($model->getEntityName()) }} permanentemente?">
                    <i class="fa fa-fw fa-trash"></i>
                </a>
            @endif

            @if( in_array('toggle_trash', $actionRoutes['model']) && $actionRoutes['model']['toggle_trash'] )
                <a href="{{ route($panel->routeAlias().'.'.$model->getEntityRouteAlias().'.toggle_trash', ['id' => $model->id]) }}"
                   class="btn btn-default btn-disable"
                   data-toggle="tooltip"
                   data-placement="top"
                   title="Deseja realmente restaurar o registro de {{ Str::lower($model->getEntityName()) }}?">
                    <i class="fa fa-fw fa-check text-success"></i>
                </a>
            @endif

        @else

            @if( in_array('edit', $actionRoutes['model']) && $actionRoutes['model']['edit'] )
                <a href="{{ route($panel->routeAlias().'.'.$model->getEntityRouteAlias().'.edit', ['id' => $model->id]) }}"
                    class="btn btn-default"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Editar o registro de {{ Str::lower($model->getEntityName()) }}">
                    <i class="fa fa-fw fa-edit"></i>
                </a>
            @endif

            @if( in_array('toggle_trash', $actionRoutes['model']) && $actionRoutes['model']['toggle_trash'] )
                <a href="{{ route($panel->routeAlias().'.'.$model->getEntityRouteAlias().'.toggle_trash', ['id' => $model->id]) }}"
                    class="btn btn-default btn-disable"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Deseja realmente mover o registro de {{ Str::lower($model->getEntityName()) }} para a lixeira?">
                    <i class="fa fa-fw fa-trash"></i>
                </a>
            @endif

        @endif

    </div>
</td>