<div class="col-md-12">

    <div class="table-responsive">
        <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}">
            <thead>
                <tr>
                    <th>{{ $entity->getLabel('sender_name') }}</th>
                    <th>{{ $entity->getLabel('sender_email') }}</th>
                    <th>{{ $entity->getLabel('sender_phone') }}</th>
                    <th>{{ $entity->getLabel('message') }}</th>
                    @include("{$panel->unitAlias()}::shared.list.model_medias_th")
                    @include("{$panel->unitAlias()}::shared.list.model_actions_th")
                </tr>
            </thead>
            <tbody>
                @foreach($collection as $message)
                    <tr>
                        <td>{{ $message->getTitle() }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>{{ $message->contact ? $message->contact->getTitle() : '' }}</td>
                        @include("{$panel->unitAlias()}::shared.list.model_medias_td", ['model' => $message])
                        @include("{$panel->unitAlias()}::shared.list.model_actions_td", ['model'  => $message])
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>