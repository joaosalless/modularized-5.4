<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.show_table.header")

    <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}">

        <tbody>

        <tr>
            <th>
            {{ $entity->getLabel('id') }}
            <th>
            <td>
            {{ $entity->present()->getId }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('contact_id') }}
            <th>
            <td>
            {{ $entity->present()->getContactId }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('contact_name') }}
            <th>
            <td>
            {{ $entity->present()->getContactName }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('contact_email') }}
            <th>
            <td>
            {{ $entity->present()->getContactEmail }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('contact_phone') }}
            <th>
            <td>
            {{ $entity->present()->getContactPhone }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('sender_name') }}
            <th>
            <td>
            {{ $entity->present()->getSenderName }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('sender_email') }}
            <th>
            <td>
            {{ $entity->present()->getSenderEmail }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('sender_phone') }}
            <th>
            <td>
            {{ $entity->present()->getSenderPhone }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('subject') }}
            <th>
            <td>
            {{ $entity->present()->getSubject }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('message') }}
            <th>
            <td>
            {{ $entity->present()->getMessage }}
            <td>
        </tr>

        @if($entity->received_at)
            <tr>
                <th>
                {{ $entity->getLabel('received_at') }}
                <th>
                <td>
                {{ $entity->present()->getReceivedAt }}
                <td>
            </tr>
        @endif

        <tr>
            <th>
            {{ $entity->getLabel('important') }}
            <th>
            <td>
            {{ $entity->present()->getImportant }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('junk') }}
            <th>
            <td>
            {{ $entity->present()->getJunk }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('read') }}
            <th>
            <td>
            {{ $entity->present()->getRead }}
            <td>
        </tr>

        @if($entity->deleted_at)
            <tr>
                <th>
                {{ $entity->getLabel('deleted_at') }}
                <th>
                <td>
                {{ $entity->present()->getDeletedAt }}
                <td>
            </tr>
        @endif

        @if($entity->created_at)
            <tr>
                <th>
                {{ $entity->getLabel('created_at') }}
                <th>
                <td>
                {{ $entity->present()->getCreatedAt }}
                <td>
            </tr>
        @endif

        @if($entity->updated_at)
            <tr>
                <th>
                {{ $entity->getLabel('updated_at') }}
                <th>
                <td>
                {{ $entity->present()->getUpdatedAt }}
                <td>
            </tr>
        @endif

        </tbody>

    </table>

</div>