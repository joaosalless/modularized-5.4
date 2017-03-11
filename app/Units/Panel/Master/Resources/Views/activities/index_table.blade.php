<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.index_table.header")

    <div class="table-responsive">
        <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}" id="medias-list">
            <thead>
            <tr>
                <th>{{ $entity->getLabel('causer') }}</th>
                <th>{{ $entity->getLabel('description') }}</th>
                <th>{{ $entity->getLabel('subject_type') }}</th>
                <th>{{ $entity->getLabel('subject') }}</th>
                {{--<th>{{ $entity->getLabel('ip') }}</th>--}}
                <th>{{ $entity->getLabel('created_at_optional') }}</th>
                @include("{$panel->unitAlias()}::shared.list.model_medias_th")
                @include("{$panel->unitAlias()}::shared.list.model_actions_th")
            </thead>
            <tbody>
            @foreach($collection as $activity)
                <tr>
                    <td>
                        @if($activity->causer)
                            <a href="{{ route($panel->routeAlias().'.'.$activity->causer->getEntityRouteAlias().'.show', ['id' => $activity->causer->id]) }}">
                                {{ $activity->causer->getTitle() }}
                            </a>
                        @else
                            {{ $entity->getLabel('system') }}
                        @endif
                    </td>
                    <td>{{ trans('activities::activity.descriptions.'.$activity->description) }}</td>
                    <td>{{ $activity->subject ? $activity->subject->getEntityName() : null }}</td>
                    <td>
                        @if($activity->subject)
                            <a href="{{ route($panel->routeAlias().'.'.$activity->subject->getEntityRouteAlias().'.show', ['id' => $activity->subject->id]) }}">
                                {{ $activity->subject->getTitle() }}
                            </a>
                        @endif
                    </td>
                    {{--@if($activity->getExtraProperty('geoip'))--}}
                        {{--<td>{{ $activity->getExtraProperty('geoip')['ip'] }}</td>--}}
                    {{--@else--}}
                        {{--<td>--</td>--}}
                    {{--@endif--}}
                    <td>{{ $activity->created_at->format('d/m/Y H:i:s') }}</td>
                    @include("{$panel->unitAlias()}::shared.list.model_medias_td", ['model' => $activity])
                    @include("{$panel->unitAlias()}::shared.list.model_actions_td", ['model'  => $activity])
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>