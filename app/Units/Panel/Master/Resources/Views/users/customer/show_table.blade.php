<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.show_table.header")

    <table class="{{ $panel->unitConfig()['theme']['table']['class'] }}">

        <tbody>

        <tr>
            <th>
                {{ $entity->getLabel('id') }}
            <th>
            <td>
                {{ $entity->id }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('username') }}
            <th>
            <td>
            {{ $entity->present()->getUsername }}
            <td>
        </tr>

        <tr>
            <th>
                {{ $entity->getLabel('email') }}
            <th>
            <td>
                {{ $entity->present()->getEmail }}
            <td>
        </tr>

        <tr>
            <th>
                {{ $entity->getLabel('profile_id') }}
            <th>
            <td>
                {{ $entity->profile_id }}
            <td>
        </tr>

        <tr>
            <th>
                {{ $entity->getLabel('profile_type') }}
            <th>
            <td>
                {{ trans("abstracts_user::user.{$entity->profile_type}") }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('role') }}
            <th>
            <td>
            {{ $entity->present()->getRole }}
            <td>
        </tr>

        @if($entity->isCompany())
            @include("{$panel->unitAlias()}::profile.show_table_company")
        @endif

        @if($entity->isPerson())
            @include("{$panel->unitAlias()}::profile.show_table_person")
        @endif

        {{--<tr>--}}
            {{--<th>--}}
            {{--{{ $entity->getLabel('email_verified') }}--}}
            {{--<th>--}}
            {{--<td>--}}
            {{--{{ $entity->present()->getEmailVerified }}--}}
            {{--<td>--}}
        {{--</tr>--}}

        {{--<tr>--}}
            {{--<th>--}}
            {{--{{ $entity->getLabel('email_verified_at') }}--}}
            {{--<th>--}}
            {{--<td>--}}
            {{--{{ $entity->present()->getEmailVerifiedAt }}--}}
            {{--<td>--}}
        {{--</tr>--}}

        @if($entity->banned)
        <tr>
            <th>
            {{ $entity->getLabel('banned') }}
            <th>
            <td>
            {{ $entity->present()->getBanned }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('banned_at') }}
            <th>
            <td>
            {{ $entity->present()->getBannedAt }}
            <td>
        </tr>
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

        <tr>
            <th>
            {{ $entity->getLabel('created_at') }}
            <th>
            <td>
            {{ $entity->present()->getCreatedAt }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('updated_at') }}
            <th>
            <td>
            {{ $entity->present()->getUpdatedAt }}
            <td>
        </tr>

        </tbody>

    </table>

</div>