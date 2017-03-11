<div class="panel panel-default">
    <div class="list-group">

        @foreach($entities as $entity)

            <a href="{{ route("dev.entities.show", [
                'className'            => $entity['className'],
                'entityDomainAlias'    => $entity['entityDomainAlias'],
                'entityTranslationKey' => $entity['entityTranslationKey'],
                ]) }}"
                class="list-group-item {{ request()->is("dev/entities/{$entity['entityDomainAlias']}/{$entity['entityTranslationKey']}") ? 'active' : '' }}">
                <i class="{{ $entity['entityIcon'] }}">&nbsp;</i>
                {{ trans("{$entity['entityDomainAlias']}::{$entity['entityTranslationKey']}.entityName") }}
            </a>

        @endforeach

    </div>
</div>
