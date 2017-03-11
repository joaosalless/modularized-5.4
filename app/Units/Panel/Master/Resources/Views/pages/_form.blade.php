<div class="row">

    <div class="col-md-12">
        {{ Form::bsSelect('category_id', trans('pages::page.category'), $categories, null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsText('title', trans('pages::page.title'), null, []) }}
    </div>


    {{--<div class="col-md-12">--}}
    {{--{{ Form::bsText('template', trans('pages::page.template'), null, []) }}--}}
    {{--</div>--}}


    <div class="col-md-12">
        {{ Form::bsText('slug', trans('pages::page.slug'), null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsTextarea('intro', trans('pages::page.intro'), null, []) }}
    </div>


    <div class="col-md-12">
        {{ Form::bsTextarea('body', trans('pages::page.body'), null, []) }}
    </div>


    {{--<div class="col-md-12">--}}
    {{--{{ Form::bsTextarea('seo', trans('pages::page.seo'), null, []) }}--}}
    {{--</div>--}}


    <div class="col-md-6">
        {{ Form::bsCheckbox('active', $entity->getLabel('active'), 1, null, []) }}
    </div>

</div>