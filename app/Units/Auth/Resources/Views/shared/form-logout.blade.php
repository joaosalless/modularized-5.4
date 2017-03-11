<form id="logout-form" action="{{ $panel->authUrl('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>