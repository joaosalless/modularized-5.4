
@if( in_array('images', $model->model ? $model->model->getEntityAllowedMedias() : $model->getEntityAllowedMedias()) )
    <td>
        {{ $model->getMedia('images')->count() }}
    </td>
@endif

@if( in_array('videos', $model->model ? $model->model->getEntityAllowedMedias() : $model->getEntityAllowedMedias()) )
    <td>
        {{ $model->getMedia('videos')->count() }}
    </td>
@endif

@if( in_array('audios', $model->model ? $model->model->getEntityAllowedMedias() : $model->getEntityAllowedMedias()) )
    <td>
        {{ $model->getMedia('audios')->count() }}
    </td>
@endif

@if( in_array('documents', $model->model ? $model->model->getEntityAllowedMedias() : $model->getEntityAllowedMedias()) )
    <td>
        {{ $model->getMedia('documentos')->count() }}
    </td>
@endif
