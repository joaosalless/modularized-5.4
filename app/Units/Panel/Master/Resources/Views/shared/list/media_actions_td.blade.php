
@if( in_array('toggle_active', $actionRoutes['media']) && $actionRoutes['media']['toggle_active'] )
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

        @if( in_array('show', $actionRoutes['media']) && $actionRoutes['media']['show'] )
            <a href="{{ route($panel->routeAlias().'.'.$media->getEntityRouteAlias().'.show', ['id' => $media->id]) }}"
               class="btn btn-default"
               data-toggle="tooltip"
               data-placement="top"
               title="Exibir o registro de {{ Str::lower($media->getEntityName()) }}">
                <i class="fa fa-fw fa-eye"></i>
            </a>
        @endif

        @if( in_array('show_media', $actionRoutes['media']) && $actionRoutes['media']['show_media'] )
            <a href="{{ $media->getUrl() }}"
                target="_blank"
                class="btn btn-default"
                data-toggle="tooltip"
                data-placement="top"
                title="Exibir arquivo">
                <i class="fa fa-fw fa-image"></i>
            </a>
        @endif

        @if($media->trashed())

            @if( in_array('destroy', $actionRoutes['media']) && $actionRoutes['media']['destroy'] )
                <a href="{{ route($panel->routeAlias().'.'.$media->getEntityRouteAlias().'.destroy', ['id' => $media->id, 'redirect_url' => request()->url()]) }}"
                    class="btn btn-default btn-disable"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Deseja excluir o registro de {{ Str::lower($media->getEntityName()) }} permanentemente?">
                    <i class="fa fa-fw fa-trash"></i>
                </a>
            @endif

            @if( in_array('toggle_trash', $actionRoutes['media']) && $actionRoutes['media']['toggle_trash'] )
                <a href="{{ route($panel->routeAlias().'.'.$media->getEntityRouteAlias().'.toggle_trash', ['id' => $media->id, 'redirect_url' => request()->url()]) }}"
                    class="btn btn-default btn-disable"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Deseja realmente restaurar o registro de {{ Str::lower($media->getEntityName()) }}?">
                    <i class="fa fa-fw fa-check text-success"></i>
                </a>
            @endif

        @else

            @if( in_array('edit', $actionRoutes['media']) && $actionRoutes['media']['edit'] )
                <a href="{{ route($panel->routeAlias().'.'.$media->getEntityRouteAlias().'.edit', ['id' => $media->id, 'redirect_url' => request()->url()]) }}"
                    class="btn btn-default"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Editar o registro de {{ Str::lower($media->getEntityName()) }}">
                    <i class="fa fa-fw fa-edit"></i>
                </a>
            @endif

            @if( in_array('toggle_trash', $actionRoutes['media']) && $actionRoutes['media']['toggle_trash'] )
                <a href="{{ route($panel->routeAlias().'.'.$media->getEntityRouteAlias().'.toggle_trash', ['id' => $media->id, 'redirect_url' => request()->url()]) }}"
                    class="btn btn-default btn-disable"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Mover o registro de {{ Str::lower($media->getEntityName()) }} para a lixeira">
                    <i class="fa fa-fw fa-trash"></i>
                </a>
            @endif

            @if($media->isImage())

                @if( in_array('toggle_is_cover', $actionRoutes['media']) && $actionRoutes['media']['toggle_is_cover'] )

                    <a href="{{ route("{$panel->routeAlias()}.{$media->getEntityRouteAlias()}.toggle_is_cover", ['id' => $media->id, 'redirect_url' => request()->url()]) }}"
                        class="btn btn-{{ $media->is_cover ? 'primary' : 'default' }}"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Definir como mídia principal">
                        <i class="fa fa-fw fa-bookmark"></i>
                    </a>

                @endif

            @endif

        @endif

    </div>
</td>