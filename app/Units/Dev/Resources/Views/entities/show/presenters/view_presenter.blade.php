<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default no-margin-bottom">

            <div class="panel-heading">
                {{ $entity['reflectionClass']->getNamespaceName() }}\Presenters\{{ $entity['reflectionClass']->getShortName() }}ViewPresenter.php
            </div>

            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.presenters.view_presenter_tpl")
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>