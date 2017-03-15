<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                {{ panel()->getNamespace($provider) }}\Http\Controllers\Api\{{ $entity['instance']->getEntityDomain() }}
                \{{ $entity['reflectionClass']->getShortName() }}Controller.php
            </div>
            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.units.controllers.controller_api_tpl")
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default no-margin-bottom">
            <div class="panel-heading">
                {{ panel()->getNamespace($provider) }}\Http\Controllers\Web\{{ $entity['instance']->getEntityDomain() }}
                \{{ $entity['reflectionClass']->getShortName() }}Controller.php
            </div>
            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.units.controllers.controller_web_tpl")
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>