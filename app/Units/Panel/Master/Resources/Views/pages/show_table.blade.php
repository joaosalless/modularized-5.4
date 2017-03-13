<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.show_table.header")

    <table class="{{ $panel->unitConfig()['theme']['table']['class'] }} {{ $entity->deleted_at ? 'bg-danger' : '' }}">
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
            {{ $entity->getLabel('category') }}
            <th>
            <td>
            {{ $entity->category->present()->getTitle }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('title') }}
            <th>
            <td>
            {{ $entity->present()->getTitle }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('template') }}
            <th>
            <td>
            {{ $entity->present()->getTemplate }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('slug') }}
            <th>
            <td>
            {{ $entity->present()->getSlug }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('intro') }}
            <th>
            <td>
            {!!  $entity->present()->getIntro !!}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('body') }}
            <th>
            <td>
            {!!  $entity->present()->getBody !!}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('active') }}
            <th>
            <td>
            {{ $entity->present()->getActive }}
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