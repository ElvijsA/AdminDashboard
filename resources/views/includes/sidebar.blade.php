<ul class="nav nav-sidebar">
<li><a href="{{ url('/admin') }}">Dashboard</a></li>
<li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    Users <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/admin/users') }}">View Users</a></li>
        <li><a href="#">Send Invites</a></li>
    </ul>
</li>
<li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    Articles <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/admin/articles') }}">View Articles</a></li>
        <li><a href="{{ url('/admin/articles/create') }}">Create New Article</a></li>
    </ul>
</li>
</ul>
