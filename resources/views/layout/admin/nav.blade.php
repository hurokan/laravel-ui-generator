<span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>
<ul class="list-unstyled">
@includeIf('layout.admin.nav-routes')
</ul><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Configurations</span>
<ul class="list-unstyled">
    <li class="sidebar-item"><a class="sidebar-link" href="{{route('app-generator.index')}}">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                <use xlink:href="#"></use>
            </svg>
            Module Generator </a>
    </li>
</ul>
