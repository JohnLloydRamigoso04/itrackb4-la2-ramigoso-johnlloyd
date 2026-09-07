<!DOCTYPE html>
<html>
<head>
    <title>{{ $game['title'] }} - Detail</title>
</head>
<body>
    <h1>{{ $game['title'] }}</h1>
    <p>Prepared by: JOHN LLOYD R. RAMIGOSO</p>

    <ul>
        <li><strong>ID:</strong> {{ $game['id'] }}</li>
        <li><strong>Developer:</strong> {{ $game['developer'] }}</li>
        <li><strong>Genre:</strong> {{ $game['genre'] }}</li>
    </ul>

    <a href="{{ route('games.index') }}">Back to List</a>
</body>
</html>