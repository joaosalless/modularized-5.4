<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.index_table.header")

    <div class="table-responsive">
        <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}">
            <thead>
            <tr>
                <th><i class="fa fa-fw fa-user"></i></th>
                <th>{{ trans('contacts::contact.name') }}</th>
                <th>{{ trans('contacts::contact.email') }}</th>
                <th>{{ trans('contacts::contact.phone') }}</th>
                @include("{$panel->unitAlias()}::shared.list.model_medias_th")
                @include("{$panel->unitAlias()}::shared.list.model_actions_th")
            </tr>
            </thead>
            <tbody>
            @foreach($collection as $user)
                <tr>
                    <td><i class="{{ $user->profile->getEntityIcon() }}"></i></td>
                    <td>{{ $user->getTitle() }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    @include("{$panel->unitAlias()}::shared.list.model_medias_td", ['model' => $user])
                    @include("{$panel->unitAlias()}::shared.list.model_actions_td", ['model'  => $user])
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>