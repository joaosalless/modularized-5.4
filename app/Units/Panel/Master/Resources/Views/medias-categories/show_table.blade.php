<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.show_table.header")

    <table class="{{ $panel->unitConfig()['theme']['table']['class'] }} {{ $entity->deleted_at ? 'bg-danger' : '' }}">
        <tbody>

        <tr>
            <th>
            {{ trans('medias::category.id') }}
            <th>
            <td>
            {{ $entity->id }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::category.title') }}
            <th>
            <td>
            {{ $entity->title }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::category.slug') }}
            <th>
            <td>
            {{ $entity->slug }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::category.intro') }}
            <th>
            <td>
            {!! $entity->intro !!}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::category.body') }}
            <th>
            <td>
            {!! $entity->body !!}
            <td>
        </tr>


        {{--<tr>--}}
            {{--<th>--}}
            {{--{{ trans('medias::category.seo') }}--}}
            {{--<th>--}}
            {{--<td>--}}
            {{--{{ $entity->seo }}--}}
            {{--<td>--}}
        {{--</tr>--}}


        <tr>
            <th>
            {{ trans('medias::category.active') }}
            <th>
            <td>
            {{ $entity->active ? 'Sim' : 'Não' }}
            <td>
        </tr>


        @if($entity->deleted_at)
            <tr>
                <th>
                {{ trans('medias::category.deleted_at') }}
                <th>
                <td>
                    {{  $entity->deleted_at->format('d/m/Y H:i:s') }}
                    ({{ $entity->deleted_at->diffForHumans() }})
                <td>
            </tr>
        @endif


        <tr>
            <th>
            {{ trans('medias::category.created_at') }}
            <th>
            <td>
                {{  $entity->created_at->format('d/m/Y H:i:s') }}
                ({{ $entity->created_at->diffForHumans() }})
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::category.updated_at') }}
            <th>
            <td>
                {{  $entity->updated_at->format('d/m/Y H:i:s') }}
                ({{ $entity->updated_at->diffForHumans() }})
            <td>
        </tr>

        </tbody>

    </table>
</div>