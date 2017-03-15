<div class="row">
    <div class="col-md-12">

        <ul class="nav nav-pills" role="tablist" style="margin-bottom: 15px;">
            <li role="presentation" class="active">
                <a href="#{{ $provider }}_routes" aria-controls="{{ $provider }}_routes" role="tab" data-toggle="tab">
                    Routes
                </a>
            </li>
            <li role="presentation" class="">
                <a href="#{{ $provider }}_controllers" aria-controls="{{ $provider }}_controllers" role="tab" data-toggle="tab">
                    Controllers
                </a>
            </li>
            <li role="presentation" class="">
                <a href="#{{ $provider }}_views" aria-controls="{{ $provider }}_views" role="tab" data-toggle="tab">
                    Views
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="{{ $provider }}_routes">
                @include("dev::entities.show.units.routes.show")
            </div>
            <div role="tabpanel" class="tab-pane" id="{{ $provider }}_controllers">
                @include("dev::entities.show.units.controllers.show")
            </div>
            <div role="tabpanel" class="tab-pane" id="{{ $provider }}_views">
                @include("dev::entities.show.units.views.show")
            </div>
        </div>

    </div>
</div>