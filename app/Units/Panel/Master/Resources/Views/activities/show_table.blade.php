<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.show_table.header")

    <table class="{{ $panel->unitConfig()['theme']['table']['class'] }} {{ $entity->deleted_at ? 'bg-danger' : '' }}">
        <tbody>


        <tr>
            <th>
            {{ $entity->getLabel('id') }}
            <th>
            <td>
            {{ $entity->id }}
            <td>
        </tr>


        <tr>
            <th>
            {{ $entity->getLabel('description') }}
            <th>
            <td>
            {{ $entity->description }}
            <td>
        </tr>


        @if($entity->causer)
            <tr>
                <th>
                {{ $entity->getLabel('causer') }}
                <th>
                <td>
                    <a href="{{ route($panel->routeAlias().'.'.$entity->causer->getEntityRouteAlias().'.show', ['id' => $entity->causer->id]) }}">
                        {{ $entity->causer->getTitle() }}
                    </a>
                <td>
            </tr>
        @endif


        @if($entity->causer)
            <tr>
                <th>
                {{ $entity->getLabel('causer_type') }}
                <th>
                <td>
                {{ $entity->causer->getEntityName() }}
                <td>
            </tr>
        @endif


        @if($entity->subject)
            <tr>
                <th>
                {{ $entity->getLabel('subject') }}
                <th>
                <td>
                    <a href="{{ route($panel->routeAlias().'.'.$entity->subject->getEntityRouteAlias().'.show', ['id' => $entity->subject->id]) }}">
                        {{ $entity->subject->getTitle() }}
                    </a>
                <td>
            </tr>
        @endif


        @if($entity->subject)
            <tr>
                <th>
                {{ $entity->getLabel('subject_type') }}
                <th>
                <td>
                {{ $entity->subject->getEntityName() }}
                <td>
            </tr>
        @endif


        <tr>
            <th>
            {{ $entity->getLabel('log_name') }}
            <th>
            <td>
            {{ $entity->log_name }}
            <td>
        </tr>


        <tr>
            <th>
            {{ $entity->getLabel('properties') }}
            <th>
            <td>
            {{ $entity->properties }}
            <td>
        </tr>


        <tr>
            <th>
            {{  $entity->getLabel('created_at') }}
            <th>
            <td>
                {{  $entity->created_at->format('d/m/Y H:i:s') }}
                ({{ $entity->created_at->diffForHumans() }})
            <td>
        </tr>


        <tr>
            <th>
            {{  $entity->getLabel('updated_at') }}
            <th>
            <td>
                {{  $entity->updated_at->format('d/m/Y H:i:s') }}
                ({{ $entity->updated_at->diffForHumans() }})
            <td>
        </tr>


        @if($entity->trashed())
            <tr>
                <th>
                {{  $entity->getLabel('deleted_at') }}
                <th>
                <td>
                    {{  $entity->deleted_at->format('d/m/Y H:i:s') }}
                    ({{ $entity->deleted_at->diffForHumans() }})
                <td>
            </tr>
        @endif

        </tbody>

    </table>
</div>