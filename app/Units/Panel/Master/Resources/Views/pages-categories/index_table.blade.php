<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.index_table.header")

    <div class="table-responsive">
        <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}">
            <thead>
                <tr>
                    <th>{{ trans('pages::category.title') }}</th>
                    <th>{{ trans('pages::category.slug') }}</th>
                    <th>{{ trans('pages::category.pages') }}</th>
                    @include("{$panel->unitAlias()}::shared.list.model_medias_th")
                    @include("{$panel->unitAlias()}::shared.list.model_actions_th")
                </tr>
            </thead>
            <tbody>
                @foreach($collection as $categoria)
                    <tr>
                        <td>{{ $categoria->getTitle() }}</td>
                        <td>{{ $categoria->slug }}</td>
                        <td>{{ $categoria->pages->count() }}</td>
                        @include("{$panel->unitAlias()}::shared.list.model_medias_td", ['model' => $categoria])
                        @include("{$panel->unitAlias()}::shared.list.model_actions_td", ['model'  => $categoria])
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>