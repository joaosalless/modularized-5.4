@if (session()->has('alert.messages'))
    @foreach (session()->pull('alert.messages') as $message)
        @if ($message['overlay'])
            @include('alert::templates.foundation.modal', [
                'modalClass' => 'alert-modal',
                'title'      => $message['title'],
                'body'       => $message['message']
            ])
        @else
            <div data-alert class="alert-box {{ $message['level'] }} {{ $styleClass or '' }}">
                @if (is_a($message['message'], 'Illuminate\Support\MessageBag'))
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($message['message']->all('<li>:message</li>') as $error)
                        {!! $error !!}
                    @endforeach
                </ul>
                @else
                    @if ( isset($message['title']) )
                        <strong>{!! $message['title'] !!}</strong>
                    @endif

                    <p>{!! $message['message'] !!}</p>

                    <a href="#" class="close">&times;</a>
                @endif
            </div>
        @endif
    @endforeach
@endif
