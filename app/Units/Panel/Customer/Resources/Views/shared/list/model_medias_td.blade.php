
@if( in_array('images', $model->getEntityAllowedMedias()) )
    <td>
        {{ $model->getMedia('images')->count() }}
    </td>
@endif

@if( in_array('videos', $model->getEntityAllowedMedias()) )
    <td>
        {{ $model->getMedia('videos')->count() }}
    </td>
@endif

@if( in_array('audios', $model->getEntityAllowedMedias()) )
    <td>
        {{ $model->getMedia('audios')->count() }}
    </td>
@endif

@if( in_array('documents', $model->getEntityAllowedMedias()) )
    <td>
        {{ $model->getMedia('documentos')->count() }}
    </td>
@endif
