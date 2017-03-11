@extends('site::layouts.app')

@section('content')

    <section class="page-section contact-page">
        <div class="container">
            <h1 class="page-title text-center">
                {{ $page->title }}
            </h1>
            <div class="page-body">
                {!! $page->body !!}
            </div>
        </div>
    </section>

@endsection