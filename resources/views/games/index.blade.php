@extends('layouts.app')

@section('title', 'Video Game List')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h4 mb-0">Video Games</h2>
            @if(isset($activeFilter))
                <span class="badge bg-info text-dark">Filter: {{ $activeFilter }}</span>
            @endif
        </div>

        <div class="mb-3">
            <span class="fw-bold me-2">Quick Filter:</span>
            <a href="{{ route('games.filter') }}" class="btn btn-sm btn-outline-secondary">All</a>
            <a href="{{ route('games.filter', 'Action RPG') }}" class="btn btn-sm btn-outline-primary">Action RPG</a>
            <a href="{{ route('games.filter', 'Sandbox') }}" class="btn btn-sm btn-outline-primary">Sandbox</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Developer</th>
                        <th>Genre</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($games as $game)
                        <tr>
                            <td><strong>{{ $loop->iteration }}</strong></td>
                            <td>
                                <a href="{{ route('games.show', $game['id']) }}" class="fw-bold text-decoration-none">
                                    {{ $game['title'] }}
                                </a>
                                @if($game['genre'] === 'Action RPG')
                                    <span class="badge bg-warning text-dark ms-1">Popular</span>
                                @endif
                            </td>
                            <td>{{ $game['developer'] }}</td>
                            <td><span class="badge bg-secondary">{{ $game['genre'] }}</span></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-danger py-4">
                                No video games found matching your active filter.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection