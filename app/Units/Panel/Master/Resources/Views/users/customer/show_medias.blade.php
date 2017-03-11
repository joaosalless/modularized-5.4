<div class="col-md-12">
    <h4>Mídias anexadas a est{{ $entity->getEntityGender() == 'M' ? 'e' : 'a' }} {{ Str::title($entity->getEntityShortName()) }}</h4>
    <hr>
    @include("{$panel->unitAlias()}::shared.media.media_list")
</div>