<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">ZusCoffee</p>
            <p class="app-sidebar__user-designation">Handcrafted Coffee</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="{{ route('admin.dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>

            <a class="app-menu__item" href="{{ route('admin.products.index') }}" ><i class="app-menu__icon fa fa-cogs"></i>
                <span class="app-menu__label">Products</span>
            </a>
        </li>
    </ul>
</aside>
