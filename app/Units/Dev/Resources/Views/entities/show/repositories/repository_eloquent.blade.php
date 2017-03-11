<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default no-margin-bottom">

            <div class="panel-heading">
                {{ $entity['reflectionClass']->getNamespaceName() }}\Repositories\{{ $entity['reflectionClass']->getShortName() }}RepositoryEloquent.php
            </div>

            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.repositories.repository_eloquent_tpl")
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>