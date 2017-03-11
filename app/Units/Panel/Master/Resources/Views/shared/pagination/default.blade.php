@if ($collection->total() > 0)
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 pull-left" style="padding: 0px 20px; line-height: 36px;">
            <strong>{{ $collection->total() }}</strong>
            {!! $collection->total() > 1
                ? trans('pagination.registers')
                : trans('pagination.register')
            !!}.
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 pull-right" style="height: 36px">
            <div class="pull-right">
                {!! $collection->appends(request()->except('page'))->render()!!}
            </div>
        </div>
    </div>
@endif