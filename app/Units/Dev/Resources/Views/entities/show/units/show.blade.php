<div class="row">
    <div class="col-md-12">

        <ul class="nav nav-pills" role="tablist" style="margin-bottom: 15px;">
            @foreach(array_except(config('auth.providers'), ['dev']) as $provider => $value)
                <li role="presentation" class="{{ $loop->first ? 'active' : '' }}">
                    <a href="#unit_{{ $provider }}" aria-controls="unit_{{ $provider }}" role="tab" data-toggle="tab">
                        Panel {{ ucfirst($provider) }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content">
            @foreach(array_except(config('auth.providers'), ['dev']) as $provider => $value)
                <div role="tabpanel" class="tab-pane {{ $loop->first ? 'active' : '' }}" id="unit_{{ $provider }}">
                    <div class="panel panel-default no-margin-bottom">
                        <div class="panel-heading">
                            {{ panel()->getNamespace($provider) }}
                        </div>
                        <div class="panel-body">
                            @include("dev::entities.show.units.show_unit_details")
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>