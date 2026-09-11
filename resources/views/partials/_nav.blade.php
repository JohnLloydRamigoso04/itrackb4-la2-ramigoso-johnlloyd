<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('games.index') }}">Game Vault</a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('games.index') }}">All Games</a>
            <a class="nav-link" href="{{ route('games.featured') }}">Featured</a>
            <a class="nav-link" href="{{ route('games.filter', 'Action RPG') }}">Action RPGs</a>
        </div>
    </div>
</nav>