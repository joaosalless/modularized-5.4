<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.show_table.header")

    <table class="{{ $panel->unitConfig()['theme']['table']['class'] }} {{ $entity->deleted_at ? 'bg-danger' : '' }}">
        <tbody>


        <tr>
            <th>
            {{ trans('pages::page.id') }}
            <th>
            <td>
            {{ $entity->id }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('pages::page.title') }}
            <th>
            <td>
            {{ $entity->title }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('pages::page.category') }}
            <th>
            <td>
            {{ $entity->category->getTitle() }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('pages::page.template') }}
            <th>
            <td>
            {{ $entity->template }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('pages::page.slug') }}
            <th>
            <td>
            {{ $entity->slug }}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('pages::page.intro') }}
            <th>
            <td>
            {!! $entity->intro !!}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('pages::page.body') }}
            <th>
            <td>
            {!! $entity->body !!}
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('pages::page.active') }}
            <th>
            <td>
            {{ $entity->active ? 'Sim' : 'Não' }}
            <td>
        </tr>


        @if($entity->deleted_at)
            <tr>
                <th>
                {{ trans('pages::page.deleted_at') }}
                <th>
                <td>
                    {{  $entity->deleted_at->format('d/m/Y H:i:s') }}
                    ({{ $entity->deleted_at->diffForHumans() }})
                <td>
            </tr>
        @endif


        <tr>
            <th>
            {{ trans('pages::page.created_at') }}
            <th>
            <td>
                {{  $entity->created_at->format('d/m/Y H:i:s') }}
                ({{ $entity->created_at->diffForHumans() }})
            <td>
        </tr>


        <tr>
            <th>
            {{ trans('pages::page.updated_at') }}
            <th>
            <td>
                {{  $entity->updated_at->format('d/m/Y H:i:s') }}
                ({{ $entity->updated_at->diffForHumans() }})
            <td>
        </tr>

        </tbody>

    </table>
</div>