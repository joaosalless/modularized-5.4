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
            {{ $entity->getLabel('name') }}
            <th>
            <td>
            {{ $entity->present()->getName }}
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
            {{ $entity->getLabel('phone') }}
            <th>
            <td>
            {{ $entity->present()->getPhone }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('cep') }}
            <th>
            <td>
            {{ $entity->present()->getCep }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('logradouro') }}
            <th>
            <td>
            {{ $entity->present()->getLogradouro }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('numero') }}
            <th>
            <td>
            {{ $entity->present()->getNumero }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('complemento') }}
            <th>
            <td>
            {{ $entity->present()->getComplemento }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('observacao') }}
            <th>
            <td>
            {{ $entity->present()->getObservacao }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('bairro') }}
            <th>
            <td>
            {{ $entity->present()->getBairro }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('municipio') }}
            <th>
            <td>
            {{ $entity->present()->getMunicipio }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('uf') }}
            <th>
            <td>
            {{ $entity->present()->getUf }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('ibge') }}
            <th>
            <td>
            {{ $entity->present()->getIbge }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('accept_html') }}
            <th>
            <td>
            {{ $entity->present()->getAcceptHtml }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('auto_reply') }}
            <th>
            <td>
            {{ $entity->present()->getAutoReply }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('save_messages') }}
            <th>
            <td>
            {{ $entity->present()->getSaveMessages }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('require_captcha') }}
            <th>
            <td>
            {{ $entity->present()->getRequireCaptcha }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('reply_message_site') }}
            <th>
            <td>
            {{ $entity->present()->getReplyMessageSite }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('reply_message_email') }}
            <th>
            <td>
            {{ $entity->present()->getReplyMessageEmail }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('intro') }}
            <th>
            <td>
            {{ $entity->present()->getIntro }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('body') }}
            <th>
            <td>
            {{ $entity->present()->getBody }}
            <td>
        </tr>

        <tr>
            <th>
            {{ $entity->getLabel('layout') }}
            <th>
            <td>
            {{ $entity->present()->getLayout }}
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