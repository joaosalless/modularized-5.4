<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.index_table.header")

    <div class="table-responsive">
        <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}">
            <thead>
            <tr>
                <th>{{ trans('pages::page.title') }}</th>
                <th>{{ trans('pages::page.slug') }}</th>
                <th>{{ trans('pages::page.category') }}</th>
                @include("{$panel->unitAlias()}::shared.list.model_medias_th")
                @include("{$panel->unitAlias()}::shared.list.model_actions_th")
            </tr>
            </thead>
            <tbody>
            @foreach($collection as $page)
                <tr>
                    <td>{{ $page->getTitle() }}</td>
                    <td>{{ $page->slug }}</td>
                    <td>{{ $page->category->getTitle() }}</td>
                    @include("{$panel->unitAlias()}::shared.list.model_medias_td", ['model' => $page])
                    @include("{$panel->unitAlias()}::shared.list.model_actions_td", ['model'  => $page])
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>