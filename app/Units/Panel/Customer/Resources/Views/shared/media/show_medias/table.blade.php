<div class="col-md-12">

    <h4>{{ trans("{$entity->getEntityDomainAlias()}::{$entity->getEntityTranslationKey()}.media_attached_to_this_entity") }}</h4>
    <hr>

    @include("{$panel->unitAlias()}::shared.media.media_list")

</div>