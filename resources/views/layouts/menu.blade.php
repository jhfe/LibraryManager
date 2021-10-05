<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('tags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tags.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Tags</span>
    </a>
</li>
<li class="nav-item {{ Request::is('authors*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('authors.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Authors</span>
    </a>
</li>
<li class="nav-item {{ Request::is('members*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('members.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Members</span>
    </a>
</li>
<li class="nav-item {{ Request::is('publishers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('publishers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Publishers</span>
    </a>
</li>
