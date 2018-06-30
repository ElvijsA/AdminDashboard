<ul class="nav nav-sidebar">
<li><a href="{{ url('/admin') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a></li>
<li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-bars" aria-hidden="true"></i> Websites *<span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/admin/websites') }}">View websites</a></li>
        <li><a href="{{ url('/admin/websites/create') }}">Add website</a></li>
    </ul>
</li>
<li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-users" aria-hidden="true"></i> Users <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/admin/users') }}">View All Users</a></li>
        <li><a href="#">User Roles</a></li>
        <li><a href="#">Send new Invites</a></li>
    </ul>
</li>
<li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-indent" aria-hidden="true"></i> Articles <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/admin/articles') }}">View Articles</a></li>
        <li><a href="{{ url('/admin/articles/create') }}">Create New Article</a></li>
    </ul>
</li>
</ul>
