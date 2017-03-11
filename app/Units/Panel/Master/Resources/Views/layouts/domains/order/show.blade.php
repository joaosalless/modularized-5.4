@extends("{$panel->unitAlias()}::layouts.app")

@section('content')

    <div class="panel panel-default no-margin-bottom">

        <div class="panel-heading">
            <i class="{{ $entity->getEntityIcon() }}"></i>
            {{ Str::upper($entity->getEntityName()) }}
        </div>

        <div class="panel-body" style="padding-bottom: 0;">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="{{ !session('tab_active') || session('tab_active') == 'cadastro' ? 'active' : '' }}"><a href="#cadastro" aria-controls="cadastro" role="tab" data-toggle="tab">Dados</a></li>
                <li role="presentation" class="{{ session('tab_active') && session('tab_active') == 'medias' ? 'active' : '' }}"><a href="#medias" aria-controls="medias" role="tab" data-toggle="tab">Mídias</a></li>
                {{--<li role="presentation" class="{{ session('tab_active') && session('tab_active') == 'access_log' ? 'active' : '' }}"><a href="#access_log" aria-controls="access_log" role="tab" data-toggle="tab">Histórico</a></li>--}}
            </ul>
        </div>

        <div class="panel-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane {{ !session('tab_active') || session('tab_active') == 'cadastro' ? 'active' : '' }}" id="cadastro">
                    <div class="row">
                        @include("{$panel->unitAlias()}::{$entity->getEntityViewsAlias()}.show_table")
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane {{ session('tab_active') && session('tab_active') == 'medias' ? 'active' : '' }}" id="medias">
                    <div class="row">
                        @include("{$panel->unitAlias()}::shared.media.show_medias.table")
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop
