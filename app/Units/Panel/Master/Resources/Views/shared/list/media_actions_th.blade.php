
@if( in_array('toggle_active', $actionRoutes['media']) && $actionRoutes['media']['toggle_active'] )
    <th>{{ trans($entity->getEntityDomainAlias().'::'.$entity->getEntityTranslationKey().'.active') }}</th>
@endif

<th class="text-right" style="width: 150px;">{{ trans('media.actions') }}</th>