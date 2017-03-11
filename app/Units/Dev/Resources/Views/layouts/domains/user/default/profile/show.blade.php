@extends("dev::layouts.app")

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            <i class="{{ $entity->getEntityIcon() }}"></i>
            {{ Str::upper(trans($entity->getEntityDomainAlias().'::'.$entity->getEntityTranslationKey().'.my_account')) }}
        </div>

        <div class="panel-body" style="padding-bottom: 0;">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="{{ !session('tab_active') || session('tab_active') == 'cadastro' ? 'active' : '' }}">
                    <a href="#cadastro" aria-controls="cadastro" role="tab" data-toggle="tab">
                        {{ trans($entity->getEntityDomainAlias().'::'.$entity->getEntityTranslationKey().'.account') }}
                    </a>
                </li>
                <li role="presentation" class="{{ session('tab_active') && session('tab_active') == 'update_password' ? 'active' : '' }}">
                    <a href="#update_password" aria-controls="update_password" role="tab" data-toggle="tab">Senha</a>
                </li>
                <li role="presentation" class="{{ session('tab_active') && session('tab_active') == 'access_log' ? 'active' : '' }}">
                    <a href="#access_log" aria-controls="access_log" role="tab" data-toggle="tab">Histórico</a>
                </li>
            </ul>
        </div>

        <div class="panel-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane {{ !session('tab_active') || session('tab_active') == 'cadastro' ? 'active' : '' }}" id="cadastro">
                    <div class="row">
                        @include("{$panel->unitAlias()}::profile.show_table")
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane {{ session('tab_active') && session('tab_active') == 'update_password' ? 'active' : '' }}" id="update_password">
                    <div class="row">
                        @include("{$panel->unitAlias()}::profile.update_password")
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane {{ session('tab_active') && session('tab_active') == 'access_log' ? 'active' : '' }}" id="access_log">
                    <div class="row">
                        @include("{$panel->unitAlias()}::profile.access_log")
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
