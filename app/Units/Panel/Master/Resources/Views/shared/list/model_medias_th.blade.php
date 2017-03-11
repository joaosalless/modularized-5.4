
@if( in_array('images', $entity->getEntityAllowedMedias()) )
    <th><i class="fa fa-image"></i></th>
@endif

@if( in_array('videos', $entity->getEntityAllowedMedias()) )
    <th><i class="fa fa-video-camera"></i></th>
@endif

@if( in_array('audios', $entity->getEntityAllowedMedias()) )
    <th><i class="fa fa-volume-up"></i></th>
@endif

@if( in_array('documents', $entity->getEntityAllowedMedias()) )
    <th><i class="fa fa-file-text"></i></th>
@endif
