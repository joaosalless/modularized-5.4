<pre>
<code class="{{ $language }}" id="{{ $id }}">
@section('code_content')
@show
@yield('code_content')
</code>
<button
    class="btnToClipboard btn btn-default btn-sm"
    data-clipboard-target="#{{ $id }}"
    data-toggle="tooltip"
    data-placement="top"
    title="Copy to clipboard"
><i class="fa fa-clipboard"></i> COPY</button>
</pre>