@extends('layouts.app')

@section('title', $game['title'])

@section('content')
<div class="card shadow-sm col-md-8 mx-auto">
    <div class="card-header bg-primary text-white">
        <h2 class="h4 mb-0">{{ $game['title'] }}</h2>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item"><strong>Game ID:</strong> {{ $game['id'] }}</li>
            <li class="list-group-item"><strong>Developer:</strong> {{ $game['developer'] }}</li>
            <li class="list-group-item"><strong>Genre:</strong> {{ $game['genre'] }}</li>
        </ul>

        <a href="{{ route('games.index') }}" class="btn btn-secondary">
            &larr; Back to Game List
        </a>
    </div>
</div>
@endsection