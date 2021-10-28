<li class="nav-item">
    <div>
        <a href="/" class="router-link-exact-active open active nav-link">
            <i class="icon-speedometer"></i> Dashboard
        </a>
    </div>
</li>




{{--<li class="nav-item {{ Request::is('items*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('items.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Items</span>
    </a>
</li>
<li class="nav-item {{ Request::is('catalogItems*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('catalogItems.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Catalog Items</span>
    </a>
</li>--}}

<li class="nav-item nav-dropdown" disabled="disabled"><div class="nav-link nav-dropdown-toggle"><i class="fa fa-book"></i> Catalogo</div>
    <ul class="nav-dropdown-items">
        <li class="nav-item {{ Request::is('items*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('items.index') }}">
                <i class="nav-icon">I</i>
                <span>Catalogo Items</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('categories.index') }}">
                <i class="nav-icon">C</i>
                <span>Categorias</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('authors*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('authors.index') }}">
                <i class="nav-icon">A</i>
                <span>Autors</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('publishers*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('publishers.index') }}">
                <i class="nav-icon">E</i>
                <span>Editoras</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('itemTypes*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('itemTypes.index') }}">
                <i class="nav-icon ">TP</i>
                <span>Tipo Media</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('tags*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('tags.index') }}">
                <i class="nav-icon">T</i>
                <span>Tags</span>
            </a>
        </li>
    </ul>
</li>

</li>
<li class="nav-item nav-dropdown" disabled="disabled"><div class="nav-link nav-dropdown-toggle"> <i class="fa fa-exchange"></i> Requesição</div>
    <ul class="nav-dropdown-items">
        <li class="nav-item {{ Request::is('members*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('members.index') }}">
                <i class="nav-icon">M</i>
                <span>Membros</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="fa fa-users"></i>
        <span>Utilizadores</span>
    </a>
</li>
