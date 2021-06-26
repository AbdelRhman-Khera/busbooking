<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('stations.index') }}"
       class="nav-link {{ Request::is('stations*') ? 'active' : '' }}">
        <p>Stations</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('buses.index') }}"
       class="nav-link {{ Request::is('buses*') ? 'active' : '' }}">
        <p>Buses</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('trips.index') }}"
       class="nav-link {{ Request::is('trips*') ? 'active' : '' }}">
        <p>Trips</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('lines.index') }}"
       class="nav-link {{ Request::is('lines*') ? 'active' : '' }}">
        <p>Lines</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('schedules.index') }}"
       class="nav-link {{ Request::is('schedules*') ? 'active' : '' }}">
        <p>Schedules</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('seats.index') }}"
       class="nav-link {{ Request::is('seats*') ? 'active' : '' }}">
        <p>Seats</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tickets.index') }}"
       class="nav-link {{ Request::is('tickets*') ? 'active' : '' }}">
        <p>Tickets</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('reservations.index') }}"
       class="nav-link {{ Request::is('reservations*') ? 'active' : '' }}">
        <p>Reservations</p>
    </a>
</li>


