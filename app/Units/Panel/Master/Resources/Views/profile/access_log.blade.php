<div class="col-md-12">
    <h4>Histórico de atividades</h4>
    <hr class="no-margin-bottom">
    <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}">
        <thead>
        <tr>
            <th>{{ trans('activities::activity.description') }}</th>
            <th>{{ trans('activities::activity.ip') }}</th>
            <th class="text-right">{{ trans('activities::activity.created_at_optional') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($entity->activities as $activity)
            <tr>
                <td>{{ trans('activities::activity.'.$activity->description) }}</td>
                @if($activity->getExtraProperty('geoip'))
                    <td>{{ $activity->getExtraProperty('geoip')['ip'] }}</td>
                @else
                    <td>--</td>
                @endif
                <td class="text-right">{{ $activity->created_at->format('d/m/Y H:i:s') }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>