@extends("dev::layouts.app")

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            <i class="{{ $entity['entityIcon'] }}"></i>
            {{ $entity['entityName'] }}
        </div>

        {{--<div class="panel-body border-bottom">--}}
            {{--<a href="{{ route("dev.entities.write", [--}}
                {{--'className'            => $entity['className'],--}}
                {{--'entityDomainAlias'    => $entity['entityDomainAlias'],--}}
                {{--'entityTranslationKey' => $entity['entityTranslationKey'],--}}
                    {{--]) }}"--}}
                {{--class="btn btn-primary btn-sm pull-right">--}}
                {{--{{ trans('dev::entity.update_domain_files') }}--}}
            {{--</a>--}}
        {{--</div>--}}

        <div class="panel-body" style="padding-bottom: 0;">

            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active">
                    <a href="#models" aria-controls="models" role="tab" data-toggle="tab">
                        {{ trans('dev::entity.model') }}
                    </a>
                </li>

                <li role="presentation">
                    <a href="#database" aria-controls="database" role="tab" data-toggle="tab">
                        {{ trans('dev::entity.database') }}
                    </a>
                </li>

                <li role="presentation">
                    <a href="#presenters" aria-controls="presenters" role="tab" data-toggle="tab">
                        {{ trans('dev::entity.presenters') }}
                    </a>
                </li>

                <li role="presentation">
                    <a href="#repositories" aria-controls="repositories" role="tab" data-toggle="tab">
                        {{ trans('dev::entity.repository') }}
                    </a>
                </li>

                <li role="presentation">
                    <a href="#rules" aria-controls="rules" role="tab" data-toggle="tab">
                        {{ trans('dev::entity.rules') }}
                    </a>
                </li>

                <li role="presentation">
                    <a href="#transformers" aria-controls="transformers" role="tab" data-toggle="tab">
                        {{ trans('dev::entity.transformers') }}
                    </a>
                </li>

                <li role="presentation">
                    <a href="#translations" aria-controls="translations" role="tab" data-toggle="tab">
                        {{ trans('dev::entity.translations') }}
                    </a>
                </li>

                <li role="presentation">
                    <a href="#views" aria-controls="views" role="tab" data-toggle="tab">
                        {{ trans('dev::entity.views') }}
                    </a>
                </li>

            </ul>
        </div>

        <div class="panel-body">

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="models">
                    @include("dev::entities.show.models.model")
                </div>

                <div role="tabpanel" class="tab-pane" id="database">
                    @include("dev::entities.show.database.factory")
                    @include("dev::entities.show.database.seeder")
                </div>

                <div role="tabpanel" class="tab-pane" id="presenters">
                    @include("dev::entities.show.presenters.fractal_presenter")
                    @include("dev::entities.show.presenters.view_presenter")
                </div>

                <div role="tabpanel" class="tab-pane" id="repositories">
                    @include("dev::entities.show.repositories.repository_interface")
                    @include("dev::entities.show.repositories.repository_eloquent")
                </div>

                <div role="tabpanel" class="tab-pane" id="rules">
                    @include("dev::entities.show.rules.rules")
                </div>

                <div role="tabpanel" class="tab-pane" id="transformers">
                    @include("dev::entities.show.transformers.transformer")
                </div>

                <div role="tabpanel" class="tab-pane" id="translations">
                    @include("dev::entities.show.translations.translations")
                </div>

                <div role="tabpanel" class="tab-pane" id="views">
                    @include("dev::entities.show.views.views")
                </div>

            </div>
        </div>

    </div>

@stop
