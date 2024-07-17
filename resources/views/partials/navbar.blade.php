<nav>
  <ul>
    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('projects.index') }}">Projects</a></li>
    <li>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
      </form>
    </li>
  </ul>
</nav>
