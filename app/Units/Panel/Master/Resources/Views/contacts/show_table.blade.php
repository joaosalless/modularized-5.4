<div class="col-md-12">

    @include("{$panel->unitAlias()}::shared.show_table.header")

    <table class="{{ $panel->unitConfig()['theme']['table']['class'] }} {{ $entity->deleted_at ? 'bg-danger' : '' }}">
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
                {{ $entity->getLabel('name') }}
            <th>
            <td>
                {{ $entity->name }}
            <td>
        </tr>


        <tr>
            <th>
                {{ $entity->getLabel('email') }}
            <th>
            <td>
                {{ $entity->email }}
            <td>
        </tr>


        <tr>
            <th>
                {{ $entity->getLabel('phone') }}
            <th>
            <td>
                {{ $entity->phone }}
            <td>
        </tr>


        <tr>
            <th>
            {{ $entity->getLabel('cep') }}
            <th>
            <td>
            {{ $entity->cep }}
            <td>
        </tr>


        <tr>
            <th>
            {{ $entity->getLabel('logradouro') }}
            <th>
            <td>
            {{ $entity->logradouro }}
            <td>
        </tr>


        <tr>
            <th>
            {{ $entity->getLabel('numero') }}
            <th>
            <td>
            {{ $entity->numero }}
            <td>
        </tr>


        <tr>
            <th>
            {{ $entity->getLabel('complemento') }}
            <th>
            <td>
            {{ $entity->complemento }}
            <td>
        </tr>


        <tr>
            <th>
            {{ $entity->getLabel('bairro') }}
            <th>
            <td>
            {{ $entity->bairro }}
            <td>
        </tr>


        <tr>
            <th>
            {{ $entity->getLabel('municipio') }}
            <th>
            <td>
            {{ $entity->municipio }}
            <td>
        </tr>


        <tr>
            <th>
            {{ $entity->getLabel('uf') }}
            <th>
            <td>
            {{ $entity->uf }}
            <td>
        </tr>


        <tr>
            <th>
            {{ $entity->getLabel('ibge') }}
            <th>
            <td>
            {{ $entity->ibge }}
            <td>
        </tr>


        <tr>
            <th>
                {{ $entity->getLabel('accept_html') }}
            <th>
            <td>
                {{ $entity->accept_html ? 'Sim' : 'Não' }}
            <td>
        </tr>


        <tr>
            <th>
                {{ $entity->getLabel('auto_reply') }}
            <th>
            <td>
                {{ $entity->auto_reply ? 'Sim' : 'Não' }}
            <td>
        </tr>


        <tr>
            <th>
                {{ $entity->getLabel('save_messages') }}
            <th>
            <td>
                {{ $entity->save_messages ? 'Sim' : 'Não' }}
            <td>
        </tr>


        <tr>
            <th>
                {{ $entity->getLabel('require_captcha') }}
            <th>
            <td>
                {{ $entity->require_captcha ? 'Sim' : 'Não' }}
            <td>
        </tr>


        <tr>
            <th>
                {{ $entity->getLabel('reply_message_site') }}
            <th>
            <td>
                {!! $entity->reply_message_site !!}
            <td>
        </tr>


        <tr>
            <th>
                {{ $entity->getLabel('reply_message_email') }}
            <th>
            <td>
                {!! $entity->reply_message_email !!}
            <td>
        </tr>


        <tr>
            <th>
                {{ $entity->getLabel('active') }}
            <th>
            <td>
                {{ $entity->active ? 'Sim' : 'Não' }}
            <td>
        </tr>


        @if($entity->deleted_at)
            <tr>
                <th>
                    {{ $entity->getLabel('deleted_at') }}
                <th>
                <td>
                    {{  $entity->deleted_at->format('d/m/Y H:i:s') }}
                    ({{ $entity->deleted_at->diffForHumans() }})
                <td>
            </tr>
        @endif


        <tr>
            <th>
                {{ $entity->getLabel('created_at') }}
            <th>
            <td>
                {{  $entity->created_at->format('d/m/Y H:i:s') }}
                ({{ $entity->created_at->diffForHumans() }})
            <td>
        </tr>


        <tr>
            <th>
                {{ $entity->getLabel('updated_at') }}
            <th>
            <td>
                {{  $entity->updated_at->format('d/m/Y H:i:s') }}
                ({{ $entity->updated_at->diffForHumans() }})
            <td>
        </tr>

        </tbody>

    </table>
</div>