@extends("dev::layouts.app")

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            <i class="{{ $entity['entityIcon'] }}"></i>
            {{ $entity['entityName'] }}
        </div>

        <div class="panel-body border-bottom">

            <ul class="nav nav-pills" role="tablist">

                <li role="presentation" class="active">
                    <a href="#domain" aria-controls="domain" role="tab" data-toggle="tab">
                        {{ trans('dev::entity.domain') }}
                    </a>
                </li>

                <li role="presentation">
                    <a href="#units" aria-controls="units" role="tab" data-toggle="tab">
                        {{ trans('dev::entity.units') }}
                    </a>
                </li>

            </ul>
        </div>

        <div class="panel-body no-margin-bottom">

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="domain">
                    @include("dev::entities.show.domain.show")
                </div>

                <div role="tabpanel" class="tab-pane" id="units">
                    @include("dev::entities.show.units.show")
                </div>

            </div>
        </div>

    </div>

@stop
