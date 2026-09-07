<!DOCTYPE html>
<html>
<head>
    <title>My Video Game List</title>
</head>
<body>
    <h1>My Video Game List</h1>
    <p>Prepared by: JOHN LLOYD R. RAMIGOSO</p>

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
</body>
</html>