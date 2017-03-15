@foreach($entity->getEntityAllowedMedias() as $mediaCollection)

    @if($entity->hasMedia($mediaCollection))

        <div class="panel panel-default">

            <div class="panel-heading text-uppercase">
                {{ Str::upper(trans('medias::media.collection.'.$mediaCollection)) }}
            </div>

            <div class="panel-body no-margin-bottom">
                <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}" id="medias-list">
                    <thead>
                    <tr>
                        <th>{{ trans('medias::media.title') }}</th>
                        <th>{{ trans('medias::media.collection_name') }}</th>
                        <th>{{ trans('medias::media.extension') }}</th>
                        <th>{{ trans('medias::media.size') }}</th>
                        <th>{{ trans('medias::media.uploaded_at') }}</th>
                        @include("{$panel->unitAlias()}::shared.list.model_medias_th")
                        @include("{$panel->unitAlias()}::shared.list.media_actions_th")
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($entity->getMedia($mediaCollection) as $media)
                        <tr class="{{ $media->trashed() ? 'bg-danger' : '' }}">
                            <td>{{ $media->title }}</td>
                            <td>{{ trans('media.collection_name.'.$media->collection_name) }}</td>
                            <td>{{ $media->extension }}</td>
                            <td>{{ $media->humanReadableSize }}</td>
                            <td>{{ $media->created_at->format('d/m/Y') }}</td>
                            @include("{$panel->unitAlias()}::shared.list.model_medias_td",  ['model' => $media])
                            @include("{$panel->unitAlias()}::shared.list.media_actions_td", ['model'  => $media])
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @endif

@endforeach
