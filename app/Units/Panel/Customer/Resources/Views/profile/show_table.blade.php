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
                <th style="width: 200px;">
                    ID
                <th>
                <td>
                {{ $entity->profile->id }}
                <td>
            </tr>

            <tr>
                <th style="width: 200px;">
                    Email
                <th>
                <td>
                {{ $entity->email }}
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
                    Criado em
                <th>
                <td>
                    {{ $entity->profile->created_at->format('d/m/Y H:i:s') }}
                    ({{ $entity->profile->created_at->diffForHumans() }})
                <td>
            </tr>

            <tr>
                <th>
                    Atualizado em
                <th>
                <td>
                    {{ $entity->profile->updated_at->format('d/m/Y H:i:s') }}
                    ({{ $entity->profile->updated_at->diffForHumans() }})
                <td>
            </tr>

        </tbody>

    </table>
</div>