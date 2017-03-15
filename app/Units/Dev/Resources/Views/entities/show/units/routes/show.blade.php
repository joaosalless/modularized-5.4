<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                {{ panel()->getNamespace($provider) }}\Routes\Api.php
            </div>
            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.units.routes.routes_api_tpl")
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default no-margin-bottom">
            <div class="panel-heading">
                {{ panel()->getNamespace($provider) }}\Routes\Web.php
            </div>
            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.units.routes.routes_web_tpl")
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>