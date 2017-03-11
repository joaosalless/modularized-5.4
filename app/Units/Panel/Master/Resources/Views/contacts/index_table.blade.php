<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.index_table.header")

    <div class="table-responsive">
        <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}">
            <thead>
                <tr>
                    <th>{{ $entity->getLabel('name') }}</th>
                    <th>{{ $entity->getLabel('email') }}</th>
                    <th>{{ $entity->getLabel('phone') }}</th>
                    <th>{{ $entity->getLabel('messages') }}</th>
                    @include("{$panel->unitAlias()}::shared.list.model_medias_th")
                    @include("{$panel->unitAlias()}::shared.list.model_actions_th")
                </tr>
            </thead>
            <tbody>
                @foreach($collection as $contact)
                    <tr>
                        <td>{{ $contact->getTitle() }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->messages->count() }}</td>
                        @include("{$panel->unitAlias()}::shared.list.model_medias_td", ['model' => $contact])
                        @include("{$panel->unitAlias()}::shared.list.model_actions_td", ['model'  => $contact])
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>