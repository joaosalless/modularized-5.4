<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default no-margin-bottom">

            <div class="panel-heading">
                {{ $entity['reflectionClass']->getNamespaceName() }}\Rules\{{ $entity['reflectionClass']->getShortName() }}Rules.php
            </div>

            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.rules.rules_tpl")
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>