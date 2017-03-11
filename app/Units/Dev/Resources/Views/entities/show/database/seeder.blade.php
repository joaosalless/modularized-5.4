<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default no-margin-bottom">

            <div class="panel-heading">
                {{ $entity['reflectionClass']->getNamespaceName() }}\Database\Seeders\{{ $entity['reflectionClass']->getShortName() }}Seeder.php
            </div>

            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.database.seeder_tpl")
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>