<div class="row">

    <div class="col-md-12">
        <div class="panel panel-default">

            <div class="panel-heading">
                {{ snake_case($entity['reflectionClass']->getShortName()) }}.form.blade.php
            </div>

            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.units.views.form_tpl")
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default no-margin-bottom">

            <div class="panel-heading">
                {{ snake_case($entity['reflectionClass']->getShortName()) }}.show_table.blade.php
            </div>

            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-12">
                        @include("dev::entities.show.units.views.show_table_tpl")
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>