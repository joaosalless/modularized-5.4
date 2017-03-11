<h4>

    @if( $entity instanceof App\Domains\Activities\Activity )
        @if( $entity->subject )
            {{ Str::title($entity->getLabel($entity->description)) }} {{ Str::title($entity->subject->getEntityName()) }}
        @else
            {{ Str::title($entity->getLabel($entity->description)) }}
        @endif
    @else
        {{ Str::title($entity->getTitle()) }}
    @endif

    @if( in_array('edit', $actionRoutes['model']) && $actionRoutes['model']['edit'] )
        <a href="{{ route("{$panel->routeAlias()}.{$entity->getEntityRouteAlias()}.edit", $entity->id) }}"
           class="btn btn-sm btn-primary pull-right"
           style="margin-top: -8px">
            {{ Str::upper($entity->getLabel('edit')) }} {{ Str::upper($entity->getEntityShortName()) }}
        </a>
    @endif

    @if( in_array('toggle_trash', $actionRoutes['model']) && $actionRoutes['model']['toggle_trash'] )
        @if($entity->deleted_at)
            <a href="{{ route("{$panel->routeAlias()}.{$entity->getEntityRouteAlias()}.toggle_trash", $entity->id) }}"
                class="btn btn-sm btn-default pull-right"
                style="margin-top: -8px; margin-right: 10px">
                {{ $entity->getLabel('restore') }} {{ Str::upper($entity->getEntityShortName()) }}
            </a>
        @endif
    @endif

</h4>

<hr style="margin-bottom: -1px;">