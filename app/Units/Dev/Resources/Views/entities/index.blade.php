@extends('dev::layouts.app')

@section('content')

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        @foreach($entities as $entity)

            <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="heading_{{ $loop->index }}">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapse_{{ $loop->index }}"
                           aria-expanded="true" aria-controls="collapse_{{ $loop->index }}">
                            {{ $entity['entityName'] }}
                        </a>
                    </h4>
                </div>

                <div id="collapse_{{ $loop->index }}" class="panel-collapse collapse"
                     role="tabpanel" aria-labelledby="heading_{{ $loop->index }}">
                    <div class="panel-body" style="padding: 0; border-width: 0px; border-radius:0;">
                        @include('dev::entities.entity')
                    </div>
                </div>

            </div>

        @endforeach

    </div>

@endsection
