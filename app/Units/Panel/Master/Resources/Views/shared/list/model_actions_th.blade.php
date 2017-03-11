
@if( in_array('toggle_active', $actionRoutes['model']) && $actionRoutes['model']['toggle_active'] )
    <th>{{ trans($entity->getEntityDomainAlias().'::'.$entity->getEntityTranslationKey().'.active') }}</th>
@endif

<th class="text-right" style="width: 120px;">{{ trans('model.actions') }}</th>