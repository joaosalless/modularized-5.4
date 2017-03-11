@extends("{$panel->unitAlias()}::layouts.app")

@section('content')
    <div class="panel panel-default">

        <div class="panel-heading">
            <i class="fa fa-dashboard"></i>
            {{ Str::upper(trans("{$panel->unitAlias()}::panel.dashboard")) }}
        </div>

        <div class="panel-body">
            <div class="col-md-12">
                @include("{$panel->unitAlias()}::dashboard.widgets")
            </div>
        </div>

    </div>
@endsection
