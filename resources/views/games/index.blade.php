<!DOCTYPE html>
<html>
<head>
    <title>My Video Game List</title>
</head>
<body>
    <h1>My Video Game List</h1>
    <p>Prepared by: JOHN LLOYD R. RAMIGOSO</p>

    <p>Filter by Genre: 
        <a href="{{ route('games.filter') }}">All</a> | 
        <a href="{{ route('games.filter', 'Action RPG') }}">Action RPG</a> | 
        <a href="{{ route('games.filter', 'Sandbox') }}">Sandbox</a>
    </p>

    @if(isset($activeFilter))
        <p>Current Filter: <strong>{{ $activeFilter }}</strong></p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Developer</th>
            <th>Genre</th>
        </tr>

        @foreach ($games as $game)
            <tr>
                <td>
                    <a href="{{ route('games.show', $game['id']) }}">
                        {{ $game['title'] }}
                    </a>
                </td>
                <td>{{ $game['developer'] }}</td>
                <td>{{ $game['genre'] }}</td>
            </tr>
        @endforeach
    </table>

    <p style="margin-top: 15px;">
        <a href="{{ route('games.featured') }}">View Featured Game</a>
    </p>
</body>
</html>