<div class="panel panel-default">

    {{--<nav class="navigation">--}}
        {{--{{ Menu::main() }}--}}
    {{--</nav>--}}

    <div class="list-group">

        <a href="{{ route("{$panel->routeAlias()}.dashboard.index") }}"
           class="list-group-item {{ isActiveRoute("{$panel->routeAlias()}.dashboard*", $output = "active") }}">
            <i class="fa fa-fw fa-dashboard">&nbsp;</i> {{ trans("{$panel->routeAlias()}::panel.dashboard") }}
        </a>

        <a href="{{ route("{$panel->routeAlias()}.activities.index") }}"
           class="list-group-item {{ isActiveRoute("{$panel->routeAlias()}.activities.*", $output = "active") }}">
            <i class="fa fa-fw fa-clock-o">&nbsp;</i> {{ trans("activities::activity.entityNamePlural") }}
        </a>

        <a href="{{ route("{$panel->routeAlias()}.pages_categories.index") }}"
           class="list-group-item {{ isActiveRoute("{$panel->routeAlias()}.pages_categories.*", $output = "active") }}">
            <i class="fa fa-fw fa-folder">&nbsp;</i> {{ trans("pages::category.entityNamePlural") }}
        </a>

        <a href="{{ route("{$panel->routeAlias()}.medias_categories.index") }}"
           class="list-group-item {{ isActiveRoute("{$panel->routeAlias()}.medias_categories.*", $output = "active") }}">
            <i class="fa fa-fw fa-folder">&nbsp;</i> {{ trans("medias::category.entityNamePlural") }}
        </a>

        <a href="{{ route("{$panel->routeAlias()}.contacts.index") }}"
           class="list-group-item {{ isActiveRoute("{$panel->routeAlias()}.contacts.*", $output = "active") }}">
            <i class="fa fa-fw fa-address-book">&nbsp;</i> {{ trans("contacts::contact.entityNamePlural") }}
        </a>

        <a href="{{ route("{$panel->routeAlias()}.contacts-messages.index") }}"
           class="list-group-item {{ isActiveRoute("{$panel->routeAlias()}.contacts-messages.*", $output = "active") }}">
            <i class="fa fa-fw fa-envelope">&nbsp;</i> {{ trans("contacts::message.entityNamePlural") }}
        </a>

        <a href="{{ route("{$panel->routeAlias()}.pages.index") }}"
           class="list-group-item {{ isActiveRoute("{$panel->routeAlias()}.pages.*", $output = "active") }}">
            <i class="fa fa-fw fa-file-text">&nbsp;</i> {{ trans("pages::page.entityNamePlural") }}
        </a>

        <a href="{{ route("{$panel->routeAlias()}.medias.index") }}"
           class="list-group-item {{ isActiveRoute("{$panel->routeAlias()}.medias.*", $output = "active") }}">
            <i class="fa fa-fw fa-image">&nbsp;</i> {{ trans("medias::media.entityNamePlural") }}
        </a>

        <a href="{{ route("{$panel->routeAlias()}.users_customer.index") }}"
           class="list-group-item {{ isActiveRoute("{$panel->routeAlias()}.users_customer.*", $output = "active") }}">
            <i class="fa fa-fw fa-users">&nbsp;</i> {{ trans("customer_users::user.entityNamePlural") }}
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
