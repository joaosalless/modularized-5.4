<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.index_table.header")

    <div class="table-responsive">
        <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}" id="medias-list">
            <thead>
                <tr>
                    <th>{{ trans('medias::media.title') }}</th>
                    <th>{{ trans('medias::media.collection_name') }}</th>
                    <th>{{ trans('medias::media.extension') }}</th>
                    <th>{{ trans('medias::media.size') }}</th>
                    <th>{{ trans('medias::media.uploaded_at') }}</th>
                    @include("{$panel->unitAlias()}::shared.list.model_medias_th")
                    @include("{$panel->unitAlias()}::shared.list.media_actions_th", $actionRoutes['media'] = $actionRoutes['model'])
                </tr>
            </thead>
            <tbody>
                @foreach($collection as $media)
                    <tr class="{{ $media->trashed() ? 'bg-danger' : '' }}">
                        <td>{{ $media->title }}</td>
                        <td>{{ trans('media.collection_name.'.$media->collection_name) }}</td>
                        <td>{{ $media->extension }}</td>
                        <td>{{ $media->humanReadableSize }}</td>
                        <td>{{ $media->created_at->format('d/m/Y') }}</td>
                        @include("{$panel->unitAlias()}::shared.list.model_medias_td", ['model' => $media])
                        @include("{$panel->unitAlias()}::shared.list.media_actions_td", ['model'  => $media])
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>