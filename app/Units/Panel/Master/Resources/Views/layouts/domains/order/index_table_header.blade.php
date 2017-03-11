<h4>

    @if( str_contains(request()->route()->getName(), "{$panel->routeAlias()}.{$entity->getEntityRouteAlias()}.trashed") )
        {{ $entity->getEntityShortNamePlural() }} {{ trans($entity->getEntityDomainAlias().'::'.$entity->getEntityTranslationKey().'.deleted_plural') }}
    @else
        {{ $entity->getEntityShortNamePlural() }} {{ trans($entity->getEntityDomainAlias().'::'.$entity->getEntityTranslationKey().'.active_plural') }}
    @endif

    @if( in_array('create', $actionRoutes['model']) && $actionRoutes['model']['create'] )
        <a href="{{ route("{$panel->routeAlias()}.{$entity->getEntityRouteAlias()}.create") }}"
           class="btn btn-sm btn-primary pull-right"
           style="margin-top: -8px">
            {{ Str::upper(trans($entity->getEntityDomainAlias().'::'.$entity->getEntityTranslationKey().'.new')) }} {{ Str::upper($entity->getEntityShortName()) }}
        </a>
    @endif

</h4>

<hr class="no-margin-bottom">