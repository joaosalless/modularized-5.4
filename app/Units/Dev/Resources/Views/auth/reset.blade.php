@extends("auth::reset")

@section('head_styles')
    <style>
        body {
            background: url({{asset('/img/panels/dev/bg.jpg')}}) center center;
        }
    </style>
@endsection

@section('content')
    @parent
@endsection