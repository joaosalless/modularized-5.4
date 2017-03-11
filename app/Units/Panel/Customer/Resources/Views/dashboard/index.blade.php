@extends("{$panel->unitAlias()}::layouts.app")

@section('content')
    <div class="panel panel-default">

        <div class="panel-heading">
            <i class="fa fa-dashboard"></i>
            {{ Str::upper(trans("{$panel->unitAlias()}::panel.dashboard")) }}
        </div>

        <div class="panel-body">

        </div>

    </div>
@endsection
