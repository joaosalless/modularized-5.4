<div class="panel panel-default">

    {{--<nav class="navigation">--}}
        {{--{{ Menu::main() }}--}}
    {{--</nav>--}}

    <div class="list-group">

        <a href="{{ route("{$panel->routeAlias()}.dashboard.index") }}"
           class="list-group-item {{ isActiveRoute("{$panel->routeAlias()}.dashboard*", $output = "active") }}">
            <i class="fa fa-fw fa-dashboard">&nbsp;</i> {{ trans("{$panel->routeAlias()}::panel.dashboard") }}
        </a>

        <a href="{{ route("{$panel->routeAlias()}.profile.show") }}"
           class="list-group-item {{ isActiveRoute("{$panel->routeAlias()}.profile.*", $output = "active") }}">
            <i class="fa fa-fw fa-user">&nbsp;</i> {{ trans("master_users::user.profile") }}
        </a>

        <a href="{{ $panel->authUrl('logout') }}"
           class="list-group-item"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-fw fa-sign-out">&nbsp;</i> {{ trans("master_users::user.logout") }}
        </a>

    </div>
</div>
