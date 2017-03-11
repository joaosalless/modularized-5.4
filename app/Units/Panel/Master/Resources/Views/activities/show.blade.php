@extends("{$panel->unitAlias()}::layouts.domains.default.show")

@section('content')
    @parent
@endsection

@section('content')
    <div class="panel panel-default">

        <div class="panel-heading">
            <i class="{{ $entity->getEntityIcon() }}"></i>
            {{ Str::upper($entity->getEntityName()) }}
        </div>

        <div class="panel-body" style="padding-bottom: 0;">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="{{ !session('tab_active') || session('tab_active') == 'cadastro' ? 'active' : '' }}"><a href="#cadastro" aria-controls="cadastro" role="tab" data-toggle="tab">Dados</a></li>
            </ul>
        </div>

        <div class="panel-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane {{ !session('tab_active') || session('tab_active') == 'cadastro' ? 'active' : '' }}" id="cadastro">
                    <div class="row">
                        @include("{$panel->unitAlias()}::{$entity->getEntityViewsAlias()}.show_table")
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
