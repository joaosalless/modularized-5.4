<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default" style="margin-bottom: 15px">

            <div class="panel-heading">
                {{ $entity['reflectionClass']->getNamespaceName() }}\Presenters\{{ $entity['reflectionClass']->getShortName() }}FractalPresenter.php
            </div>

            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.presenters.fractal_presenter_tpl")
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>