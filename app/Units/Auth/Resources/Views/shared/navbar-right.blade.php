<ul class="nav navbar-nav navbar-right">
    @if (Auth::guard($panel->guardWeb())->guest())
        <li><a href="{{ $panel->authUrl('login_form') }}">Login</a></li>
        <li><a href="{{ $panel->authUrl('register') }}">Cadastro</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <i class="fa fa-user-o"></i> {{ Auth::guard($panel->guardWeb())->user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route("{$panel->routeAlias()}.profile.show") }}">
                        {{ trans("{$panel->makeGuardModel()->getEntityDomainAlias()}::{$panel->makeGuardModel()->getEntityTranslationKey()}.my_account") }}
                    </a>
                </li>
                <li>
                    <a href="{{ $panel->authUrl('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ trans("{$panel->makeGuardModel()->getEntityDomainAlias()}::{$panel->makeGuardModel()->getEntityTranslationKey()}.logout") }}
                    </a>
                </li>
            </ul>
        </li>
    @endif
</ul>

@include("auth::shared.form-logout")