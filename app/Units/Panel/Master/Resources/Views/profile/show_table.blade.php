<div class="col-md-12">
    <h4>
        Dados cadastrais
        <a href="{{ route("{$panel->routeAlias()}.profile.edit") }}" class="btn btn-sm btn-primary pull-right"
           style="margin-top: -8px">
            EDITAR CADASTRO
        </a>
    </h4>
    <hr class="no-margin-bottom" style="margin-bottom: -1px;">
    <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}">
        <tbody>

        <tr>
            <th>
            {{ $entity->getLabel('user_id') }}
            <th>
            <td>
            {{ $entity->id }}
            <td>
        </tr>

        {{--<tr>--}}
            {{--<th>--}}
            {{--{{ $entity->getLabel('username') }}--}}
            {{--<th>--}}
            {{--<td>--}}
            {{--{{ $entity->present()->getUsername }}--}}
            {{--<td>--}}
        {{--</tr>--}}

        <tr>
            <th>
            {{ $entity->getLabel('email') }}
            <th>
            <td>
            {{ $entity->present()->getEmail }}
            <td>
        </tr>

        @if($entity->profile)

            <tr>
                <th>
                {{ $entity->getLabel('profile_type') }}
                <th>
                <td>
                {{ trans("abstracts_user::user.{$entity->profile_type}") }}
                <td>
            </tr>

            @if($entity->isCompany())
                @include("{$panel->unitAlias()}::profile.show_table_company")
            @endif

            @if($entity->isPerson())
                @include("{$panel->unitAlias()}::profile.show_table_person")
            @endif

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

        @endif

        </tbody>

    </table>
</div>