<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.show_table.header")

    @if($entity->isImage())
        <img src="{{ $entity->getUrl() }}" alt="" class="img-responsive"><br>
    @endif

    <table class="{{ $panel->unitConfig()['theme']['table']['class'] }} {{ $entity->deleted_at ? 'bg-danger' : '' }}">
        <tbody>

        <tr>
            <th>
            {{ trans('medias::media.id') }}
            <th>
            <td>
            {{ $entity->id }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.title') }}
            <th>
            <td>
            {{ $entity->title }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.description') }}
            <th>
            <td>
            {!! $entity->description !!}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.category') }}
            <th>
            <td>
            {{ $entity->category->getTitle() }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.model') }}
            <th>
            <td>
                <a href="{{ route("{$panel->routeAlias()}.{$entity->model->getEntityRouteAlias()}.show", $entity->model->id) }}">{{ $entity->model->getTitle() }}</a>
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.model_type') }}
            <th>
            <td>
            {{ $entity->model->getEntityName() }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.collection_name') }}
            <th>
            <td>
            {{ trans("medias::media.collection.{$entity->collection_name}") }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.file_name') }}
            <th>
            <td>
                <a href="{{ $entity->getUrl() }}" target="_blank">{{ $entity->file_name }}</a>
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.disk') }}
            <th>
            <td>
            {{ $entity->disk }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.size') }}
            <th>
            <td>
            {{ $entity->human_readable_size }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.mime_type') }}
            <th>
            <td>
            {{ $entity->mime_type }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.extension') }}
            <th>
            <td>
            {{ $entity->extension }}
            <td>
        </tr>


        {{--<tr>--}}
            {{--<th>--}}
            {{--{{ trans('medias::media.manipulations') }}--}}
            {{--<th>--}}
            {{--<td>--}}
            {{--{{ $entity->manipulations }}--}}
            {{--<td>--}}
        {{--</tr>--}}


        {{--<tr>--}}
            {{--<th>--}}
            {{--{{ trans('medias::media.custom_properties') }}--}}
            {{--<th>--}}
            {{--<td>--}}
            {{--{{ $entity->custom_properties }}--}}
            {{--<td>--}}
        {{--</tr>--}}


        {{--<tr>--}}
            {{--<th>--}}
            {{--{{ trans('medias::media.order_column') }}--}}
            {{--<th>--}}
            {{--<td>--}}
            {{--{{ $entity->order_column }}--}}
            {{--<td>--}}
        {{--</tr>--}}


        @if($entity->isImage())
            <tr>
                <th>
                    {{ trans('medias::media.is_cover') }}
                <th>
                <td>
                    {{ $entity->is_cover ? 'Sim' : 'Não' }}
                <td>
            </tr>

            <tr>
                <th>
                    {{ trans('medias::media.in_carousel') }}
                <th>
                <td>
                    {{ $entity->in_carousel ? 'Sim' : 'Não' }}
                <td>
            </tr>

            <tr>
                <th>
                {{ trans('medias::media.dominant_color') }}
                <th>
                <td>
                    <span class="badge" style="background: {{ $entity->dominant_color }};">
                        {{ $entity->dominant_color }}
                    </span>
                <td>
            </tr>
        @endif


        {{--<tr>--}}
            {{--<th>--}}
            {{--{{ trans('medias::media.seo_share') }}--}}
            {{--<th>--}}
            {{--<td>--}}
            {{--{{ $entity->seo_share }}--}}
            {{--<td>--}}
        {{--</tr>--}}


        {{--<tr>--}}
            {{--<th>--}}
            {{--{{ trans('medias::media.active') }}--}}
            {{--<th>--}}
            {{--<td>--}}
            {{--{{ $entity->active }}--}}
            {{--<td>--}}
        {{--</tr>--}}


        <tr>
            <th>
            {{ trans('medias::media.created_at') }}
            <th>
            <td>
                {{  $entity->created_at->format('d/m/Y H:i:s') }}
                ({{ $entity->created_at->diffForHumans() }})
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('medias::media.updated_at') }}
            <th>
            <td>
                {{  $entity->updated_at->format('d/m/Y H:i:s') }}
                ({{ $entity->updated_at->diffForHumans() }})
            <td>
        </tr>


        @if($entity->trashed())
        <tr>
            <th>
            {{ trans('medias::media.deleted_at') }}
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