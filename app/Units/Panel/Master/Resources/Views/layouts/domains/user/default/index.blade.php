@extends("{$panel->unitAlias()}::layouts.app")

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            <i class="{{ $entity->getEntityIcon() }}"></i>
            {{ Str::upper($entity->getEntityNamePlural()) }}
        </div>

        <div class="panel-body" style="padding-bottom: 0;">
            <ul class="nav nav-tabs">
                <li class="{{ isActiveRoute("{$panel->routeAlias()}.{$entity->getEntityRouteAlias()}.index", $output = "active") }}" role="presentation">
                    <a href="{{ route($panel->routeAlias().'.'.$entity->getEntityRouteAlias().'.index') }}">
                        {{ trans("{$entity->getEntityDomainAlias()}::{$entity->getEntityTranslationKey()}.active_plural") }}
                    </a>
                </li>
                <li class="{{ isActiveRoute("{$panel->routeAlias()}.{$entity->getEntityRouteAlias()}.trashed", $output = "active") }}" role="presentation">
                    <a href="{{ route($panel->routeAlias().'.'.$entity->getEntityRouteAlias().'.trashed') }}">
                        {{ $entity->getLabel('trash') }}
                    </a>
                </li>
            </ul>
        </div>

        <div class="panel-body">
            <div class="row">
                @include("{$panel->unitAlias()}::{$entity->getEntityViewsAlias()}.index_table")
            </div>
        </div>

        @if ($collection->total() > 0)
            <div class="panel-body" style="border-top: 1px solid #ddd">
                @include("{$panel->unitAlias()}::shared.pagination.default")
            </div>
        @endif

    </div>

@endsection
