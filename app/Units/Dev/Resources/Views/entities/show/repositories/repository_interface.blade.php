<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default" style="margin-bottom: 15px">

            <div class="panel-heading">
                {{ $entity['reflectionClass']->getNamespaceName() }}\Repositories\{{ $entity['reflectionClass']->getShortName() }}Repository.php
            </div>

            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.repositories.repository_interface_tpl")
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>